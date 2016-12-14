<?php

use Box\Spout\Writer\WriterFactory;
use Box\Spout\Common\Type;

class MyCustomHelperExportExcel extends MyCustomHelperExport {

    public static function My_export_grid_postgres($exportparamsarr, $keyarr, $classname, $search = array(), $order = array('id' => 'asc')) {
        $di = \Phalcon\DI::getDefault();
        $cpa = $di->controller_params_array;
        $blgensrch = false;
        $gensrchtxt = '';
        $DownloadPath = $exportparamsarr['properties']['DownloadPath'];
        $DownloadFileName = $exportparamsarr['properties']['DownloadFileName'];
        $DownloadFileNameWithPath = $exportparamsarr['properties']['DownloadFileNameWithPath'];
        $PluginAliasName = $exportparamsarr['properties']['PluginAliasName'];
        $scriptdocumentroot = $di->controller_params_array['scriptdocumentroot'];
        $absfilewithpath = $scriptdocumentroot . '/' . $DownloadFileNameWithPath;
        $absfilewithpathcsv = $absfilewithpath . '.csv';

        $exporttype = $exportparamsarr['properties']['ExportType'];
        $Extension = $exportparamsarr['properties']['Extension'];
        self::MyCreateDirForExport();
        $arrformat = array();
        $mytmparr = $cpa[$keyarr];
        $exportselect = ' SELECT ';
        $cols = $mytmparr['cols'];
        $i = 0;
        foreach ($cols as $key => $value) {
            if ($key != 'expandedit' && $key != 'idseq' && $key != 'actions') {
                if ($i > 0) {
                    $exportselect.= ', ';
                }
                $alias = isset($value['heading']) ? B2b\Models\CoreModels\PpB2bAdminVfroutepageplugintranslateavailableplugin::Get_Translation_And_Orig($PluginAliasName, $value['heading'], 'title', 'No title') : 'No title';
                $alias = '"' . $alias . '"';
                $exportselect.=$key . ' ' . $alias . ' ';
                $i++;
            }
        }



        $group = array();
        foreach ($cols as $key => $value) {
            if (isset($value['format'])) {
                $arrformat[$key] = $value['format'];
            }
            if (isset($value['group'])) {
                $group[$key]['type'] = $value['group'];
            }
        }
        $ret = array();
        $ret['totalitems'] = 0;
        $ret['totalpages'] = 1;
        $ret['items'] = false;
        if (class_exists($classname)) {
            $wheretxt = '';
            $bindarr = array();
            $bindarrcnt = array();
            // "name" => Column::BIND_PARAM_STR,
            // "year" => Column::BIND_PARAM_INT
//);
            if ($search) {
                if (isset($search['blgensrch'])) {
                    $blgensrch = true;
                    unset($search['blgensrch']);
                }
                foreach ($search as $key => $value) {
                    //$search[$searchkey] = array('value' => $value, 'searchmethod' => $searchmethod);
                    if ($wheretxt !== '') {
                        $wheretxt = $wheretxt . ' AND ';
                    } else {
                        $wheretxt = ' Where (';
                    }
                    if (!\MyCustomHelperStringTools::startsWith($key, 'fk')) {
                        if ($gensrchtxt != '') {
                            $gensrchtxt.=' or ';
                        }
                        $gensrchtxt.=' lower(gensrch) like \'%' . mb_strtolower($cpa['objcontroller']->filter->sanitize($value['value'], 'alphanum')) . '%\' ';
                    }
                    $operator = ' = ';
                    $bindarr[$key] = $value['value'];
                    $bindarrcnt[$key] = $value['value'];
                    $lowerstart = '';
                    $lowerend = '';
                    $castkey = $key;
                    if (mb_strtoupper($value['searchmethod']) === 'LIKE') {
                        $lowerstart = ' lower( ';
                        $lowerend = ') ';
                        $operator = " Like ";
                        $value['value'] = $cpa['objcontroller']->filter->sanitize($value['value'], 'alphanum');
                        $value['value'] = '%' . mb_strtolower($value['value']) . '%';
                        $bindarrcnt[$key] = $bindarr[$key];
                    }
                    $castkey = ' cast (' . $key . ' as text) ';
                    if ($key == 'fklng') {
                        $wheretxt = $wheretxt . ' ( ';
                    }
                    $wheretxt = $wheretxt . $lowerstart . $castkey . $lowerend . $operator . '\'' . $value['value'] . '\'';
                    if ($key == 'fklng') {
                        $wheretxt = $wheretxt . ' OR fklng=' . \MyCustomHelperLng::$Static_Lng_All_Id . ' ) ';
                    }
                }
                $wheretxt.= ')';
                if ($blgensrch && $gensrchtxt != '') {
                    $wheretxt.= ' or (' . $gensrchtxt . ')';
                }
            }
            $ordertxt = '';
            if ($order) {
                foreach ($order as $key => $value) {
                    if ($ordertxt !== '') {
                        $ordertxt = $ordertxt . ', ';
                    } else {
                        $ordertxt = ' order by ';
                    }
                    $ordertxt.= $key . ' ' . $value;
                }
            }
            $obj = new $classname;
            $con = $obj->getSuperConnection();
            //$sql = "SELECT count(id) totalrows FROM  " . $classname::CONST_SCHEMA . "." . $classname::CONST_TABLE . $wheretxt;
            //$sub_rows = $con->fetchAll($sql, \Phalcon\Db::FETCH_ASSOC, $bindarrcnt);
            $exportselect = $exportselect . " FROM  " . $classname::CONST_SCHEMA . "." . $classname::CONST_TABLE . $wheretxt . $ordertxt;
            $sql = ' COPY (' . $exportselect . ') TO \'' . $absfilewithpathcsv . '\' DELIMITER E\'\\t\' CSV HEADER';

            $sub_rows = $con->fetchAll($sql, \Phalcon\Db::FETCH_ASSOC);
            putenv('PATH=/usr/bin/');
            if ($Extension == 'odt' || $Extension == 'pdf') {
                $script = 'unoconv -i FilterOptions=9,,system,1 -f odt -o ' . $absfilewithpath . '.odt' . ' ' . $absfilewithpathcsv;
                exec($script, $resultarr, $retres);
                if ($Extension == 'pdf') {
                    $script = 'unoconv -i FilterOptions=9,,system,1 -f pdf -o ' . $absfilewithpath . '.pdf' . ' ' . $absfilewithpath . '.odt';
                    exec($script, $resultarr, $retres);
                }
            } elseif ($Extension != 'csv') {
                $script = 'unoconv -i FilterOptions=9,,system,1 -f ' . $Extension . ' -o ' . $absfilewithpath . '.' . $Extension . ' ' . $absfilewithpathcsv;
                exec($script, $resultarr, $retres);
            }
        } else {
            \MyCustomHelperErrorLog::My_error_log('Not found ' . $classname);
        }

        return $ret;
    }

    public static function My_export_grid_spout($exportparamsarr) {
        //ini_set('max_execution_time', 300); //300 seconds = 5 minutes
        $di = \Phalcon\DI::getDefault();
        $cpa = &$di->controller_params_array;
        $cpasettings = $cpa['settings'];
        $DownloadPath = $exportparamsarr['properties']['DownloadPath'];
        $DownloadFileName = $exportparamsarr['properties']['DownloadFileName'];
        $DownloadFileNameCreate = $exportparamsarr['properties']['DownloadFileNameCreate'];
        $DownloadFileNameWithPath = $exportparamsarr['properties']['DownloadFileNameWithPath'];
        $scriptdocumentroot = $di->controller_params_array['scriptdocumentroot'];
        $exporttype = $exportparamsarr['properties']['ExportType'];
        self::MyCreateDirForExport();
        $boxbasepath = $scriptdocumentroot . '/../data/box/spout/src/Spout/';
        require_once $boxbasepath . 'Autoloader/autoload.php';
        if ($DownloadFileNameCreate == true) {
            if ($exporttype == 'XLSX') {
                $writer = WriterFactory::create(Type::XLSX);
            } elseif ($exporttype == 'ODS') {
                $writer = WriterFactory::create(Type::ODS);
            } elseif ($exporttype == 'CSV') {
                $writer = WriterFactory::create(Type::CSV);
            }



            // for XLSX files
            //$writer = WriterFactory::create(Type::CSV); // for CSV files
            //$writer = WriterFactory::create(Type::ODS); // for ODS files
            //$writer->setFieldDelimiter('|');
            $writer->openToFile($DownloadFileNameWithPath); // write data to a file or to a PHP stream
            $cpa['writer'] = $writer;
            if ($exporttype == 'XLSX' || $exporttype == 'ODS') {
                foreach ($exportparamsarr['data']['sheets'] as $key => $value) {
                    $writer->addNewSheetAndMakeItCurrent();
                }
            } elseif ($exporttype == 'CSV') {
                $writer->setFieldDelimiter('|');
            }
        }
        $writer = $cpa['writer'];

//$writer->openToBrowser($fileName); // stream data directly to the browser
        //$writer->addRows($multipleRows); // add multiple rows at a time
        if ($exporttype == 'XLSX' || $exporttype == 'ODS') {
            $sheets = $writer->getSheets();
        }

        foreach ($exportparamsarr['data']['sheets'] as $key => $value) {

            if ($exporttype == 'XLSX' || $exporttype == 'ODS') {
                $sheet = $sheets[$key];
                $writer->setCurrentSheet($sheet);
            }
            if ($DownloadFileNameCreate) {
                $arr = array();
                foreach ($value['headtitles'] as $key1 => $value1) {
                    $arr[] = $value1;
                }
                $writer->addRow($arr); // add a row at a time
            }
            foreach ($value['rows'] as $key1 => $value1) {
                unset($arr);
                $arr = array();
                foreach ($value1 as $key2 => $value2) {
                    $arr[] = $value2;
                }
                $writer->addRow($arr);
            }
        }
    }

    public static function My_export_grid($exportparamsarr) {
        $di = \Phalcon\DI::getDefault();
        $DownloadPath = $exportparamsarr['properties']['DownloadPath'];
        $DownloadFileName = $exportparamsarr['properties']['DownloadFileName'];
        $DownloadFileNameCreate = $exportparamsarr['properties']['DownloadFileNameCreate'];
        $DownloadFileNameWithPath = $exportparamsarr['properties']['DownloadFileNameWithPath'];
        $scriptdocumentroot = $di->controller_params_array['scriptdocumentroot'];
        self::MyCreateDirForExport();
        $phpexcelbasepath = $scriptdocumentroot . '/../data/PHPExcel_1.8.0_doc/';
        require_once $phpexcelbasepath . 'Classes/PHPExcel.php';
        PHPExcel_Settings::setCacheStorageMethod(PHPExcel_CachedObjectStorageFactory::cache_to_phpTemp);
        if (!defined('EOL')) {
            define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
        }


        if ($DownloadFileNameCreate == true) {
            $objPHPExcel = new PHPExcel();
            $objPHPExcel->getProperties()->setCreator($exportparamsarr['properties']['Creator'])
                    ->setLastModifiedBy($exportparamsarr['properties']['LastModifiedBy'])
                    ->setTitle($exportparamsarr['properties']['Title'])
                    ->setSubject($exportparamsarr['properties']['Subject'])
                    ->setDescription($exportparamsarr['properties']['Description'])
                    ->setKeywords($exportparamsarr['properties']['Keywords'])
                    ->setCategory($exportparamsarr['properties']['Category']);


            foreach ($exportparamsarr['data']['sheets'] as $key => $value) {
                $objPHPExcel->createSheet($key);
                $objPHPExcel->setActiveSheetIndex($key);
                $objPHPExcel->getActiveSheet()->setTitle($value['title']);
                $asciicode = ord('A');
                foreach ($value['headtitles'] as $key1 => $value1) {
                    $char = chr($asciicode);
                    $activecell = $char . '1';
                    $objPHPExcel->getActiveSheet()->setCellValue($activecell, $value1);
                    $objPHPExcel->getActiveSheet()->getStyle($activecell)->getFont()->setBold(true);
                    $asciicode++;
                }

                $tmpi = 2;
                foreach ($value['rows'] as $key1 => $value1) {
                    $asciicode = ord('A');
                    foreach ($value1 as $key2 => $value2) {
                        $char = chr($asciicode);
                        $objPHPExcel->getActiveSheet()->setCellValue($char . $tmpi, $value2);
                        $asciicode++;
                    }
                    $tmpi++;
                }
            }
        } else {
            $objPHPExcel = PHPExcel_IOFactory::load($DownloadFileNameWithPath);
            foreach ($exportparamsarr['data']['sheets'] as $key => $value) {
                //$objPHPExcel->setActiveSheetIndex($key);

                $tmpi = $objPHPExcel->getActiveSheet()->getHighestRow() + 1;
                foreach ($value['rows'] as $key1 => $value1) {
                    $asciicode = ord('A');
                    foreach ($value1 as $key2 => $value2) {
                        $char = chr($asciicode);
                        $objPHPExcel->getActiveSheet()->setCellValue($char . $tmpi, $value2);
                        $asciicode++;
                    }
                    $tmpi++;
                }
            }
        }



        $exporttype = $exportparamsarr['properties']['ExportType'];
        if ($exporttype == 'PDF') {
            $rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
//$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
//$rendererLibrary = 'tcPDF5.9';
            $rendererLibrary = 'mPDF5.4';
            $rendererLibrary = 'mpdf60';
//$rendererLibrary = 'domPDF0.6.0beta3';
            $rendererLibraryPath = $phpexcelbasepath . 'Libraries/PDF/' . $rendererLibrary;
            if (!PHPExcel_Settings::setPdfRenderer(
                            $rendererName, $rendererLibraryPath
                    )) {
                die(
                        'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
                        EOL .
                        'at the top of this script as appropriate for your directory structure'
                );
            }
        }
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $exporttype);
        $exportparamsarr['properties']['DownloadFileName'];
        $objWriter->save($DownloadFileNameWithPath);

        return;
    }

}

/*
     * public static function My_export_grid($exportparamsarr) {
        $di = \Phalcon\DI::getDefault();
        $DownloadPath = $exportparamsarr['properties']['DownloadPath'];
        $DownloadFileName = $exportparamsarr['properties']['DownloadFileName'];
        $DownloadFileNameCreate = $exportparamsarr['properties']['DownloadFileNameCreate'];
        $filenamewithpath = $DownloadPath . $DownloadFileName;
        $scriptdocumentroot = $di->controller_params_array['scriptdocumentroot'];
        self::MyCreateDirForExport();
        $phpexcelbasepath = $scriptdocumentroot . '/../data/PHPExcel_1.8.0_doc/';
        require_once $phpexcelbasepath . 'Classes/PHPExcel.php';
        define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

        /** Include PHPExcel 
        //require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
// Create new PHPExcel object
        //echo date('H:i:s'), " Create new PHPExcel object", EOL;
        $objPHPExcel = new PHPExcel();

// Set document properties
        //echo date('H:i:s'), " Set document properties", EOL;
        $objPHPExcel->getProperties()->setCreator($exportparamsarr['properties']['Creator'])
                ->setLastModifiedBy($exportparamsarr['properties']['LastModifiedBy'])
                ->setTitle($exportparamsarr['properties']['Title'])
                ->setSubject($exportparamsarr['properties']['Subject'])
                ->setDescription($exportparamsarr['properties']['Description'])
                ->setKeywords($exportparamsarr['properties']['Keywords'])
                ->setCategory($exportparamsarr['properties']['Category']);


// Add some data
        //echo date('H:i:s'), " Add some data", EOL;
        foreach ($exportparamsarr['data']['sheets'] as $key => $value) {
            $objPHPExcel->createSheet($key);
            $objPHPExcel->setActiveSheetIndex($key);
            $objPHPExcel->getActiveSheet()->setTitle($value['title']);
            $asciicode = ord('A');
            foreach ($value['headtitles'] as $key1 => $value1) {
                $char = chr($asciicode);
                $activecell = $char . '1';
                $objPHPExcel->getActiveSheet()->setCellValue($activecell, $value1);
                $objPHPExcel->getActiveSheet()->getStyle($activecell)->getFont()->setBold(true);
                //$objPHPExcel->getActiveSheet()->getStyle($activecell)->setFont($font)->set
                $asciicode++;
            }

            $tmpi = 2;
            foreach ($value['rows'] as $key1 => $value1) {
                $asciicode = ord('A');
                foreach ($value1 as $key2 => $value2) {
                    $char = chr($asciicode);
                    $objPHPExcel->getActiveSheet()->setCellValue($char . $tmpi, $value2);
                    $asciicode++;
                }
                $tmpi++;
            }
        }
        /* $objPHPExcel->createSheet(1);
          $objPHPExcel->setActiveSheetIndex(1)
          ->setCellValue('A1', 'Hello')
          ->setCellValue('B2', 'world!')
          ->setCellValue('C1', 'Hello')
          ->setCellValue('D2', 'world!');

          // Miscellaneous glyphs, UTF-8
          $objPHPExcel->setActiveSheetIndex(0)
          ->setCellValue('A4', 'Miscellaneous glyphs')
          ->setCellValue('A5', 'Καλημέρα κόσμε');


          $objPHPExcel->getActiveSheet()->setCellValue('A8', "Hello\nWorld");
          $objPHPExcel->getActiveSheet()->getRowDimension(8)->setRowHeight(-1);
          $objPHPExcel->getActiveSheet()->getStyle('A8')->getAlignment()->setWrapText(true);


          // Rename worksheet
          echo date('H:i:s'), " Rename worksheet", EOL;
          $objPHPExcel->getActiveSheet()->setTitle('Simple');


          // Set active sheet index to the first sheet, so Excel opens this as the first sheet
          $objPHPExcel->setActiveSheetIndex(0);


          // Save Excel 2007 file
          echo date('H:i:s'), " Write to Excel2007 format", EOL;
          $callStartTime = microtime(true);
         
        $exporttype = $exportparamsarr['properties']['ExportType'];
        if ($exporttype == 'PDF') {
            $rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
//$rendererName = PHPExcel_Settings::PDF_RENDERER_DOMPDF;
//$rendererLibrary = 'tcPDF5.9';
            $rendererLibrary = 'mPDF5.4';
            $rendererLibrary = 'mpdf60';
//$rendererLibrary = 'domPDF0.6.0beta3';
            $rendererLibraryPath = $phpexcelbasepath . 'Libraries/PDF/' . $rendererLibrary;
            if (!PHPExcel_Settings::setPdfRenderer(
                            $rendererName, $rendererLibraryPath
                    )) {
                die(
                        'NOTICE: Please set the $rendererName and $rendererLibraryPath values' .
                        EOL .
                        'at the top of this script as appropriate for your directory structure'
                );
            }
        }
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $exporttype);
        $exportparamsarr['properties']['DownloadFileName'];
        $objWriter->save($filenamewithpath);

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $exporttype);
        $filenamewithpath = 'php://output'; //$exportparamsarr['properties']['ExportFile']; //tmp/tmp2.xlsx';
        //$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
        ob_start();
        $objWriter->save($filenamewithpath);
        $excelOutput = ob_get_clean();
        //$excelOutput=  file_get_contents($filenamewithpath);
        return $excelOutput;
         $callEndTime = microtime(true);
          $callTime = $callEndTime - $callStartTime;

          echo date('H:i:s'), " File written to ", str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;
          echo 'Call time to write Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
          // Echo memory usage
          echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;


          // Save Excel 95 file
          echo date('H:i:s'), " Write to Excel5 format", EOL;
          $callStartTime = microtime(true);

          $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
          //$objWriter->save(str_replace('.php', '.xls', __FILE__));
          $fname = 'tmp/tmp2.xls';
          $objWriter->save($fname);
          $callEndTime = microtime(true);
          $callTime = $callEndTime - $callStartTime;

          echo date('H:i:s'), " File written to ", str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)), EOL;
          echo 'Call time to write Workbook was ', sprintf('%.4f', $callTime), " seconds", EOL;
          // Echo memory usage
          echo date('H:i:s'), ' Current memory usage: ', (memory_get_usage(true) / 1024 / 1024), " MB", EOL;


          // Echo memory peak usage
          echo date('H:i:s'), " Peak memory usage: ", (memory_get_peak_usage(true) / 1024 / 1024), " MB", EOL;

          // Echo done
          echo date('H:i:s'), " Done writing files", EOL;
          echo 'Files have been created in ', getcwd(), EOL; 
    }
     */