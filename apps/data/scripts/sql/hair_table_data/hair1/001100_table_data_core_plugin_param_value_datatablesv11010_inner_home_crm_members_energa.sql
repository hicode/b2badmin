set my.pluginname to 'datatablesv11010_inner_home_crm_members_energa';

delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));



INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)

(select mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))), paramname, paramvalue from core_plugin_param_value 
where
mykatastima=:mykatastima
and fkplugin=(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members'));

update core_plugin_param_value set paramvalue='vfcrmcustomerfullenergam'
    where 
        mykatastima=:mykatastima 
    and 
        paramname='datasource+readtblname'
    and
        fkplugin=(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));

