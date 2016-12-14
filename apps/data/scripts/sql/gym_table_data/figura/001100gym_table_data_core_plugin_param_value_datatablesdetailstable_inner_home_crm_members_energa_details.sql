set my.pluginname to 'datatablesdetailstable_inner_home_crm_members_energa_details';

delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)

(select mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))), paramname, paramvalue from core_plugin_param_value 
where
mykatastima=:mykatastima
and fkplugin=(select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_members_details'));

