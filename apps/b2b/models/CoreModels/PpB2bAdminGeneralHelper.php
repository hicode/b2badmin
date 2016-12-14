<?php

namespace B2b\Models\CoreModels;

class PpB2bAdminGeneralHelper extends DlB2bAdminGeneralHelper {

    public static function ppGet_AddSC_Search_Tpl($id = 'SCMembersSuggestion', $placeholder = 'Επιλογή μέλους...') {
        $tpl = '
            <div class="input-group suggestion-parent" style="margin-bottom: 12px;">
                <input id="{' . $id . '}" class="form-control text-center"  placeholder="' . $placeholder . '" />
                <span class="input-group-btn">
                    <a type="button" class="btn btn-default close-suggestion">
                        <i class="fa fa-times"></i>
                    </a>
                </span>
            </div>
        ';
        return $tpl;
    }

    public static function Get_Dashboard_Counters($blshow = true, $blexpand = true) {
        $di = \Phalcon\DI::getDefault();
        $arrcounters = PpB2bAdminGetComplex::GetComplex('vfcrmcountersm', null, null, array('mykatastima' => array('value' => \CHCrmCParams::My_get_mykatastima())));
        if (isset($arrcounters) && is_array($arrcounters) && count($arrcounters > 0)) {
            $arrcounters = $arrcounters[0];
        }
        $ret = '';
        if ($blshow) {
            $expand = 'collapse';
            $portletbodystyle = '';
            if (!$blexpand) {
                $expand = 'expand';
                $portletbodystyle = 'display: none;';
            }
            $urltotmembers = \MyCustomHelperPages::makePageAngularForBread('inner_home_crm_members.html', null, true);
            $ret = '
            <div class="row">
                
                <div class="col-md-12 col-sm-12">
                    <div class="portlet box grey-mint">
                        <div class="portlet-title">
                            <div class="caption">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlcountersset1title') . '</div>
                            <div class="tools">
                                <a class="' . $expand . '" href="" title="Hide/Show"> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="' . $portletbodystyle . '">
                            <div class="row margin-bottom-15">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat blue">
                                        <div class="visual">
                                            <!--<i class="fa fa-comments"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="' . $arrcounters['totcustomers'] . '">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dltotalmemberstitle') . '</div>
                                        </div>
                                        <a id="AddMembers" class="more" href="javascript:;"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat red-intense">
                                        <div class="visual">
                                            <!--<i class="fa fa-bar-chart-o"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="' . $arrcounters['totcustomersenerga'] . '">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlactivememberstitle') . '</div>
                                        </div>
                                        <a id="" class="more" href="javascript:PpDashboard.AddMembersEnerga();">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat green-haze">
                                        <div class="visual">
                                            <!--<i class="fa fa-shopping-cart"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="' . $arrcounters['expiremonthtotal'] . '">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlsindromespoulingouminatitle') . '</div>
                                        </div>
                                        <a id="" class="more" href="javascript:PpDashboard.SCExpireInMonth();">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat purple-plum">
                                        <div class="visual">
                                            <!--<i class="fa fa-globe"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="' . $arrcounters['totcustomerswithipoloipo'] . '">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlpelatesmeypoloipotitle') . '</div>
                                        </div>
                                        <a id="" class="more" href="javascript:PpDashboard.AddMembersIpoloipo();">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat green">
                                        <div class="visual">
                                            <!--<i class="fa fa-comments"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="' . $arrcounters['annualpaymenttotal'] . '">0</span>
                                                &nbsp;&euro;
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dletisiaesodatitle') . '</div>
                                        </div>
                                        <a class="more" href="javascript:;"> View more
                                            <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat red-flamingo">
                                        <div class="visual">
                                            <!--<i class="fa fa-bar-chart-o"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="' . $arrcounters['monthlypaymenttotal'] . '">0</span>
                                                &nbsp;&euro;
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlminieaesodatitle') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat grey-cascade">
                                        <div class="visual">
                                            <!--<i class="fa fa-shopping-cart"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="31">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlmembersbeenexercising') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="dashboard-stat blue-dark">
                                        <div class="visual">
                                            <!--<i class="fa fa-globe"></i>-->
                                        </div>
                                        <div class="details">
                                            <div class="number">
                                                <span data-counter="counterup" data-value="76">0</span>
                                            </div>
                                            <div class="desc">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlmembershaveexercised') . '</div>
                                        </div>
                                        <a class="more" href="#">
                                            View more <i class="m-icon-swapright m-icon-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
		
            </div>
        ';
        }
        return $ret;
    }

    public static function Get_Dashboard_Buttons($portlet = true) {
        $di = \Phalcon\DI::getDefault();
        if ($portlet) {
            return '
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="portlet box grey-mint">
                            <div class="portlet-title">
                                <div class="caption">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('dlbuttonsset1title') . '</div>
                                <div class="tools">
                                    <a class="collapse" href="" title="Hide/Show"> </a>
                                </div>
                            </div>
                            <div class="portlet-body">' . self::Get_Dashboard_Buttons_Inner() . '</div>
                        </div>
                    </div>
                </div>';
        } else {
            return self::Get_Dashboard_Buttons_Inner();
        }
    }

    private static function Get_Dashboard_Link($arrlink) {
        $ret = '<a data-mykatastima="' . \CHCrmCParams::My_get_mykatastima() . '" id="' . (isset($arrlink['id']) ? $arrlink['id'] : '') . '" class="btn default dark-stripe btn-block" href="' . (isset($arrlink['href']) ? $arrlink['href'] : '') . '" style="margin-bottom:12px;">' . (isset($arrlink['title']) ? $arrlink['title'] : '') . '</a>';
        return $ret;
    }

    private static function Get_Dashboard_Buttons_Inner() {
        $di = \Phalcon\DI::getDefault();
        $arrparams = array();
        if (\CHCrmCParams::My_get_mykatastima() == 'hair1') {
            $arrparams['energapaketatitle'] = false;
            $arrparams['pragmatopoihmenestitle'] = false;
        }
        $ret = '<div class="row">';
        $studiotitle = isset($arrparams['studiotitle']) ? $arrparams['studiotitle'] : true;
        $meloititle = isset($arrparams['meloititle']) ? $arrparams['meloititle'] : true;
        $syndromestitle = isset($arrparams['syndromestitle']) ? $arrparams['syndromestitle'] : true;
        $oikonomikatitle = isset($arrparams['oikonomikatitle']) ? $arrparams['oikonomikatitle'] : true;
        $calendartitle = isset($arrparams['calendartitle']) ? $arrparams['calendartitle'] : true;
        $ypiresiestitle = isset($arrparams['ypiresiestitle']) ? $arrparams['ypiresiestitle'] : true;
        $katigoriestitle = isset($arrparams['katigoriestitle']) ? $arrparams['katigoriestitle'] : true;
        $anazitisimeloustitle = isset($arrparams['anazitisimeloustitle']) ? $arrparams['anazitisimeloustitle'] : true;
        $neomelostitle = isset($arrparams['neomelostitle']) ? $arrparams['neomelostitle'] : true;
        $ypoloipatitle = isset($arrparams['ypoloipatitle']) ? $arrparams['ypoloipatitle'] : true;
        $liksiprothesmatitle = isset($arrparams['liksiprothesmatitle']) ? $arrparams['liksiprothesmatitle'] : true;
        $neasyndromititle = isset($arrparams['neasyndromititle']) ? $arrparams['neasyndromititle'] : true;
        $energessyndromestitle = isset($arrparams['energessyndromestitle']) ? $arrparams['energessyndromestitle'] : true;
        $energapaketatitle = isset($arrparams['energapaketatitle']) ? $arrparams['energapaketatitle'] : true;
        $pragmatopoihmenestitle = isset($arrparams['pragmatopoihmenestitle']) ? $arrparams['pragmatopoihmenestitle'] : true;
        $esodaeksodatitle = isset($arrparams['esodaeksodatitle']) ? $arrparams['esodaeksodatitle'] : true;
        $misthodosiatitle = isset($arrparams['misthodosiatitle']) ? $arrparams['misthodosiatitle'] : true;
        $apodikseistitle = isset($arrparams['apodikseistitle']) ? $arrparams['apodikseistitle'] : true;
        $dlligoparanapeltitle = isset($arrparams['dlligoparanapeltitle']) ? $arrparams['dlligoparanapeltitle'] : true;
        $dlperparanapeltitle = isset($arrparams['dlperparanapeltitle']) ? $arrparams['dlperparanapeltitle'] : true;
        $dlligoparanamathtitle = isset($arrparams['dlligoparanamathtitle']) ? $arrparams['dlligoparanamathtitle'] : true;
        $dlperparouanamathititle = isset($arrparams['dlperparouanamathititle']) ? $arrparams['dlperparouanamathititle'] : true;

        if ($studiotitle) {
            $ret.='
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('studiotitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">';
            if ($calendartitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => \MyCustomHelperPages::makePage(\CHCrmCConstantsPages::CONST_PAGES_ADMIN_INDEX) . '#/' . $di->controller_params_array['lng'] . '/' . \CHCrmCParams::My_get_mykatastima() . '/inner_home_crm_calendar.html', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('calendartitle')));
            }
            if ($ypiresiestitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:DlDashboard.AddPackets();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('ypiresiestitle')));
            }
            if ($katigoriestitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:DlDashboard.AddServices();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('katigoriestitle')));
            }

            $ret.='         </div>
                        </div>
                    </div>
                </div>';
        }
        if ($meloititle) {
            $ret.='
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('meloititle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">';
            $ret.=self::Get_Dashboard_Link(array('id' => 'addmembers', 'href' => 'javascript:PpDashboard.AddMembers();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('meloititle')));
            if ($anazitisimeloustitle) {
                $ret.=self::Get_Dashboard_Link(array('id' => 'SearchMember', 'href' => 'javascript:PpDashboard.SearchMember();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('anazitisimeloustitle')));
            }
            if ($neomelostitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:DlDashboard.NewMember();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('neomelostitle')));
            }
            if ($ypoloipatitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:PpDashboard.MembersIpoloipa();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('ypoloipatitle')));
            }
            if ($liksiprothesmatitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:PpDashboard.MembersLixiprothesma();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('liksiprothesmatitle')));
            }

            $ret.='         </div>
                        </div>
                    </div>
                </div>';
        }
        if ($syndromestitle) {
            $ret.='
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('syndromestitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">';
            $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:PpDashboard.SCShow();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('syndromestitle')));
            if ($anazitisimeloustitle) {
                $ret.=self::Get_Dashboard_Link(array('id' => 'AddSC', 'href' => 'javascript:;', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('neasyndromititle')));
            }
            if ($energessyndromestitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:PpDashboard.SCEnergesShow();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('energessyndromestitle')));
            }
            if ($energapaketatitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:PpDashboard.SCEnergesVisitsOpenShow();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('energapaketatitle')));
            }
            if ($pragmatopoihmenestitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:PpDashboard.SCVisitsDoneShow();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('pragmatopoihmenestitle')));
            }

            $ret.='         </div>
                        </div>
                    </div>
                </div>';
        }
        if ($oikonomikatitle) {
            $ret.='
                <div class="col-md-3 col-sm-3">
                    <div class="portlet light tasks-widget bordered text-center">
                        <h2 style="margin-top: 5px; margin-bottom: 20px;">' . PpB2bAdminVftranslate::getKeyvalueFromKeyname('oikonomikatitle') . '</h2>
                        <div classs="portlet-body">
                            <div class="clearfix">';
            if ($esodaeksodatitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:DlDashboard.AddIncomesExpenses();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('esodaeksodatitle')));
            }
            if ($misthodosiatitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:;', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('misthodosiatitle')));
            }
            if ($katigoriestitle) {
                $ret.=self::Get_Dashboard_Link(array('href' => 'javascript:DlDashboard.AddReceipts();', 'title' => PpB2bAdminVftranslate::getKeyvalueFromKeyname('apodikseistitle')));
            }

            $ret.='         </div>
                        </div>
                    </div>
                </div>';
        }
        $ret.='</div>';
        return $ret;
    }

}
