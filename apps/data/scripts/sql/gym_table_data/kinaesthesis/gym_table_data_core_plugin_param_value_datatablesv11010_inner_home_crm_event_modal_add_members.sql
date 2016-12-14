delete from core_plugin_param_value where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members');











INSERT INTO core_plugin_param_value(mykatastima,fkplugin, paramname, paramvalue) VALUES
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'trans_table_title','Members'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_erp_krestena_customers'),
	'async_req_data_param+extrasearch',''
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_erp_krestena_customers'),
	'async_req_data_param+col','3'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_erp_krestena_customers'),
	'async_req_data_param+sort','asc'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_erp_krestena_customers'),
	'async_req_data_param+pagelength','20'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_erp_krestena_customers'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_erp_krestena_customers'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'Actions_Tools+blshow','0'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'Table_Cols+blshow','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+checkbox','1'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'datasource+readtblname','Vfcrmcustomerm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'datasource+extrasearch+fklng+value','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'datasource+extrasearch+fklng+searchmethod','Exact'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerlname+heading+trans_title','Lastname'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerlname+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerlname+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerlname+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerlname+filter+searchmethod','Like'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerlname+cells+class','hcenter'
    )
    ,
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerfname+heading+trans_title','Firstname'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerfname+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerfname+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerfname+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerfname+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customerfname+cells+class','hcenter'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelmobile+heading+trans_title','Mobilephone'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelmobile+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelmobile+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelmobile+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelmobile+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelmobile+cells+class','hcenter'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelland+heading+trans_title','Landphone'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelland+heading+width','5%'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelland+heading+sortable','true'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelland+filter+type','input'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelland+filter+searchmethod','Like'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members'),
        'cols+customertelland+cells+class','hcenter'
    );