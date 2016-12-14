<?php

namespace B2b\Models\CoreModels;

class DlB2bAdminSuggestionEngineHelper {
    
    // TODO: Isws prepei na to parw apo allo source ( Apo plugin settings i kati allo )
    static private $suggestionsViews = ['members' => 'vfcrmcustomerm', 'trainers' => 'vfcrmtrainerm'];
    static private $limit = 15;
    
    static private function Get_Suggestions_Data () {
        $di = \Phalcon\DI::getDefault();
        $for = $di->controller_params_array['param2'];
        $text = $di->controller_params_array['param3'];
        $classname = \MyCustomHelperClassTools::My_Core_Get_Classname(self::$suggestionsViews[$for]);
        $data = $classname::find(array(
            'conditions' => 'bldeleted = :bldeleted: AND bldisabled = :bldisabled: AND blpublished = :blpublished: AND LOWER(tagstext) like \'%'. (mb_strtolower($text)) .'%\'',
            'limit' => self::$limit,
            'bind' => array(
                'bldeleted' => 0,
                'bldisabled' => 0,
                'blpublished' => 1
            )
        ))->toArray();
        
        if( !empty($data) ) {
            $ret = [];
            foreach ($data as $key => $value) {
                $ret[] = array(
                    'id' => $value['tagsid'],
                    'key' => $value['tagstext']
                );
            }
            return $ret;
        } else {
            return array();
        }
    }    
    
    static public function Get_Suggestions () {
        $suggestions = self::Get_Suggestions_Data();
        return $suggestions;
    }
    
}