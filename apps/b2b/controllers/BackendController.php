<?php

namespace B2b\Controllers;

use B2b\Models\ProductionModels;
use \Phalcon\Mvc\Model\MetaData\Strategy\Annotations as StrategyAnnotations;

class BackendController extends \Phalcon\Mvc\Controller {

    public function initialize() {
        $a=1;
        \CHCrmCParams::My_get_controller_params($this);
        $a=2;
//$a=  \B2b\Models\CoreModels\PpB2bAdminCodes::get_Row_By_Code(10000);
    }

    public function createmodelsAction() {
        $di = $this->getDI();
        $ret = \MyCustomHelperCore::My_core_create_models();
        $di->controller_params_array['form']['msg'] = $ret['result']['message'];
        $this->view->pick(['backend/createmodels']);
        $this->view->setLayout('layoutblank');
    }

    public function createcsvsjsonsAction() {
        $di = $this->getDI();
        $ret = \MyCustomHelperCoreToolsCsvBash::CsvBash_Script_Create_Csvs_Jsons(array('app' => $di->controller_params_array['app'], 'lng' => $di->controller_params_array['lng'], 'blmetadata' => 1, 'schemaname' => $di->controller_params_array['schemaname']));
        $di->controller_params_array['form']['msg'] = $ret['result']['message'];
        $this->view->pick(['backend/createcsvsjsons']);
        $this->view->setLayout('layoutblank');
    }

    public function indexAction() {
        $di = $this->getDI();
        if (\MyCustomHelperSession::My_check_is_login_and_unlock() !== true) {
            return;
        }

        $this->view->setLayout($di->controller_params_array['template']['template_view_dir'] . 'index/' . $di->controller_params_array['template']['template_admin_theme']);
    }

    public function helperpageAction() {
//\MCHCDataTableAjax::BE_getDataTableData('B2bAioViewmoditems',0,10);
        $di = $this->getDI();
        $helperpage = $di->controller_params_array['helperpage'];
        $selectedview = $di->controller_params_array['template']['template_view_dir'] . "index/dynhelperpage/" . $helperpage;
        if (substr($helperpage, 0, 3) === 'login-') {
            if (\MyCustomHelperSession::My_check_is_login_and_unlock() !== true) {
                return;
            }
        }

        if (isset($di->controller_params_array['param1'])) {

            if ($di->controller_params_array['param1'] == 'setings_tables') {
                $arr = array('cols' => array('0' => array('7')));
            }
            if ($helperpage === 'getpassword') {
                $pass = \B2b\Models\CoreModels\PpB2bAdminUsers::getPass($di->controller_params_array['param1']);

                $di->controller_params_array['jsondata'] = json_encode(array($di->controller_params_array['param1'] => $pass));
                $selectedview = $di->controller_params_array['template']['template_view_dir'] . "index/dynhelperpage/posts";
            } elseif ($helperpage === $di->controller_params_array['settings']['Helper_Page_Js_Form_Editable'] ||
                    $helperpage === $di->controller_params_array['settings']['Js_Table_Ajax_Page']) {
                \CHCrmCHelperPageJs::Do_Action();
            } elseif ($helperpage === $di->controller_params_array['settings']['Helper_Page_Posts']) {
                \CustomHelperBackendControllerHelperPagePosts::Do_Action();
            } elseif ($helperpage === $di->controller_params_array['settings']['Helper_Page_New_Record']) {
                \CustomHelperBackendControllerHelperNewRecord::Do_Action();
            } elseif ($helperpage === $di->controller_params_array['settings']['Helper_Page_Data_Table_Ajax_Page']) {
                //\CHCrmCDataTableAjax::Do_Action();
            } elseif (
                    $helperpage === $di->controller_params_array['settings']['Helper_Page_Modal_Record_Add'] ||
                    $helperpage === $di->controller_params_array['settings']['Helper_Page_Modal_Operations']) {
                \CustomHelperBackendControllerHelperPageModal::Do_Action();
            } elseif ($helperpage === $di->controller_params_array['settings']['Helper_Page_Async']) {
                \CustomHelperBackendControllerHelperPageAsync::Do_Action();
            } elseif ($helperpage === $di->controller_params_array['settings']['Helper_Page_Tbl_Record']) {
                \CustomHelperBackendControllerHelperPageTblJobs::Do_Action();
            }
        }

        //$this->view->setLayout('backend/template/metronic_v3.6.2/helperpage/layout');
        $this->view->pick($selectedview);
    }

    public function loginAction() {
        $di = $this->getDI();
        $di->controller_params_array['form']['errmsg'] = 'Enter username and password.';
        $di->controller_params_array['form']['showerrmsg'] = 0;
        if (isset($_REQUEST['sessid'])) {
            $sessid = $_REQUEST['sessid'];
            if (isset($_REQUEST['username'], $_REQUEST['password'])) {
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                $blfound = \MyCustomHelperSession::My_do_login($sessid, $username, $password);
                if ($blfound === true) {
                    return \MyCustomHelperRedirector::RedirectToPage(\MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_INDEX));
                    //return $this->response->redirect('/el/b2b/admin/index/');
                }
            }
            $di->controller_params_array['form']['errmsg'] = "Wrong username or password";
            $di->controller_params_array['form']['showerrmsg'] = 1;
        }
        \MyCustomHelperSession::My_regenerate();
        $this->view->pick([$di->controller_params_array['template']['template_view_dir'] . 'login/login']);
        $this->view->setLayout($di->controller_params_array['template']['template_view_dir'] . 'login/' . $di->controller_params_array['template']['template_admin_login_theme']);
    }

    public function lockAction() {
        $di = $this->getDI();
        $lng = $this->dispatcher->getParam("lng");

        $di->controller_params_array['static_translates'] = \CHCrmCParams::My_get_static_translate_all($lng);
        \MyCustomHelperSession::My_lock_user();
        if (!\MyCustomHelperSession::My_check_is_lock()) {
            return \MyCustomHelperRedirector::RedirectToPage(\MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_LOGIN));
        } else {
            $rowuser = json_decode(\MyCustomHelperSession::My_get_param_val('jsonrowuser'), true);
            $di->controller_params_array['form']['errmsg'] = 'Wrong password!!!';
            $di->controller_params_array['form']['showerrmsg'] = 0;
            if (isset($_REQUEST['sessid'])) {
                $sessid = $_REQUEST['sessid'];
                if (isset($_REQUEST['username'], $_REQUEST['password'])) {
                    $username = $_REQUEST['username'];
                    $password = $_REQUEST['password'];
                    $blfound = \MyCustomHelperSession::My_do_login($sessid, $username, $password);
                    if ($blfound === true) {
                        if (isset($_REQUEST['prevpage'])) {
                            $url = $_REQUEST['prevpage'];
                        } else {
                            $url = \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_INDEX);
                        }
                        return $this->response->redirect(urldecode($url));
                    }
                }
                $di->controller_params_array['form']['showerrmsg'] = 1;
            }
        }
        $this->view->pick([$di->controller_params_array['template']['template_view_dir'] . 'lock/lock']);
        $this->view->setLayout($di->controller_params_array['template']['template_view_dir'] . 'lock/' . $di->controller_params_array['template']['template_admin_lock_theme']);
    }

}
