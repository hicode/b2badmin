set my.pluginname to 'printpdfv100_inner_home_crm_pdf';

delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));
    -- DLS20161014
    INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES    
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
    'settings+header','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
    'settings+footer','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
    'settings+orientation','L'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
    'settings+printtype','PDF'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
    'settings+autoprint','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
    'settings+autodownload','0');