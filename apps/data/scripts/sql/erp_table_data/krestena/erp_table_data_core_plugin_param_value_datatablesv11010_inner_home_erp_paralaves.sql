-- set search_path=phalconphpschema;
-- delete from core_plugin_param_value where fkplugin in (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'trans_table_title','Paralaves'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'portlet_class','portlet box green portlet-fit portlet-datatable bordered'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'async_req_data_param+extrasearch',''
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'async_req_data_param+col','3'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'async_req_data_param+sort','asc'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'async_req_data_param+pagelength','20'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'Actions_Tools+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'Button_New+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'Button_New+title','New Customer'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'Table_Cols+blshow','1'
    ),

    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+idseq','1'
    ),
--     ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
-- 	'cols+expandedit','1'
--     ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'translates+trans_successmessage','successmessage'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'translates+trans_querytook','querytook'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'datasource+readtblname','Vferpparalaveskrestenam'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'datasource+writetblname','Coreerpitems'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'datasource+readpk','fkcoreerpitemsid'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'datasource+writepk','id'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'datasource+extrasearch+fklng+value','current'
    ),
    ('krestena',(select id from core_plugin where pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),


   

('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myyear+heading+trans_title','Year'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myyear+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myyear+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myyear+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myyear+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myyear+cells+class','hleft'
    ),


('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydateparalavis+heading+trans_title','mydateparalavis'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydateparalavis+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydateparalavis+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydateparalavis+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydateparalavis+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydateparalavis+cells+class','hleft'
    ),





('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mymasteritem+heading+trans_title','MasterItem'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mymasteritem+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mymasteritem+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mymasteritem+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mymasteritem+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mymasteritem+cells+class','hleft'
    ),

('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mybarcodes+heading+trans_title','Barcode'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mybarcodes+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mybarcodes+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mybarcodes+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mybarcodes+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mybarcodes+cells+class','hleft'
    ),

('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydescription+heading+trans_title','Description'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydescription+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydescription+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydescription+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydescription+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydescription+cells+class','hleft'
    ),



('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumenttype+heading+trans_title','ppmydoctype'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumenttype+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumenttype+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumenttype+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumenttype+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumenttype+cells+class','hleft'
    ),


('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+titlemydocumenttype+heading+trans_title','pptitlemydoctype'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+titlemydocumenttype+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+titlemydocumenttype+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+titlemydocumenttype+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+titlemydocumenttype+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+titlemydocumenttype+cells+class','hleft'
    ),







('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumentnumber+heading+trans_title','ppmydocnum'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumentnumber+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumentnumber+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumentnumber+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumentnumber+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mydocumentnumber+cells+class','hleft'
    ),



('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myrefnumber+heading+trans_title','ppmyrefnumber'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myrefnumber+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myrefnumber+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myrefnumber+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myrefnumber+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myrefnumber+cells+class','hleft'
    ),





    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+heading+trans_title','CategoryFpa'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+heading+width','1%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+type','select'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+searchmethod','Exact'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+searchkey','myvatcode'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+tblname','vferplmyvatcodekrestenam'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+kind','production'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+keyval','myvatcode'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+showval','myvatcode'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+params+fklng','current'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+params+mykatastima','krestena'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+params+bldeleted','0'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+params+blpublished','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+filter+values+datasource+params+bldisabled','0'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatcode+cells+class','hleft'
    ),









    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+heading+trans_title','MonadaPolisis'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+heading+width','1%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+type','select'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+searchmethod','Exact'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+searchkey','myunitofmeasure'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+tblname','vferplmyunitofmeasurekrestenam'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+kind','production'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+keyval','myunitofmeasure'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+showval','myunitofmeasure'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+params+fklng','current'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+params+bldeleted','0'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+params+blpublished','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+filter+values+datasource+params+bldisabled','0'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myunitofmeasure+cells+class','hleft'
    ),





('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+heading+trans_title','myinvoiceqty'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+cells+class','hleft'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myinvoiceqty+group','sum'
    ),


('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+heading+trans_title','TimiPolisis'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+cells+class','hleft'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+mynetvalue+group','sum'
    ),


('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatvalue+heading+trans_title','vatvalue'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatvalue+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatvalue+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatvalue+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatvalue+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves'),
	'cols+myvatvalue+cells+class','hleft'
    );

select mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_plugin_param_value');