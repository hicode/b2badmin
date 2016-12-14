<?php

use Phalcon\Db\Column as Column;

class MyCustomHelperCore extends MyCustomHelperCoreStaticVars {

    public static function My_core_create_models() {
        $di = \Phalcon\DI::getDefault();
        self::My_core_create_tmp_class_file();
        self::My_core_create_base_class_file();
        self::My_core_create_prototype_production_models();
        //if ($di->controller_params_array['schemaname'] == 'aio') {
        self::My_core_create_auto_gen_modules_helper();
        //}
//self::My_core_create_json_files($di, $app, $schemaname);
//self::My_core_create_migration_mod_live_helper($app, $schemaname);
//CHMod20130918DCsv::My_Mod_Create_Csv_Complete_Files();
    }

    public static function My_core_changed_tbl_col($tblname, $remarkstblview = ' ') {
        $di = \Phalcon\DI::getDefault();
        $con = $di->get('dbopen', $di);

        $tmptbl = new \B2b\Models\TmpModel();
        $tmpmgr = $tmptbl->getModelsManager();
        $aliasnamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Alias());
        $productionnamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Production());
        $prototypenamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Prototype());
        $classname = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($tblname));
        $interfacename = $classname . 'Interface';


        $beforeupdate = '';
        $beforecreate = '';
//$tmpmgr->__destruct();
        //if ($di->controller_params_array['schemaname'] == 'aio') {
        $tmpmgr->setModelSource($tmptbl, $di->controller_params_array['basesettings']['tblcoreprefix'] . 'table_trigger');
        $tmpmgr->setModelSchema($tmptbl, $di->controller_params_array['schemaname']);
        $objtr = $tmptbl->findFirst(array(
            "dbtablename = :dbtablename:",
            "bind" => array("dbtablename" => $tblname)
        ));
        if ($objtr) {
            $beforeupdate = $objtr->phpbeforeupdate;
            $beforecreate = $objtr->phpbeforecreate;
        }
        //}
        $arr = array(
            'remarkstblview' => $remarkstblview,
            'app' => ucfirst($di->controller_params_array['app']),
            'classname' => $classname,
            'interfacename' => $interfacename,
            'namespacename' => $prototypenamespace,
            'schemaname' => $di->controller_params_array['schemaname'],
            'tablename' => $tblname,
            'beforeupdate' => $beforeupdate,
            'beforecreate' => $beforecreate);

        $data = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Class(), $arr);


        $arr = array(
            'remarkstblview' => $remarkstblview,
            'interfacename' => $interfacename,
            'namespacename' => $prototypenamespace);

        $datainterface = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Class_Interface(), $arr);

        $sub_rows = array();
        //if ($di->controller_params_array['schemaname'] == 'aio') {
        $sub_rows = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table_relation where table1=:table1", Phalcon\Db::FETCH_ASSOC, array('table1' => $tblname));
        //}

        $extrainitialize = '';
        $extrafunctionsname = '';
        $extrafunctionsnameinterface = '';
        foreach ($sub_rows as $sub_key => $sub_value) {
            $sub_val1 = $sub_key;
            $sub_classname = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($sub_value['table2']));

            $subtablealias = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table where dbtablename=:dbtablename", Phalcon\Db::FETCH_ASSOC, array('dbtablename' => $sub_value['table2']));
            if (count($subtablealias) > 0) {
                $subclassnamealias = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($subtablealias[0]['tablename']));

                $arr = array(
                    'remarkstblview' => $remarkstblview,
                    'productionnamespacename' => $productionnamespace,
                    'subclassname' => $sub_classname,
                    'subclassnamealias' => $subclassnamealias);

                $extrafunctionsname = $extrafunctionsname . MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Function_Related(), $arr);


                $arr = array(
                    'remarkstblview' => $remarkstblview,
                    'productionnamespacename' => $productionnamespace,
                    'classnamealias' => $subclassnamealias,
                    'pkname' => $sub_value['field1'],
                    'fkname' => $sub_value['field2']);

                $extrainitialize = $extrainitialize . MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Extrainitialize_Has_Many(), $arr);
            }
        }

        $sub_rows = array();
        //if ($di->controller_params_array['schemaname'] == 'aio') {
        $sub_rows = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table_relation where table2=:table2", Phalcon\Db::FETCH_ASSOC, array('table2' => $tblname));
        //}

        foreach ($sub_rows as $sub_key => $sub_value) {
            $sub_val1 = $sub_key;
            $sub_classname = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($sub_value['table1']));

            $subtablealias = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table where dbtablename=:dbtablename", Phalcon\Db::FETCH_ASSOC, array('dbtablename' => $sub_value['table2']));
            if (count($subtablealias) > 0) {
                $sub_classname_alias = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($subtablealias[0]['tablename']));

                $arr = array(
                    'remarkstblview' => $remarkstblview,
                    'productionnamespacename' => $productionnamespace,
                    'refclassnamealias' => $sub_classname_alias,
                    'refpk' => $sub_value['field1'],
                    'fkname' => $sub_value['field2']);
                $extrainitialize = $extrainitialize . MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Extrainitialize_Belong(), $arr);
            }
        }
//$tmptbl = $tmpmgr->load('\\' . ucwords($app) . '\Models\ProductionModels\\' . $classname);
        unset($tmptbl);
        unset($tmpmgr);
        $tmptbl = new \B2b\Models\TmpModel();
        $tmpmgr = $tmptbl->getModelsManager();
        $tmpmgr->setModelSource($tmptbl, $tblname);
        $tmpmgr->setModelSchema($tmptbl, $di->controller_params_array['schemaname']);

        $metaData = $tmptbl->getModelsMetaData();
        $tmpattributes = $metaData->getAttributes($tmptbl);
        $tmpdatatypes = $metaData->getDataTypes($tmptbl);

        foreach ($tmpdatatypes as $tmpdatatypeskey => $tmpdatatypesvalue) {
            $tmptype = 'string';
            if ($tmpdatatypesvalue == Column::TYPE_INTEGER || $tmpdatatypesvalue == 14) {
                $tmptype = 'int';
            } else if ($tmpdatatypesvalue == Column::TYPE_DECIMAL || $tmpdatatypesvalue == Column::TYPE_DOUBLE || $tmpdatatypesvalue == 3) {
                $tmptype = 'float';
            } else if ($tmpdatatypesvalue == Column::TYPE_DATE || $tmpdatatypesvalue == Column::TYPE_DATETIME) {
                $tmptype = 'date';
            }
//Vars---------------------



            $arr = array(
                'remarkstblview' => $remarkstblview,
                'fieldtype' => $tmptype,
                'fieldname' => $tmpdatatypeskey);

            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Var(), $arr);

            $extrafunctionsname = $extrafunctionsname . $tmpstr;
//Getters------------------               


            $arr = array(
                'remarkstblview' => $remarkstblview,
                'upperfieldname' => ucfirst($tmpdatatypeskey),
                'fieldtype' => $tmptype,
                'fieldname' => $tmpdatatypeskey);

            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Property_Get(), $arr);

            $extrafunctionsname = $extrafunctionsname . $tmpstr;

//Setters----------------------------------------

            $tmptypeset = '(' . $tmptype . ') $' . $tmpdatatypeskey;
            if ($tmptype == 'date') {
                $tmptypeset = 'date("Y-m-d H:i:s", strtotime($' . $tmpdatatypeskey . '))';
            }


            $arr = array(
                'remarkstblview' => $remarkstblview,
                'fieldname' => $tmpdatatypeskey,
                'fieldtype' => $tmptype,
                'fieldtypeinto' => $tmptypeset,
                'interfacename' => ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($tblname)) . 'Interface',
                'upperfieldname' => ucfirst($tmpdatatypeskey)
            );

            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Property_Set(), $arr);

            $extrafunctionsname = $extrafunctionsname . $tmpstr;

            //todotodotodo
            /*
             * $arr = array(
              'remarkstblview' => $remarkstblview,
              'subclassnamealias' => ucfirst($fieldvalue['fieldname']),
              'originalfield' => $fieldvalue['dbfieldname']);

              if (isset($checkfordoubles[$arr['subclassnamealias']])) {
              $arr['subclassnamealias'] = 'SosDouble' . $arr['subclassnamealias'];
              }
              $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Alias_Model_Field(), $arr);

             */

            $arr = array(
                'remarkstblview' => $remarkstblview,
                'fieldname' => $tmpdatatypeskey,
                'fieldtype' => $tmptype,
                'upperfieldname' => ucfirst($tmpdatatypeskey),
                'uppertablename' => ucfirst(self::My_core_make_safe_tblname($tblname))
            );

            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Class_Interface_Properties(), $arr);

            $extrafunctionsnameinterface = $extrafunctionsnameinterface . $tmpstr;
        }



        $arr = array(
            'remarkstblview' => $remarkstblview,
            'extrafunctionsname' => $extrafunctionsname,
            'initializename' => $extrainitialize
        );

        $data = MyCustomHelperTemplate::My_core_make_string_from_template($data, $arr);


        $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Prototype()) . $classname . '.php';
        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $data);




        $arr = array(
            'remarkstblview' => $remarkstblview,
            'interfacebody' => $extrafunctionsnameinterface
        );

        $datainterface = MyCustomHelperTemplate::My_core_make_string_from_template($datainterface, $arr);

        $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Prototype()) . $interfacename . '.php';
        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $datainterface);

        if (stripos($tblname, 'tbl') === false && stripos($tblname, 'view') === false) {

            $arr = array(
                'remarkstblview' => $remarkstblview,
                'classname' => $classname,
                'namespacename' => $productionnamespace,
                'aliasnamespacename' => $aliasnamespace);

            $strproductionmodel = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Production_Model_Class(), $arr);

            $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Production()) . $classname . '.php';
            $blreplacefile = false;
            self::My_core_create_file_from_template($filename, $blreplacefile, $strproductionmodel);

            $arr = array(
                'remarkstblview' => $remarkstblview,
                'classname' => $classname,
                'aliasnamespacename' => str_ireplace('--appname--', ucfirst($di->controller_params_array['app']), self::Model_Core_Namespace_Alias()),
                'prototypenamespacename' => $prototypenamespace,
                'extendclassname' => $classname,
                'extrafunctionsname' => '');

            $straliasmodel = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Alias_Model_Class(), $arr);

            $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Alias()) . $classname . '.php';
            $blreplacefile = true;
            self::My_core_create_file_from_template($filename, $blreplacefile, $straliasmodel);
        }


//$a = new \B2b\Models\ProductionModels\B2bAioCftable();
//$r = $a->findFirst(5);
//$z = $r->getB2bAioCffields();
//$r->setRemarks('mytest');
//$r->save();
//$r = 467;
//$r->delete();//$y = 1;
    }

    public static function My_core_create_auto_gen_custom_helper($remarkstblview = '') {
        $di = \Phalcon\DI::getDefault();
        $tmptbl = new \B2b\Models\TmpModel();
        $tmpmgr = $tmptbl->getModelsManager();
        $staticparams = '';
//$tmpmgr->__destruct();
        $tmpmgr->setModelSource($tmptbl, $di->controller_params_array['basesettings']['tblcoreprefix'] . 'settings');
        $tmpmgr->setModelSchema($tmptbl, $di->controller_params_array['schemaname']);
        $params = $tmptbl->find();
        foreach ($params as $keyparams => $valueparams) {
            $staticparams = $staticparams . 'static $Settings_' . ucfirst($valueparams->fksite) . '_' . ucfirst($valueparams->paramname) . '_' . $valueparams->fklng . ' = \'' . $valueparams->paramvalue . '\';
    ';
        }



        $tmptbl = $tmpmgr->load(MyCustomHelperClassTools::My_Core_Get_Classname($di->controller_params_array['basesettings']['tblcoreprefix'] . 'table'));
        $params = $tmptbl->find();
        foreach ($params as $keyparams => $valueparams) {
            $staticparams = $staticparams . 'static $Table_' . ucfirst($valueparams->tablename) . ' = "' . $valueparams->dbtablename . '";
    ';
        }

        $arr = array(
            'remarkstblview' => $remarkstblview,
            'appname' => $di->controller_params_array['app']);
        $dirname = MyCustomHelperTemplate::My_core_make_string_from_template(self::Custom_Helper_Directory() . 'autogen' . DIRECTORY_SEPARATOR, $arr);
        //$filename = $dirname . 'AGCH' . ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . 'Params.php';
        $filename = $dirname . 'AGCH' . 'Params.php';
        $arr = array(
            'remarkstblview' => $remarkstblview,
//            'controllerschema' => ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']),
            'controllerschema' => '',
            'staticparams' => $staticparams);
        $data = MyCustomHelperTemplate::My_core_make_string_from_template(self::CustomHelper_Auto_Gen_File(), $arr);
        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $data);
    }

    public static function My_core_create_auto_gen_modules_helper($remarkstblview = '') {
        $di = \Phalcon\DI::getDefault();
        $tmptbl = new \B2b\Models\TmpModel();
        $tmpmgr = $tmptbl->getModelsManager();
        $modulesdata = '';
        $classname = MyCustomHelperClassTools::My_Core_Get_Classname($di->controller_params_array['basesettings']['tblcoreprefix'] . 'module');
        $tmptbl = $tmpmgr->load($classname);
//$tmpmgr->setModelSource($tmptbl, 'tbl8');
//$tmpmgr->setModelSchema($tmptbl, $schemaname);
        $rows = $tmptbl->find();
        foreach ($rows as $key => $val) {
            $modulesdata = $modulesdata . '$modulesarr[' . $val->id . ']=\'' . $val->col18 . '\';
    ';
        }

        $arr = array(
            'remarkstblview' => $remarkstblview,
            'appname' => $di->controller_params_array['app']);
        $dirname = MyCustomHelperTemplate::My_core_make_string_from_template(self::Custom_Helper_Directory() . 'autogen' . DIRECTORY_SEPARATOR, $arr);
        //$filename = $dirname . 'AGCH' . ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . 'Modules.php';
        $filename = $dirname . 'AGCH' . 'Modules.php';

        $arr = array(
            'remarkstblview' => $remarkstblview,
            //'controllerschema' => ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']),
            'controllerschema' => '',
            'modulesdata' => $modulesdata);
        $data = MyCustomHelperTemplate::My_core_make_string_from_template(self::CustomHelper_Auto_Gen_Modules_File(), $arr);


        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $data);
    }

    private static function My_core_create_tmp_class_file($remarkstblview = '') {
        $di = \Phalcon\DI::getDefault();
        $classname = self::Model_Core_Class_Tmp_Model_Name();
        $arr = array(
            'remarkstblview' => $remarkstblview,
            'classname' => $classname,
            'namespacename' => str_ireplace('--appname--', ucfirst($di->controller_params_array['app']), self::Model_Core_Namespace_Models()));

        $str = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Tmp_Model_Class(), $arr);

        $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Models()) . $classname . '.php';
        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $str);
    }

    private static function My_core_create_base_class_file($remarkstblview = '') {
        $di = \Phalcon\DI::getDefault();
        $classname = self::Model_Core_Class_Base_Model_Name();
        $arr = array(
            'remarkstblview' => $remarkstblview,
            'classname' => $classname,
            'namespacename' => str_ireplace('--appname--', ucfirst($di->controller_params_array['app']), self::Model_Core_Namespace_Models()));

        $str = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Base_Model_Class(), $arr);

        $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Models()) . $classname . '.php';
        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $str);
    }

    private static function My_get_schema_tables() {
        $di = \Phalcon\DI::getDefault();
        $con = $di->get('dbopen', $di);
        $arrtbls = $con->listTables($di->controller_params_array['schemaname']);
        //$sql='SELECT matviewname as viewname FROM "pg_catalog"."pg_matviews" where schemaname=\''.$di->controller_params_array['schemaname'].'\'';
        //$arrmatviews = $con->fetchAll($sql, Phalcon\Db::FETCH_ASSOC);
        //foreach ($arrmatviews as $key => $value) {
        //    array_unshift($arrtbls, $value['viewname']);
        //}
        $tmparrtbls = array_flip($arrtbls);
        $arrviews = $con->listViews($di->controller_params_array['schemaname']);
        foreach ($arrviews as $key => $value) {
            if (!isset($tmparrtbls[$value])) {
                array_unshift($arrtbls, $value);
            }
        }

        return $arrtbls;
        $arrviews = $con->listViews($di->controller_params_array['schemaname']);
    }

    private static function My_core_create_prototype_production_models() {
        $di = \Phalcon\DI::getDefault();



        $con = $di->get('dbopen', $di);
        $dir = $di->myglobal_params_array['scriptdocumentroot'] . DIRECTORY_SEPARATOR . str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Alias());
        if (!file_exists($dir) && !mkdir($dir, 0777, true)) {
            die('Failed to create ' . self::Model_Core_Class_Directory_Alias() . ' model folders...' . $dir);
        }

        $dir = $di->myglobal_params_array['scriptdocumentroot'] . DIRECTORY_SEPARATOR . str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Prototype());
        if (!file_exists($dir) && !mkdir($dir, 0777, true)) {
            die('Failed to create Prototype model folders...' . $dir);
        }
        $dir = $di->myglobal_params_array['scriptdocumentroot'] . DIRECTORY_SEPARATOR . str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Production());
        if (!file_exists($dir) && !mkdir($dir, 0777, true)) {
            die('Failed to create Production model folders...' . $dir);
        }

        $aliasnamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Alias());
        $productionnamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Production());
        $prototypenamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Prototype());
        $tmptbl = new \B2b\Models\TmpModel();
        $tmpmgr = $tmptbl->getModelsManager();
        $tbls = self::My_get_schema_tables();
        //if ($di->controller_params_array['schemaname'] == 'aio') {
        $tablerowscf_table = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table", Phalcon\Db::FETCH_ASSOC);
        $tablerowscf_view = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "view", Phalcon\Db::FETCH_ASSOC);
        //}
        foreach ($tbls as $key => $value) {
            $remarkstblview = '';
            $blfound = FALSE;
            //if ($di->controller_params_array['schemaname'] == 'aio') {

            foreach ($tablerowscf_table as $key => $value1) {
                if ($value == $value1['dbtablename']) {
                    $remarkstblview = $value1['remarks'];
                    $blfound = TRUE;
                    break;
                }
            }
            if (!$blfound) {
                foreach ($tablerowscf_view as $key => $value1) {
                    if ($value == $value1['dbviewname']) {
                        $remarkstblview = $value1['remarks'];
                        break;
                    }
                }
            }

            //}
            self::My_core_changed_tbl_col($value, $remarkstblview);
        }
        //if ($di->controller_params_array['schemaname'] == 'aio') {

        foreach ($tablerowscf_table as $key => $value) {
            $remarkstblview = $value['remarks'];
            self::My_core_create_model_alias_production($value['tablename'], $value['dbtablename'], $value['id'], $remarkstblview);
        }

        self::My_core_create_auto_gen_custom_helper();



        foreach ($tablerowscf_view as $key => $value) {
            $remarkstblview = $value['remarks'];
            self::My_core_create_model_alias_production($value['viewname'], $value['dbviewname'], $value['id'], $remarkstblview);
        }
        //}
    }

    public static function My_core_create_file_from_template($filename, $blreplacefile, $data) {
        $maindirname = dirname($filename);
        if (!file_exists($maindirname) && !mkdir($maindirname, 0777, true)) {
            die('Failed to create ' . $maindirname);
        } else if (!file_exists($filename) || $blreplacefile == true) {
            $fh = fopen($filename, 'w') or die('Error during operation for file ' . $filename);
            fwrite($fh, $data);
            fclose($fh);
        }
    }

    private static function My_core_make_safe_tblname($tblname) {
        return str_replace('_', '', $tblname);
    }

    private static function My_core_get_namespacename($namespace) {
        $di = \Phalcon\DI::getDefault();
        $newnamespacename = str_ireplace('--appname--', ucfirst($di->controller_params_array['app']), $namespace);
        return $newnamespacename;
    }

    private static function My_core_create_model_alias_production($tablename, $dbtablename, $pkid, $remarkstblview) {
        $di = \Phalcon\DI::getDefault();
        $con = $di->get('dbopen', $di);
        $aliasnamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Alias());
        $productionnamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Production());
        $prototypenamespace = self::My_core_get_namespacename(self::Model_Core_Namespace_Prototype());
        $tmptbl = new \B2b\Models\TmpModel();
        $tmpmgr = $tmptbl->getModelsManager();
//$tmpmgr->__destruct();
        $tmpmgr->setModelSource($tmptbl, $tablename);
        $tmpmgr->setModelSchema($tmptbl, $di->controller_params_array['schemaname']);



        $extrafunctionsname = '';
        $checkfordoubles = array();
        if (stripos($dbtablename, 'tbl') !== false) {
            $tmptbl1 = new \B2b\Models\TmpModel();
            $tmpmgr1 = $tmptbl1->getModelsManager();
            $tmpmgr1->setModelSource($tmptbl1, 'mitra_mitrapk');
            $tmpmgr1->setModelSchema($tmptbl1, $di->controller_params_array['schemaname']);

            $metaData1 = $tmptbl1->getModelsMetaData();
            $tmpattributes1 = $metaData1->getAttributes($tmptbl1);
            foreach ($tmpattributes1 as $key => $value) {
                $arr = array(
                    'remarkstblview' => 'Original Field From Mitra',
                    'subclassnamealias' => ucfirst($value),
                    'originalfield' => $value);

                $checkfordoubles[$arr['subclassnamealias']] = $arr['subclassnamealias'];
                $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Alias_Model_Field(), $arr);

                $extrafunctionsname = $extrafunctionsname . $tmpstr;
            }
        }










        $classname = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($tablename));
        $arr = array(
            'remarkstblview' => $remarkstblview,
            'classname' => $classname,
            'aliasnamespacename' => str_ireplace('--appname--', ucfirst($di->controller_params_array['app']), self::Model_Core_Namespace_Alias()),
            'prototypenamespacename' => $prototypenamespace,
            'extendclassname' => ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst($dbtablename));

        $straliasmodel = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Alias_Model_Class(), $arr);

        $fieldrows = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "field where fktable=:fktable", Phalcon\Db::FETCH_ASSOC, array('fktable' => $pkid));

        foreach ($fieldrows as $fieldkey => $fieldvalue) {


            $arr = array(
                'remarkstblview' => $remarkstblview,
                'subclassnamealias' => ucfirst($fieldvalue['fieldname']),
                'originalfield' => $fieldvalue['dbfieldname']);

            if (isset($checkfordoubles[$arr['subclassnamealias']])) {
                $arr['subclassnamealias'] = 'SosDouble' . $arr['subclassnamealias'];
            }
            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Alias_Model_Field(), $arr);

            $extrafunctionsname = $extrafunctionsname . $tmpstr;





            $arr = array(
                'remarkstblview' => $remarkstblview,
                'upperfieldname' => ucfirst($fieldvalue['fieldname']),
                'fieldname' => $fieldvalue['fieldname'],
                'upperparentfieldname' => ucfirst($fieldvalue['dbfieldname']));

            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Alias_Property_Set(), $arr);

            $extrafunctionsname = $extrafunctionsname . $tmpstr;

            $arr = array(
                'remarkstblview' => $remarkstblview,
                'upperfieldname' => ucfirst($fieldvalue['fieldname']),
                'fieldname' => $fieldvalue['fieldname'],
                'upperparentfieldname' => ucfirst($fieldvalue['dbfieldname']));

            $tmpstr = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Prototype_Model_Alias_Property_Get(), $arr);

            $extrafunctionsname = $extrafunctionsname . $tmpstr;
        }
        unset($checkfordoubles);


        $sub_rows_rel = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table_relation where table1=:table1", Phalcon\Db::FETCH_ASSOC, array('table1' => $dbtablename));

        foreach ($sub_rows_rel as $sub_key_rel => $sub_value_rel) {

            $subtablealias = $con->fetchAll("SELECT * FROM " . $di->controller_params_array['schemaname'] . "." . $di->controller_params_array['basesettings']['tblcoreprefix'] . "table where dbtablename=:dbtablename", Phalcon\Db::FETCH_ASSOC, array('dbtablename' => $sub_value_rel['table2']));

            $sub_val1 = $sub_key_rel;
            $sub_classname = ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($sub_value_rel['table2']));
            $arr = array(
                'remarkstblview' => $remarkstblview,
                'subclassnamealias' => ucfirst($di->controller_params_array['app']) . ucfirst($di->controller_params_array['schemaname']) . ucfirst(self::My_core_make_safe_tblname($subtablealias[0]['tablename'])),
                'subclassname' => $sub_classname);



            $extrafunctionsname = $extrafunctionsname . MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Alias_Model_Function_Related(), $arr);
        }














        $arr = array(
            'remarkstblview' => $remarkstblview,
            'extrafunctionsname' => $extrafunctionsname);
        $straliasmodel = MyCustomHelperTemplate::My_core_make_string_from_template($straliasmodel, $arr);
        $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Alias()) . $classname . '.php';
        $blreplacefile = true;
        self::My_core_create_file_from_template($filename, $blreplacefile, $straliasmodel);




        $arr = array(
            'remarkstblview' => $remarkstblview,
            'classname' => $classname,
            'namespacename' => $productionnamespace,
            'aliasnamespacename' => $aliasnamespace);

        $strproductionmodel = MyCustomHelperTemplate::My_core_make_string_from_template(self::Model_Core_Production_Model_Class(), $arr);

        $filename = str_ireplace("--appname--", $di->controller_params_array['app'], self::Model_Core_Class_Directory_Production()) . $classname . '.php';
        $blreplacefile = false;
        self::My_core_create_file_from_template($filename, $blreplacefile, $strproductionmodel);
    }

}
