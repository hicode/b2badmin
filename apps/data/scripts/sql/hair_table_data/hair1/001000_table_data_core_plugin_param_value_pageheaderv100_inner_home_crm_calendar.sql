set my.pluginname to 'pageheaderv100_inner_home_crm_calendar';

delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    (:mykatastima,
        (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
        'trans_pagetitle','Dashboard'
    ),
    (:mykatastima,
        (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
        'breadcrumb+trans_title','Dashboard'
    );