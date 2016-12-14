<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfroutepageplugintranslateavailablepluginjson extends \B2b\Models\BaseModel implements B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface {
    

    public function initialize() {
        parent::initialize();
        
    }
    public function getSequenceName()
    {
        return self::getSchema(). '.' .parent::PK_NAME;
    }
    public function beforeValidationOnCreate()
    {
        parent::beforeValidationOnCreate();
        
    }
    public function beforeValidationOnUpdate()
    {
        parent::beforeValidationOnUpdate();
        
    }
        
                            /**
                                * @var int
                            */
                            protected $id;
             
                        /**
                        * Get id.
                        * 
                             /**
                                * @return int
                            */  
                    public function getId()
                    {
                        return $this->id;
                    }  /**
                        * Set id.
                        *@param int $id    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setId($id) 
                        {      
                            $this->id = (int) $id;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fklng;
             
                        /**
                        * Get fklng.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFklng()
                    {
                        return $this->fklng;
                    }  /**
                        * Set fklng.
                        *@param int $fklng    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkpage;
             
                        /**
                        * Get fkpage.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkpage()
                    {
                        return $this->fkpage;
                    }  /**
                        * Set fkpage.
                        *@param int $fkpage    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setFkpage($fkpage) 
                        {      
                            $this->fkpage = (int) $fkpage;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkroute;
             
                        /**
                        * Get fkroute.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkroute()
                    {
                        return $this->fkroute;
                    }  /**
                        * Set fkroute.
                        *@param int $fkroute    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setFkroute($fkroute) 
                        {      
                            $this->fkroute = (int) $fkroute;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginname;
             
                        /**
                        * Get pluginname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginname()
                    {
                        return $this->pluginname;
                    }  /**
                        * Set pluginname.
                        *@param string $pluginname    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setPluginname($pluginname) 
                        {      
                            $this->pluginname = (string) $pluginname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepluginaliasname;
             
                        /**
                        * Get availablepluginaliasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepluginaliasname()
                    {
                        return $this->availablepluginaliasname;
                    }  /**
                        * Set availablepluginaliasname.
                        *@param string $availablepluginaliasname    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setAvailablepluginaliasname($availablepluginaliasname) 
                        {      
                            $this->availablepluginaliasname = (string) $availablepluginaliasname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pagename;
             
                        /**
                        * Get pagename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPagename()
                    {
                        return $this->pagename;
                    }  /**
                        * Set pagename.
                        *@param string $pagename    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setPagename($pagename) 
                        {      
                            $this->pagename = (string) $pagename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $routename;
             
                        /**
                        * Get routename.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRoutename()
                    {
                        return $this->routename;
                    }  /**
                        * Set routename.
                        *@param string $routename    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setRoutename($routename) 
                        {      
                            $this->routename = (string) $routename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $routemodule;
             
                        /**
                        * Get routemodule.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRoutemodule()
                    {
                        return $this->routemodule;
                    }  /**
                        * Set routemodule.
                        *@param string $routemodule    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setRoutemodule($routemodule) 
                        {      
                            $this->routemodule = (string) $routemodule;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $routecontroller;
             
                        /**
                        * Get routecontroller.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRoutecontroller()
                    {
                        return $this->routecontroller;
                    }  /**
                        * Set routecontroller.
                        *@param string $routecontroller    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setRoutecontroller($routecontroller) 
                        {      
                            $this->routecontroller = (string) $routecontroller;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $routeaction;
             
                        /**
                        * Get routeaction.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRouteaction()
                    {
                        return $this->routeaction;
                    }  /**
                        * Set routeaction.
                        *@param string $routeaction    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setRouteaction($routeaction) 
                        {      
                            $this->routeaction = (string) $routeaction;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $blpublished;
             
                        /**
                        * Get blpublished.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBlpublished()
                    {
                        return $this->blpublished;
                    }  /**
                        * Set blpublished.
                        *@param int $blpublished    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setBlpublished($blpublished) 
                        {      
                            $this->blpublished = (int) $blpublished;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $bldeleted;
             
                        /**
                        * Get bldeleted.
                        * 
                             /**
                                * @return int
                            */  
                    public function getBldeleted()
                    {
                        return $this->bldeleted;
                    }  /**
                        * Set bldeleted.
                        *@param int $bldeleted    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setBldeleted($bldeleted) 
                        {      
                            $this->bldeleted = (int) $bldeleted;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $paramjson;
             
                        /**
                        * Get paramjson.
                        * 
                             /**
                                * @return string
                            */  
                    public function getParamjson()
                    {
                        return $this->paramjson;
                    }  /**
                        * Set paramjson.
                        *@param string $paramjson    
                        *@return B2bB2badminschemaVfroutepageplugintranslateavailablepluginjsonInterface*/
                         public function setParamjson($paramjson) 
                        {      
                            $this->paramjson = (string) $paramjson;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_route_page_plugin_translate_available_plugin_json";

}
        

             