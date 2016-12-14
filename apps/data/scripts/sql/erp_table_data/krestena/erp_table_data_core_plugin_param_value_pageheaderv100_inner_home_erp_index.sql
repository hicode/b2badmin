delete from core_plugin_param_value where 
    mykatastima='krestena' 
and 
    fkplugin in (select id from core_plugin where mykatastima='krestena' and  mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_index');


INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    ('krestena',(select id from core_plugin where pluginname='pageheaderv100_inner_home_erp_index'),'trans_pagetitle','Dashboard'),
    ('krestena',(select id from core_plugin where pluginname='pageheaderv100_inner_home_erp_index'),'breadcrumb+trans_title','Dashboard');