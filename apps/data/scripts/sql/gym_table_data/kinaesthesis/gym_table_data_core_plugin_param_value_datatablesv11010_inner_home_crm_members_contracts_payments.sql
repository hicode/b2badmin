delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments');











INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    
    

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'trans_table_title','Payments'
    ),
        (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'async_req_data_param+extrasearch',''
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'async_req_data_param+col','3'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'async_req_data_param+sort','desc'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'async_req_data_param+pagelength','20'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'Actions_Tools+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'Button_New+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'Button_New+title','New Payment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'Table_Cols+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+idseq','1'
    ),
--    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
--	'cols+expandedit','1'
--    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'translates+trans_successmessage','successmessage'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'translates+trans_querytook','querytook'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datatable+htmlname','datatable_ajax2'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datatable+mainpage','inner_home_crm_members_contracts_payments'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+readtblname','vfcrmcustomercontractpaymentm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+writetblname','corecrmcustomercontractpayment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+extrasearch+fklng+value','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+extrasearch+actualpaymenttotal+value','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+extrasearch+actualpaymenttotal+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'datasource+extrasearch+actualpaymenttotal+operator','>'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+heading+trans_title','availablepackettitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+heading+width','1%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+type','select'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+searchkey','fkavailablepacket'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+tblname','Corecrmavailablepacket'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+kind','production'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+keyval','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+showval','title'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+mykatastima','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+bldeleted','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+blpublished','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+bldisabled','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+corecrmavailablepackettitle+cells+class','hcenter'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+visible','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+heading+trans_title','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+heading+width','1%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+filter+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+fkcustomerfkparentlng+cells+class','hcenter hidden'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+heading+trans_title','customercontractdtstart'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+filter+searchmethod','Like'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtstart+cells+class','hcenter'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+heading+trans_title','customercontractdtend'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+customercontractdtend+cells+class','hcenter'
    ),








(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualdtpayment+heading+trans_title','actualdtpayment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualdtpayment+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualdtpayment+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualdtpayment+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualdtpayment+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualdtpayment+filter+searchmethod','Like'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualpaymenttotal+heading+trans_title','actualpaymenttotal'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualpaymenttotal+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualpaymenttotal+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualpaymenttotal+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualpaymenttotal+format','float'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+actualpaymenttotal+filter+searchmethod','Like'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+blppdlbw+heading+trans_title','blppdlbw'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+blppdlbw+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+blppdlbw+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+blppdlbw+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+blppdlbw+format','int'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+blppdlbw+filter+searchmethod','Like'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymentreasontitle+heading+trans_title','paymentreasontitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymentreasontitle+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymentreasontitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymentreasontitle+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymentreasontitle+filter+searchmethod','Like'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymenttypetitle+heading+trans_title','paymenttypetitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymenttypetitle+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymenttypetitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymenttypetitle+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments'),
	'cols+paymenttypetitle+filter+searchmethod','Like'
    );




