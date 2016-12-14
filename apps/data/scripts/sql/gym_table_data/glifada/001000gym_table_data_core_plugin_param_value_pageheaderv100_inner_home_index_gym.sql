delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_index');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    (:mykatastima,
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_index'),
        'trans_pagetitle','DashboardPageTitleGymGlifada'
    ),
    (:mykatastima,
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_index'),
        'breadcrumb+trans_title','DashboardPageTitleGymGlifada'
    );