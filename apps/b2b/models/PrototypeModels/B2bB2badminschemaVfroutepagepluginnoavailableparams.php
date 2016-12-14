<?php
namespace B2b\Models\PrototypeModels;

//This file was created by autogenerator php on 2016-12-15 00:52:37 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com
//Remarks : 



use Phalcon\Mvc\Model\Behavior\SoftDelete;



abstract class B2bB2badminschemaVfroutepagepluginnoavailableparams extends \B2b\Models\BaseModel implements B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface {
    

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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setFklng($fklng) 
                        {      
                            $this->fklng = (int) $fklng;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $mykatastima;
             
                        /**
                        * Get mykatastima.
                        * 
                             /**
                                * @return string
                            */  
                    public function getMykatastima()
                    {
                        return $this->mykatastima;
                    }  /**
                        * Set mykatastima.
                        *@param string $mykatastima    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setMykatastima($mykatastima) 
                        {      
                            $this->mykatastima = (string) $mykatastima;
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setRoutename($routename) 
                        {      
                            $this->routename = (string) $routename;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $routepath;
             
                        /**
                        * Get routepath.
                        * 
                             /**
                                * @return string
                            */  
                    public function getRoutepath()
                    {
                        return $this->routepath;
                    }  /**
                        * Set routepath.
                        *@param string $routepath    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setRoutepath($routepath) 
                        {      
                            $this->routepath = (string) $routepath;
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setRouteaction($routeaction) 
                        {      
                            $this->routeaction = (string) $routeaction;
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setPagename($pagename) 
                        {      
                            $this->pagename = (string) $pagename;
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setFkroute($fkroute) 
                        {      
                            $this->fkroute = (int) $fkroute;
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setFkpage($fkpage) 
                        {      
                            $this->fkpage = (int) $fkpage;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $ordering;
             
                        /**
                        * Get ordering.
                        * 
                             /**
                                * @return int
                            */  
                    public function getOrdering()
                    {
                        return $this->ordering;
                    }  /**
                        * Set ordering.
                        *@param int $ordering    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setOrdering($ordering) 
                        {      
                            $this->ordering = (int) $ordering;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkavailableplugin;
             
                        /**
                        * Get fkavailableplugin.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkavailableplugin()
                    {
                        return $this->fkavailableplugin;
                    }  /**
                        * Set fkavailableplugin.
                        *@param int $fkavailableplugin    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setFkavailableplugin($fkavailableplugin) 
                        {      
                            $this->fkavailableplugin = (int) $fkavailableplugin;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepluginname;
             
                        /**
                        * Get availablepluginname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepluginname()
                    {
                        return $this->availablepluginname;
                    }  /**
                        * Set availablepluginname.
                        *@param string $availablepluginname    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setAvailablepluginname($availablepluginname) 
                        {      
                            $this->availablepluginname = (string) $availablepluginname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $availablepluginversion;
             
                        /**
                        * Get availablepluginversion.
                        * 
                             /**
                                * @return string
                            */  
                    public function getAvailablepluginversion()
                    {
                        return $this->availablepluginversion;
                    }  /**
                        * Set availablepluginversion.
                        *@param string $availablepluginversion    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setAvailablepluginversion($availablepluginversion) 
                        {      
                            $this->availablepluginversion = (string) $availablepluginversion;
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
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setAvailablepluginaliasname($availablepluginaliasname) 
                        {      
                            $this->availablepluginaliasname = (string) $availablepluginaliasname;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkplugin;
             
                        /**
                        * Get fkplugin.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkplugin()
                    {
                        return $this->fkplugin;
                    }  /**
                        * Set fkplugin.
                        *@param int $fkplugin    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setFkplugin($fkplugin) 
                        {      
                            $this->fkplugin = (int) $fkplugin;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginaliasname;
             
                        /**
                        * Get pluginaliasname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginaliasname()
                    {
                        return $this->pluginaliasname;
                    }  /**
                        * Set pluginaliasname.
                        *@param string $pluginaliasname    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setPluginaliasname($pluginaliasname) 
                        {      
                            $this->pluginaliasname = (string) $pluginaliasname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginfirstkey;
             
                        /**
                        * Get pluginfirstkey.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginfirstkey()
                    {
                        return $this->pluginfirstkey;
                    }  /**
                        * Set pluginfirstkey.
                        *@param string $pluginfirstkey    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setPluginfirstkey($pluginfirstkey) 
                        {      
                            $this->pluginfirstkey = (string) $pluginfirstkey;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginparamname;
             
                        /**
                        * Get pluginparamname.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginparamname()
                    {
                        return $this->pluginparamname;
                    }  /**
                        * Set pluginparamname.
                        *@param string $pluginparamname    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setPluginparamname($pluginparamname) 
                        {      
                            $this->pluginparamname = (string) $pluginparamname;
                            return $this;
                        }    
                            /**
                                * @var string
                            */
                            protected $pluginparamvalue;
             
                        /**
                        * Get pluginparamvalue.
                        * 
                             /**
                                * @return string
                            */  
                    public function getPluginparamvalue()
                    {
                        return $this->pluginparamvalue;
                    }  /**
                        * Set pluginparamvalue.
                        *@param string $pluginparamvalue    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setPluginparamvalue($pluginparamvalue) 
                        {      
                            $this->pluginparamvalue = (string) $pluginparamvalue;
                            return $this;
                        }    
                            /**
                                * @var int
                            */
                            protected $fkcorepluginparamvalue;
             
                        /**
                        * Get fkcorepluginparamvalue.
                        * 
                             /**
                                * @return int
                            */  
                    public function getFkcorepluginparamvalue()
                    {
                        return $this->fkcorepluginparamvalue;
                    }  /**
                        * Set fkcorepluginparamvalue.
                        *@param int $fkcorepluginparamvalue    
                        *@return B2bB2badminschemaVfroutepagepluginnoavailableparamsInterface*/
                         public function setFkcorepluginparamvalue($fkcorepluginparamvalue) 
                        {      
                            $this->fkcorepluginparamvalue = (int) $fkcorepluginparamvalue;
                            return $this;
                        }
    public function getSource() {
        return self::CONST_TABLE;
    }

    public function getSchema() {
        return self::CONST_SCHEMA;
    }

    const CONST_SCHEMA = "b2badminschema";
    const CONST_TABLE = "vf_route_page_plugin_no_available_params";

}
        

             