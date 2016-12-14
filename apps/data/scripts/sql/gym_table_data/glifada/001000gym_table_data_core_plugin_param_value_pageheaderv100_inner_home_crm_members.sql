delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    
    (:mykatastima,
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members'),
	'trans_pagetitle','Members'
        ),
    (:mykatastima,
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members'),
	'breadcrumb+trans_title','Members'
    );