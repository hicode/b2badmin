delete from core_plugin_param_value where 
    mykatastima='krestena' 
and 
    fkplugin in (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_customers');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_customers'),
	'trans_pagetitle','Customers'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_customers'),
	'breadcrumb+trans_title','Customers'
    );