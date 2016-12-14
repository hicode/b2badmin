delete from core_plugin_param_value where 
    mykatastima='krestena' 
and 
    fkplugin in (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_my_items_apomiosi');


INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_my_items_apomiosi'),
	'trans_pagetitle','Apomiosi'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_my_items_apomiosi'),
	'breadcrumb+trans_title','Apomiosi'
    );