set my.pluginname to 'datatablesv11010_inner_home_crm_receipts';

delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));











INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    
    

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'trans_table_title','receipts'
    ),
        (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'async_req_data_param+extrasearch',''
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'async_req_data_param+col','3'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'async_req_data_param+sort','desc'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'async_req_data_param+pagelength','10'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250'
    ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'Actions_Tools+blshow','1'
    ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+blshow','1'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+title','New Payment'
--     ),    
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-newrecord','inner_home_crm_members_contracts_payments'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-extra','1'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pkfield','fkcustomercontract'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-id+advanced+from','request'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-id+advanced+var','dataID'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-id+advanced+gettype','split'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-id+advanced+by','_'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-id+advanced+value','0'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pageparams','true'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pageparamthree+advanced+from','request'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pageparamthree+advanced+var','dataID'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pageparamthree+advanced+gettype','split'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pageparamthree+advanced+by','_'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'Button_New+attrs+data-pageparamthree+advanced+value','0'
--     ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'Table_Cols+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+idseq','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actions+btn2+a+attrs+class','btn btn-xs blue-madison default printsinglepdf'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actions+btn2+a+attrs+data-action','Print'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actions+btn2+a+attrs+data-type','payment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actions+btn2+a+text','Print'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actions+btn2+i+attrs+class','fa fa-file-pdf-o'
    ),
--    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
--	'cols+expandedit','1'
--    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_successmessage','successmessage'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_querytook','querytook'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datatable+htmlname','datatable_ajax2'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datatable+mainpage','inner_home_crm_members_contracts_payments'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+readtblname','vfcrmcustomercontractpaymentm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+writetblname','corecrmcustomercontractpayment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+readpk','fkcustomerfkparentlng'
    ),
    -- DLS20161107
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+dldataid','fkcorecrmcustomercontractpaymentid'
    ),
    -- DLS20161107
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+extrasearch+fklng+value','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+extrasearch+actualpaymenttotal+value','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+extrasearch+actualpaymenttotal+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+extrasearch+actualpaymenttotal+operator','>'
    ),


    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customerfull+heading+trans_title','customerfull'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customerfull+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customerfull+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customerfull+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customerfull+filter+searchmethod','Like'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customerfull+cells+class','hcenter'
    ),



    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+heading+trans_title','availablepackettitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+heading+width','1%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+type','select'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+searchkey','fkavailablepacket'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+tblname','Corecrmavailablepacket'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+kind','production'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+keyval','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+showval','title'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+mykatastima','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+bldeleted','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+blpublished','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+filter+values+datasource+params+bldisabled','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+corecrmavailablepackettitle+cells+class','hcenter'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+visible','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+heading+trans_title','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+heading+width','1%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+filter+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+fkcustomerfkparentlng+cells+class','hcenter hidden'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+heading+trans_title','customercontractdtstart'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+filter+searchmethod','Like'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtstart+cells+class','hcenter'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+heading+trans_title','customercontractdtend'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+customercontractdtend+cells+class','hcenter'
    ),








(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualdtpayment+heading+trans_title','actualdtpayment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualdtpayment+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualdtpayment+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualdtpayment+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualdtpayment+format','date'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualdtpayment+filter+searchmethod','Like'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualpaymenttotal+heading+trans_title','actualpaymenttotal'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualpaymenttotal+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualpaymenttotal+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualpaymenttotal+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualpaymenttotal+format','float'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+actualpaymenttotal+filter+searchmethod','Like'
    ),




--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'cols+blppdlbw+heading+trans_title','blppdlbw'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'cols+blppdlbw+heading+width','5%'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'cols+blppdlbw+heading+sortable','true'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'cols+blppdlbw+filter+type','input'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'cols+blppdlbw+format','int'
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'cols+blppdlbw+filter+searchmethod','Like'
--     ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymentreasontitle+heading+trans_title','paymentreasontitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymentreasontitle+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymentreasontitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymentreasontitle+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymentreasontitle+filter+searchmethod','Like'
    ),




(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymenttypetitle+heading+trans_title','paymenttypetitle'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymenttypetitle+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymenttypetitle+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymenttypetitle+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'cols+paymenttypetitle+filter+searchmethod','Like'
    );




