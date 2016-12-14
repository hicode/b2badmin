delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts');











INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    
    

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'trans_table_title','Contracts'
    ),
        (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'async_req_data_param+extrasearch',''
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'async_req_data_param+col','3'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'async_req_data_param+sort','desc'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'async_req_data_param+pagelength','20'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'Actions_Tools+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'Button_New+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'Button_New+title','New Contract'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'Table_Cols+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+idseq','1'
    ),
--    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
--	'cols+expandedit','1'
--    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'translates+trans_successmessage','successmessage'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'translates+trans_querytook','querytook'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datatable+htmlname','datatable_ajax2'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datatable+mainpage','inner_home_crm_members_contracts'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datasource+readtblname','vfcrmcustomercontractpaymentgroupm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datasource+writetblname','corecrmcustomercontract'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datasource+extrasearch+fklng+value','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+heading+trans_title','availablepackettitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+heading+width','1%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+type','select'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+searchkey','fkcorecrmavailableserviceid'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+tblname','Corecrmavailableservice'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+kind','production'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+keyval','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+showval','title'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+params+bldeleted','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+params+blpublished','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+filter+values+datasource+params+bldisabled','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+corecrmavailableservicetitle+cells+class','hcenter'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+visible','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+heading+trans_title','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+heading+width','1%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+filter+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+fkcustomerfkparentlng+cells+class','hcenter hidden'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+heading+trans_title','customercontractdtstart'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+filter+searchmethod','Like'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtstart+cells+class','hcenter'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+heading+trans_title','customercontractdtend'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdtend+cells+class','hcenter'
    ),








(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+heading+trans_title','customercontracttotaldays'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+format','int'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaldays+cells+class','hcenter'
    ),


(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+heading+trans_title','customercontracttotalweeks'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+format','int'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalweeks+cells+class','hcenter'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+heading+trans_title','customercontracttotalmonths'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+format','int'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotalmonths+cells+class','hcenter'
    ),


(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+heading+trans_title','customercontractprice'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+format','money'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractprice+cells+class','hcenter'
    ),

(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+heading+trans_title','sumactualpaymenttotal'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+format','money'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumactualpaymenttotal+cells+class','hcenter'
    ),


(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+heading+trans_title','sumipoloipo'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+format','money'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+sumipoloipo+cells+class','hcenter'
    ),







    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaltimes+heading+trans_title','customercontracttotaltimes'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaltimes+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaltimes+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaltimes+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaltimes+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontracttotaltimes+cells+class','hcenter'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdonetimes+heading+trans_title','customercontractdonetimes'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdonetimes+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdonetimes+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdonetimes+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdonetimes+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts'),
	'cols+customercontractdonetimes+cells+class','hcenter'
    );

