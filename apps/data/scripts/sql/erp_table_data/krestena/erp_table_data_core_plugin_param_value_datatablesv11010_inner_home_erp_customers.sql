delete from core_plugin_param_value where mykatastima='krestena' and  
    fkplugin in 
    (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'trans_table_title','Customers'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'async_req_data_param+extrasearch',''
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'async_req_data_param+col','3'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'async_req_data_param+sort','asc'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'async_req_data_param+pagelength','20'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'Actions_Tools+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'Button_New+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'Button_New+title','New Customer'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'Table_Cols+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+idseq','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+expandedit','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'translates+trans_successmessage','successmessage'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'translates+trans_querytook','querytook'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'datasource+readtblname','Vferpcustskrestenam'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'datasource+writetblname','Coreerpcusts'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'datasource+readpk','fkcoreerpcustsid'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'datasource+writepk','id'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'datasource+extrasearch+fklng+value','current'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mykodikospelati+heading+trans_title','KodikosPelati'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mykodikospelati+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mykodikospelati+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mykodikospelati+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mykodikospelati+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mykodikospelati+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myeponimia+heading+trans_title','Eponimia'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myeponimia+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myeponimia+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myeponimia+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myeponimia+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myeponimia+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myaddress+heading+trans_title','Address'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myaddress+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myaddress+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myaddress+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myaddress+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myaddress+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myarithmos+heading+trans_title','Arithmos'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myarithmos+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myarithmos+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myarithmos+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myarithmos+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myarithmos+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mytk+heading+trans_title','Tk'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mytk+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mytk+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mytk+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mytk+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mytk+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myphone+heading+trans_title','Phone'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myphone+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myphone+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myphone+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myphone+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myphone+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mymail+heading+trans_title','Mail'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mymail+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mymail+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mymail+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mymail+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mymail+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myfax+heading+trans_title','Fax'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myfax+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myfax+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myfax+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myfax+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myfax+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mydoy+heading+trans_title','Doy'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mydoy+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mydoy+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mydoy+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mydoy+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+mydoy+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myafm+heading+trans_title','Afm'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myafm+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myafm+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myafm+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myafm+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myafm+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myepaggelma+heading+trans_title','Eppaggelma'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myepaggelma+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myepaggelma+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myepaggelma+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myepaggelma+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers'),
	'cols+myepaggelma+cells+class','hcenter'
    );