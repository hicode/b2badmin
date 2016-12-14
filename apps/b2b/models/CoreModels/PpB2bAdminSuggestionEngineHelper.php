<?php

namespace B2b\Models\CoreModels;

class PpB2bAdminSuggestionEngineHelper extends DlB2bAdminSuggestionEngineHelper {

    // TODO: Isws prepei na to parw apo allo source ( Apo plugin settings i kati allo )
    static private $suggestionsViews = ['members' => 'vfcrmcustomerm', 'trainers' => 'vfcrmtrainerm'];
    static private $suggestionsKeys = ['members' => 'fkcustomerfkparentlng', 'trainers' => 'tagsid'];
    static private $suggestionsVals = ['members' => 'customerfull', 'trainers' => 'tagstext'];
    static private $suggestionsSrchField = ['members' => 'gensrch', 'trainers' => 'tagstext'];
    static private $suggestionsOperators = ['members' => 'like', 'trainers' => 'like'];
    static private $limit = 15;

    static private function Get_Suggestions_Data() {
        $di = \Phalcon\DI::getDefault();
        $ret = array();
        $for = $di->controller_params_array['param2'];
        $text = $di->controller_params_array['param3'];
        //$classname = \MyCustomHelperClassTools::My_Core_Get_Classname(self::$suggestionsViews[$for]);
        $params = array('mykatastima' => 'current', 'fklng' => 'current', 'bldeleted' => 0, 'bldisabled' => 0, 'blpublished' => 1, self::$suggestionsSrchField[$for] => $text);
        $datasource = array('tblname' => self::$suggestionsViews[$for],
            'params' => $params,
            'operators' => array(self::$suggestionsSrchField[$for] => self::$suggestionsOperators[$for]),
            'limit' => self::$limit);
        $data = PpB2bAdminVfroutepagepluginnoavailableparams::Get_Datasource_Data($datasource);
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $ret[] = array(
                    'id' => $value[self::$suggestionsKeys[$for]],
                    'key' => $value[self::$suggestionsVals[$for]]
                );
            }
        }
        return $ret;
    }

    static public function Get_Suggestions() {
        $suggestions = self::Get_Suggestions_Data();
        return $suggestions;
    }

}
