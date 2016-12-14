<?php

// DLS20161111

namespace B2b\Models\CoreModels;

class DlB2bAdminMetronic454PluginPrintPDF extends PpB2bAdminVfroutepagepluginnoavailableparams {

    public static $AvailablePluginAliasName = 'printpdfv100';
    protected static $printPdfHelperPage = 'inner_home_crm_pdf';
    protected static $postPluginPrintSinglePDFAction = 'printsingle';
    protected static $postPluginPrintMultiplePDFAction = 'printmultiple';
    protected static $downloadHrefPlaceholder = 'DOWNLOAD_HREF';
    protected static $javascriptPlaceholder = 'BOTTOM_JAVASCRIPT';
    // TODO: Na to ferw apo allou
    protected static $tblArr = [
        'payment' => 'corecrmcustomercontractpayment',
        'contract' => 'none'
    ];
    protected static $tblDataArr = [
        'payment' => 'vfcrmcustomercontractpaymentm',
        'contract' => 'none'
    ];
    protected static $tblDataArrKeys = [
        'payment' => 'fkcorecrmcustomercontractpaymentid',
        'contract' => 'none'
    ];

    public static function Get_Post_Plugin_Print_Single_PDF_Action() {
        return self::$postPluginPrintSinglePDFAction;
    }

    public static function Get_Print_PDF_Helper_Page() {
        return self::$printPdfHelperPage;
    }

    private static function Get_Recinv_ID() {
        $di = \Phalcon\DI::getDefault();
        $ret = null;
        $fkcorecrmcustomercontractpayment = $di->controller_params_array['param4'];
        $mykatastima = \CHCrmCParams::My_get_mykatastima();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmrecinvissued');
        $record = $classname::findFirst([
                    "conditions" => "fkcorecrmcustomercontractpayment=:fkcorecrmcustomercontractpayment: AND mykatastima=:mykatastima: AND bldeleted=:bldeleted: AND bldisabled=:bldisabled: AND blpublished=:blpublished:",
                    "bind" => [
                        "fkcorecrmcustomercontractpayment" => $fkcorecrmcustomercontractpayment,
                        "mykatastima" => $mykatastima,
                        "bldeleted" => 0,
                        "bldisabled" => 0,
                        "blpublished" => 1
                    ]
        ]);
        if (is_object($record)) {
            $ret = $record->getId();
        }
        return $ret;
    }

    private static function Get_Record() {
        $di = \Phalcon\DI::getDefault();
        $ret = null;
        $id = $di->controller_params_array['param4'];
        $recinvtype = $di->controller_params_array['param5'];
        $mykatastima = \CHCrmCParams::My_get_mykatastima();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname(self::$tblArr[$recinvtype]);
        $record = $classname::findFirst([
                    "conditions" => "id=:id: AND mykatastima=:mykatastima: AND bldeleted=:bldeleted: AND bldisabled=:bldisabled: AND blpublished=:blpublished:",
                    "bind" => [
                        "id" => $id,
                        "mykatastima" => $mykatastima,
                        "bldeleted" => 0,
                        "bldisabled" => 0,
                        "blpublished" => 1
                    ]
        ]);
        if (is_object($record)) {
            $ret = $record;
        }
        return $ret;
    }

    private static function Check_Printed($record) {
        $blisprinted = $record->getBlisissued();
        $ret = false;
        if ($blisprinted == 1) {
            $ret = true;
        }
        return $ret;
    }

    private static function Update_Recinv_Printed($data) {
        $di = \Phalcon\DI::getDefault();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmrecinvprinted');
        $record = new $classname();
        foreach ($data as $field => $value) {
            $tfield = 'set' . ucfirst($field);
            $record->{$tfield}($value);
        }
        if ($record->save() == false) {
            // TODO: Na kanw kati stin periptwsi pou den kanei save edw
            $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata']['recinvissuedid'] = null;
        } else {
            $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata']['recinvissuedid'] = $data['fkcorecrmrecinvissued'];
        }
    }

    private static function Update_Record_Set_Printed($record) {
        $di = \Phalcon\DI::getDefault();
        $record->setBlisissued(1);
        if ($record->save() == false) {
            // TODO: Na kanw kati se periptwsi pou den swthei to record
        } else {
            $arr = [
                'fkcorecrmcustomercontractpayment' => $record->getId(),
                'dtissued' => $record->getActualdtpayment(),
                'recinvnum' => self::Get_RecInv_Cnt(),
                'mykatastima' => \CHCrmCParams::My_get_mykatastima(),
                'blpublished' => 1
            ];
            self::Write_Printed_Data($arr);
        }
    }

    private static function Get_RecInv_Cnt() {
        $di = \Phalcon\DI::getDefault();
        $mykatastima = \CHCrmCParams::My_get_mykatastima();
        $myschema = $di->controller_params_array['basesettings']['schemaname'];
        //$id = 1;
        $ret = -1;
        $con = $di->get('dbopen', $di);
        // TODO: Na kanw elegxous meta kai prin apo sql.
        $sql = "SELECT nextval('" . $myschema . ".recinv_" . $mykatastima . "_seq'::regclass) myseqval";
        $arr = $con->fetchAll($sql);
        $ret = $arr[0]['myseqval'];
        return $ret;
    }

    private static function Write_Printed_Data($data) {
        $di = \Phalcon\DI::getDefault();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('corecrmrecinvissued');
        $record = new $classname();
        foreach ($data as $field => $value) {
            $tfield = 'set' . ucfirst($field);
            $record->{$tfield}($value);
        }
        if ($record->save() == false) {
            $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata']['recinvissuedid'] = null;
        } else {
            $arr = [
                'fkcorecrmrecinvissued' => $record->getId(),
                'dtprinted' => date('Y-m-d H:i:s'),
                'mykatastima' => \CHCrmCParams::My_get_mykatastima(),
                'blpublished' => 1
            ];
            self::Update_Recinv_Printed($arr);
        }
    }

    private static function Get_Printed_Data() {
        $di = \Phalcon\DI::getDefault();
        $mykatastima = \CHCrmCParams::My_get_mykatastima();
        $fkcorecrmrecinvissued = $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata']['recinvissuedid'];
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname('vfcrmrecinvissuedprinted');
        $record = $classname::findFirst([
                    "conditions" => "fkcorecrmrecinvissued=:fkcorecrmrecinvissued: AND mykatastima=:mykatastima: AND bldeleted=:bldeleted: AND bldisabled=:bldisabled: AND blpublished=:blpublished:",
                    "bind" => [
                        "fkcorecrmrecinvissued" => $fkcorecrmrecinvissued,
                        "mykatastima" => $mykatastima,
                        "bldeleted" => 0,
                        "bldisabled" => 0,
                        "blpublished" => 1
                    ],
                    "order" => "dtprinted DESC",
                    "limit" => 1,
                ])->toArray();
        if (is_array($record) && !empty($record)) {
            $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata'] = [
                'date_issued' => explode(' ', $record['dtissued'])[0],
                'time_issued' => explode(' ', $record['dtissued'])[1],
                'date_printed' => explode(' ', $record['dtprinted'])[0],
                'time_printed' => explode(' ', $record['dtprinted'])[1],
                'recinv_number' => $record['recinvnum'],
                'recinv_id' => $fkcorecrmrecinvissued
            ];
        } else {
            $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata'] = [
                'date_issued' => '0000-00-00',
                'time_issued' => '00:00',
                'date_printed' => '0000-00-00',
                'time_printed' => '00:00',
                'recinv_number' => -1,
            ];
        }
    }

    private static function Get_Single_Data() {
        $di = \Phalcon\DI::getDefault();
        $id = $di->controller_params_array['param4'];
        $type = $di->controller_params_array['param5'];
        $mykatastima = \CHCrmCParams::My_get_mykatastima();
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname(self::$tblDataArr[$type]);
        $conditions = self::$tblDataArrKeys[$type] . "=:" . self::$tblDataArrKeys[$type] . ": AND bldeleted=:bldeleted: AND bldisabled=:bldisabled: AND blpublished=:blpublished: AND mykatastima=:mykatastima:";
        $bind = [
            self::$tblDataArrKeys[$type] => $id,
            "mykatastima" => $mykatastima,
            "bldeleted" => 0,
            "bldisabled" => 0,
            "blpublished" => 1
        ];
        $record = $classname::findFirst([
                    "conditions" => $conditions,
                    "bind" => $bind
                ])->toArray();
        if (is_array($record)) {
            $data = &$di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata'];
            $data['customerfull'] = $record['customerfull'];
            $data['customerprofession'] = 'NO_PROFESSION';
            $data['customeraddress'] = 'NO_ADDRESS';
            $data['customeraregion'] = 'NO_REGION';
            $data['gymname'] = 'NO_GYMNAME';
            $data['gymsupervisorname'] = 'NO_SUPERVISORNAME';
            $data['gymsupervisorprofession'] = 'NO_SUPERVISORPROFESSION';
            $data['gymprofession'] = 'NO_GYMPROFESSION';
            $data['gymfulladdress'] = 'NO_GYMFULLADDRESS';
            $data['gympostcode'] = 'NO_GYMPOSTCODE';
            $data['gymtaxid'] = 'NO_GYMTAXID';
            $data['gymtaxoffice'] = 'NO_GYMTAXOFFICE';
            $data['gymtelland'] = 'NO_GYMTELLAND';
            $data['gymsite'] = 'NO_GYMSITE';
            $data['subject'] = $record['customercontracttitle'];
            $data['contract'] = (float) $record['customercontractprice'];
            $data['subtotal'] = (float) $record['actualpaymenttotal'];
            $data['discountnum'] = (float) $record['customercontractdiscountnum'];
            $data['cleanvalue'] = (float) $record['actualpaymenttotal'];
            $data['vat'] = (float) $record['ccptaxpercentage'];
            $data['vatnum'] = (float) $record['actualpaymenttotal'] * ( (float) $record['ccptaxpercentage'] / 100 );
            $data['totalwithvat'] = ((float) $record['actualpaymenttotal'] + ((float) $record['actualpaymenttotal'] * ( (float) $record['ccptaxpercentage'] / 100 ))) - (float) $record['customercontractdiscountnum'];
        }
    }

    private static function Get_Single_Body() {
        // param4 => id
        // param5 => type
        $di = \Phalcon\DI::getDefault();
        $record = self::Get_Record();
        $flag = self::Check_Printed($record);
        if ($flag) {
            $recinvid = self::Get_Recinv_ID();
            $arr = [
                'fkcorecrmrecinvissued' => $recinvid,
                'dtprinted' => date('Y-m-d H:i:s'),
                'mykatastima' => \CHCrmCParams::My_get_mykatastima(),
                'blpublished' => 1
            ];
            self::Update_Recinv_Printed($arr);
        } else {
            self::Update_Record_Set_Printed($record);
        }
        self::Get_Printed_Data();
        self::Get_Single_Data();
        self::Get_Single_HTML();
    }

    private static function Get_Multiple_Body() {
        
    }

    public static function Get_Body() {
        $di = \Phalcon\DI::getDefault();
        $type = $di->controller_params_array['param1'];
        if ($type === self::$postPluginPrintSinglePDFAction) {
            self::Get_Single_Body();
        } else if ($type === self::$postPluginPrintMultiplePDFAction) {
            self::Get_Multiple_Body();
        }
    }
    
    private static function Create_Command () {
        $di = \Phalcon\DI::getDefault();
        $pluginparams = &$di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF];
        $orientation = $pluginparams['settings']['orientation'];
        $orientationtxt = '';
        if($orientation === 'L') {
            $orientationtxt = '-O Landscape';
        }
        //$convertcommand = "wkhtmltopdf $orientationtxt " . $publicfilepathname . ' ' . $fullfileconvertedpathname . ' 2>&1';        
        $pluginparams['convertcommand'] = "wkhtmltopdf-amd64 $orientationtxt " . $pluginparams["publicfilepathname"] . " " . $pluginparams["fullfileconvertedpathname"] . " 2>&1";
    }
    
    private static function Print_As_HTML() {
        $di = \Phalcon\DI::getDefault();
        $pluginparams = $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF];
        $di->controller_params_array['pdftpl'] = $pluginparams['singlebodyhtml'];
        $di->controller_params_array['printtype'] = 'HTML';
    }

    private static function Print_As_PDF() {
        $di = \Phalcon\DI::getDefault();
        $pluginparams = &$di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF];
        $orientation = $pluginparams['settings']['orientation'];
        $tpl = $pluginparams['singlebodyhtml'];
        file_put_contents($pluginparams['fullfilepathname'], $tpl);
        putenv('PATH=/usr/bin/');
        self::Create_Command();
        $convertcommand = $pluginparams['convertcommand'];     
        exec($convertcommand, $a, $b);
        if ($b == 0) {
            $pdfulr = $pluginparams['fullfileconvertedurlpathname'];
            if( filter_var($pdfulr, FILTER_VALIDATE_URL) !== false ) {
                $di->controller_params_array['pdfurl'] = $pdfulr;
                $di->controller_params_array['printtype'] = 'PDF';
            }
        }
    }

    private static function Print_Body() {
        $di = \Phalcon\DI::getDefault();
        $pluginparams = &$di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF];
        $printtype = $pluginparams['settings']['printtype'];
        $id = $pluginparams['printedrecorddata']['recinv_id'];
        $pluginparams['filename'] = "recinvprt_$id.html";
        $pluginparams['convertedfilename'] = "md5recinvprt_$id.pdf";
        $pluginparams['fullfilepathname'] = \MyCustomHelperCoreToolsParams::Data_Dir_Receipts_Invoices() . $pluginparams['filename'];
        $pluginparams['publicfilepathname'] = $di->controller_params_array['base_path_with_publicpath'] . \MyCustomHelperCoreToolsParams::Rel_Dir_Receipts_Invoices() . $pluginparams['filename'];
        $pluginparams['fullfileconvertedpathname'] = \MyCustomHelperCoreToolsParams::Data_Dir_Receipts_Invoices() . $pluginparams['convertedfilename'];
        $pluginparams['fullfileconvertedurlpathname'] = $di->controller_params_array['base_path_with_publicpath'] . \MyCustomHelperCoreToolsParams::Rel_Dir_Receipts_Invoices() . $pluginparams['convertedfilename'];
        if ($printtype === 'PDF') {
            self::Print_As_PDF();
        } else {
            self::Print_As_HTML();
        }
    }

    private static function Fix_Extra_Print_Methods () {
//        <script>
//                        (function() {
//                        
//                            document.getElementById("download").click();
//                            setTimeout(function() {
//                                window.top.close();
//                            }, 3000);
//                        
//                        })();
//                    </script>
    }
    
    public static function Make_keyarrPrintPDF() {
        // Execute some code if needed, before call Get_Body        
        self::Get_Body();
        self::Print_Body();
    }

    private static function Get_Single_HTML() {
        // TODO: Na kanw tis metafraseis sto tpl, table.
        $di = \Phalcon\DI::getDefault();
        $data = $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['printedrecorddata'];
        $assetspath = $di->controller_params_array['html_base_path'] . $di->controller_params_array['template']['template_admin_path_with_assets_path'];
        $ret = '';
        if (!empty($data)) {
            $files = '
                <meta charset="utf-8"/>
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'global/css/components.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'global/css/plugins.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'pages/css/invoice.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
                <link href="' . $assetspath . 'layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
            ';

            $color = '#C7CBC4';
            $tbody .= '
                <tr>
                    <td colspan="1" style="width: 50%; text-align: center;">' . $data['subject'] . '</td>
                    <td colspan="1" style="width: 10%; text-align: center;">' . $data['subtotal'] . '&nbsp;&euro;</td>
                    <td colspan="1" style="width: 10%; text-align: center;">' . $data['cleanvalue'] . '&nbsp;&euro;</td>
                    <td colspan="1" style="width: 10%; text-align: center;">' . $data['vat'] . '</td>
                    <td colspan="1" style="width: 10%; text-align: center;">' . $data['vatnum'] . '&nbsp;&euro;</td>
                    <td colspan="1" style="width: 10%; text-align: center;">' . $data['totalwithvat'] . '&nbsp;&euro;</td>
                </tr>
                ';

            $ret = '
                    <div id="invoice" class="invoice" style="padding: 30px; font-size: 19px;">
                        <div class="row">
                            <div class="col-xs-1">&nbsp;</div>
                            <div class="col-xs-5">
                                <h3>&nbsp;</h3>
                                <ul class="list-unstyled">
                                    <li> ' . $data['customerfull'] . ' </li>
                                    <li> ' . $data['customerprofession'] . ' </li>
                                    <li> ' . $data['customeraddress'] . ' </li>
                                    <li> ' . $data['customeraregion'] . ' </li>
                                    <li> Αριθμός: ' . $data['recinv_number'] . ' </li>
                                </ul>
                            </div>
                            <div class="col-xs-1">&nbsp;</div>
                            <div class="col-xs-5 invoice-payment">
                                <h3>&nbsp;</h3>
                                <ul class="list-unstyled">
                                    <li> ' . $data['gymname'] . ' </li>
                                    <li> ' . $data['gymsupervisorname'] . ' </li>
                                    <li> ' . $data['gymprofession'] . ' </li>
                                    <li> ' . $data['gymsupervisorprofession'] . ' </li>
                                    <li> ' . $data['gymfulladdress'] . ' </li>
                                    <li> ' . $data['gympostcode'] . ' </li>
                                    <li> ' . $data['gymtaxid'] . ' </li>
                                    <li> ' . $data['gymtaxoffice'] . ' </li>
                                    <li> ' . $data['gymtelland'] . ' </li>
                                    <li> ' . $data['gymsite'] . ' </li>
                                    <li> ' . 'Ημερομηνία Απόδειξης:&nbsp;' . $data['date_printed'] . ' </li>
                                </ul>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-striped table-hover" border="1">
                                    <thead>
                                        <tr>
                                            <th colspan="1" style="text-align: center;">Θέμα</th>
                                            <th colspan="1" style="text-align: center;">Υποσύνολο</th>
                                            <th colspan="1" style="text-align: center;">Καθαρή Αξία</th>
                                            <th colspan="1" style="text-align: center;">Φόρος(%)</th>
                                            <th colspan="1" style="text-align: center;">Φόρος(&euro;)</th>    
                                            <th colspan="1" style="text-align: center;">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ' . $tbody . '
                                        <tr>
                                            <td colspan="2">Σύνολο</td>
                                            <td colspan="1" style="text-align: center;">' . $data['cleanvalue'] . '&nbsp;&euro;</td>
                                            <td colspan="1">&nbsp;</td>
                                            <td colspan="1" style="text-align: center;">' . $data['vatnum'] . '&nbsp;&euro;</td>
                                            <td colspan="1">&nbsp;</td>    
                                        </tr>
                                        <tr>
                                            <td colspan="5"><strong>Τελικό με ΦΠΑ ( &euro; ) </strong></td>
                                            <td colspan="1" style="text-align: center;">' . $data['totalwithvat'] . '&nbsp;&euro;</td>  
                                        </tr>                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>                        
                    </div>
                    <a id="download" href="'. self::$downloadHrefPlaceholder .'" download hidden></a>
                    <script>
                    </script>
                    ';
            $ret = $files . $ret;
        }
        $di->controller_params_array[\CHCrmCParams::$keyarrPrintPDF]['singlebodyhtml'] = $ret;
    }

}