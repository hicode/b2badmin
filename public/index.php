<?php
        //error_reporting(E_ALL);
        mb_internal_encoding("UTF-8");

    class Application extends \Phalcon\Mvc\Application {
        protected function _registerServices() {

            $di = new \Phalcon\DI\FactoryDefault();

            $loader = new \Phalcon\Loader();
            $loader->registerDirs(
                    array(
                        __DIR__ . "/../apps/library/",
                        __DIR__ . "/../apps/customhelpers"
                    )
            )->register();

            $di->set("url", function() {
                $url = new \Phalcon\Mvc\Url();
                $mydi = \Phalcon\DI::getDefault();
                $url->setBaseUri($mydi->myglobal_params_array["html_base_path"]);
                return $url;
            });

            //Registering a router
            $di->set("router", function() {

                $router = new \Phalcon\Mvc\Router();

                $scriptname = $_SERVER["SCRIPT_NAME"];
                $routeprefix = str_replace("/index.php", "", $scriptname);

                if ($routeprefix != "") {
                    if (strpos($_REQUEST["_url"], $routeprefix) !== false) {

                    } else {
                        $routeprefix = "";
                    }
                }

                $router->notFound(array(
                    "controller" => "frontend",
                    "action" => "route404"
                ));
                $router->setDefaultModule("b2b");
                $router->setDefaultController("frontend");
                $router->setDefaultAction("index");

                $b2bbackend = new Phalcon\Mvc\Router\Group(array(
                    "module" => "b2b",
                    "controller" => "backend"
                ));

                $b2bbackend->setPrefix($routeprefix);

                $b2bbackend->add("/b2b/{lng}/admin/login(/)?", array(
                    "action" => "login",
                ))->setName("b2b-lng-admin-login");

                $b2bbackend->add("/b2b/{lng}/admin/core/createmodels/{schemaname}/", array(
                    "action" => "createmodels",
                ))->setName("b2b-lng-admin-core-createmodels-schemaname");

                $b2bbackend->add("/b2b/{lng}/admin/core/createcsvsjsons/{schemaname}/", array(
                    "action" => "createcsvsjsons",
                ))->setName("b2b-lng-admin-core-createcsvsjsonss-chemaname");

                $b2bbackend->add("/b2b/{lng}/admin/login(/)?", array(
                    "action" => "login",
                ))->setName("b2b-lng-admin-login");

                $b2bbackend->add("/b2b/{lng}/admin/lock(/)?", array(
                    "action" => "lock",
                ))->setName("b2b-lng-admin-lock");

                $b2bbackend->add("/b2b/{lng}/admin/index(/)?", array(
                    "action" => "index",
                ))->setName("b2b-lng-admin-index");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpagehelperpage");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param1");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}\.{ext}", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param1ext");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param2");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}\.{ext}", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param2ext");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param3");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}\.{ext}", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param3ext");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}/{param4}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param4");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}/{param4}\.{ext}", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param4ext");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}/{param4}/{param5}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param5");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}/{param4}/{param5}\.{ext}", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param5ext");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}/{param4}/{param5}/{param6}(/)?", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param6");

                $b2bbackend->add("/b2b/{lng}/admin/dynhelperpage/{mykatastima}/{helperpage}/{param1}/{param2}/{param3}/{param4}/{param5}/{param6}\.{ext}", array(
                    "action" => "helperpage",
                ))->setName("b2b-lng-admin-dynhelperpage-helperpage-param6ext");


                $router->mount($b2bbackend);

                $b2bfrontend = new Phalcon\Mvc\Router\Group(array(
                    "module" => "b2b",
                    "controller" => "frontend"
                ));

                $b2bfrontend->setPrefix($routeprefix);

                $b2bfrontend->add("/", array(
                    "action" => "index",
                ))->setName("b2b-lng-index");

                $b2bfrontend->add("/b2b/{lng}/route404(/)?", array(
                    "action" => "route404",
                ))->setName("b2b-lng-notfound");



                $router->mount($b2bfrontend);


                $router->handle();
                return $router;
            });
            $di->set("MyTags", function() {
                return new MyTags();
            });
            $this->setDI($di);
        }

        private function makeVars() {

            $di = $this->getDI();
            $di->myglobal_params_array = array();
            $di->myglobal_params_array["updatemvdependends"] = array();
            $di->myglobal_params_array["app"] = "b2b";
            $di->myglobal_params_array["dbmode"] = "db";
            $di->myglobal_params_array["lng_prefix_default"] = MyCustomHelperLng::$Static_Lng_El_Prefix;
            $di->myglobal_params_array["glb_request"] = $_REQUEST;
            $di->myglobal_params_array["_url"] = $_REQUEST["_url"];
            $pieces = explode("/", $di->myglobal_params_array["_url"]);
            $basecontroller = "";
            if (isset($pieces[0])) {
                $basecontroller = $pieces[0];
                if ($basecontroller === "" && isset($pieces[1])) {
                    $basecontroller = $pieces[1];
                }
            }
            $di->myglobal_params_array["base_controller"] = $basecontroller;
            $di->myglobal_params_array["httphost"] = $_SERVER["HTTP_HOST"];
            $di->myglobal_params_array["site"] = $di->myglobal_params_array["httphost"];
            $di->myglobal_params_array["basepath"] = $_SERVER["REQUEST_SCHEME"] . "://" . $di->myglobal_params_array["httphost"] . "/";
            $di->myglobal_params_array["redirecturl"] = "";
            if (isset($_SERVER["REDIRECT_URL"])) {
                $di->myglobal_params_array["redirecturl"] = $_SERVER["REDIRECT_URL"];
            }

            $di->myglobal_params_array["request"] = $di->myglobal_params_array["basepath"] . substr($di->myglobal_params_array["redirecturl"], 1);
            $di->myglobal_params_array["documentroot"] = $_SERVER["DOCUMENT_ROOT"];
            $di->myglobal_params_array["scriptfilename"] = $_SERVER["SCRIPT_FILENAME"];
            $di->myglobal_params_array["scriptdocumentroot"] = str_ireplace("/index.php", "", $di->myglobal_params_array["scriptfilename"]);
            $di->myglobal_params_array["publicpath"] = str_ireplace($di->myglobal_params_array["documentroot"], "", $di->myglobal_params_array["scriptfilename"]);
            $di->myglobal_params_array["publicpath"] = str_ireplace("/index.php", "", $di->myglobal_params_array["publicpath"]);
            if (strpos($di->myglobal_params_array["publicpath"], "/") === 0) {
                $di->myglobal_params_array["publicpath"] = substr($di->myglobal_params_array["publicpath"], 1);
            }
            $di->myglobal_params_array["custompath"] = "custom/";
            $di->myglobal_params_array["publicpath_with_custompath"] = $di->myglobal_params_array["publicpath"];
            if ($di->myglobal_params_array["publicpath_with_custompath"] !== "") {
                $di->myglobal_params_array["publicpath_with_custompath"] = $di->myglobal_params_array["publicpath_with_custompath"] . "/";
            }
            $di->myglobal_params_array["publicpath_with_custompath"] = $di->myglobal_params_array["publicpath_with_custompath"] . $di->myglobal_params_array["custompath"];
            $di->myglobal_params_array["html_base_path"] = "/";
            if (strlen($di->myglobal_params_array["publicpath"]) > 0) {
                $di->myglobal_params_array["html_base_path"] = "/" . $di->myglobal_params_array["publicpath"] . "/";
            }
            $di->myglobal_params_array["site_index_path"] = $di->myglobal_params_array["html_base_path"];

            $di->myglobal_params_array["base_path_with_publicpath"] = $di->myglobal_params_array["basepath"] . $di->myglobal_params_array["publicpath"];
            if (substr($di->myglobal_params_array["base_path_with_publicpath"], -1) !== "/") {
                $di->myglobal_params_array["base_path_with_publicpath"] = $di->myglobal_params_array["base_path_with_publicpath"] . "/";
            }
            $di->myglobal_params_array["bl_bulkcreate_translates"] = true;
            $di->myglobal_params_array["cacheenabled"] = false;
            $di->myglobal_params_array["bash_logging"] = true;
            $di->myglobal_params_array["objcontroller"] = $this;
            $di->myglobal_params_array["lng"] = MyCustomHelperLng::$Static_Lng_El_Prefix;

            $di->myglobal_params_array["pagedescription"] = "Aio App";
            $di->myglobal_params_array["pagekeywords"] = "Aio App";
            $di->myglobal_params_array["pagetitle"] = "Aio App";
            $di->myglobal_params_array["pagerobots"] = "index, follow";
            $di->myglobal_params_array["createdate"] = " ";

            $di->myglobal_params_array["sitesubbasepath"] = "";

            $di->controller_params_array = $di->myglobal_params_array; 
        }

        public function main() {

            $this->_registerServices();

            //Register the installed modules
            $this->registerModules(array(
                "b2b" => array(
                    "className" => "B2b\Module",
                    "path" => "../apps/b2b/Module.php"
                )
            ));
            $this->makeVars();
            $di = $this->getDI();
            if ($di->myglobal_params_array["base_controller"] === "b2b" && (
                    strpos($di->myglobal_params_array["_url"], "core/createmodels") ||
                    strpos($di->myglobal_params_array["_url"], "core/createcsvsjsons")
                    )
            ) {
                $handle = $this->handle();
                $content = $handle->getContent();
            } else {

                $key = md5($di->myglobal_params_array["app"] . $di->myglobal_params_array["httphost"] . $di->myglobal_params_array["redirecturl"]);
                $cache = new MyCustomHelperCache($key, MyCustomHelperCache::My_Cache_Lifetime_Content, MyCustomHelperCache::My_Cache_Category_Content);
                $content = "";
                if (!$cache->getContentExist()) {

                    $cache->setContent($content);
                    $handle = $this->handle();
                    $content = $handle->getContent();
                    if ($di->controller_params_array["base_controller"] == "mod") {
                        $classviewmodtranslate = \MyCustomHelperCore::My_Core_Get_Classname("Viewmodtranslate");
                        $content = $classviewmodtranslate::getReplacementTextFromBulkKeyvaluesFromKeynames($content);
                    } else {
                        $content = B2b\Models\CoreModels\PpB2bAdminVftranslate::getReplacementTextFromBulkKeyvaluesFromKeynames($content);
                    }

                    $content = MyCustomHelperStringTools::minifyHTML($content);
                    if ($this->response->getStatusCode() == 0) {
                        $cache->setContent($content);
                    } else {
                        $cache->removeCache();
                    }
                } else {
                    $content = $cache->getContent();
                }
                \B2b\Models\CoreModels\PpB2bAdminMaterializedViews::refreshMaterializedViewDependBulk();
            }

            echo $content;
        }

    }

    $application = new Application();
    $application->main();

        
