INSERT INTO core_page_plugin(
           fkpage,fkplugin)
    VALUES 
    (
        (select id from core_page where pagename='outer-sidebar'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    (
        (select id from core_page where pagename='js-main'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    (
        (select id from core_page where pagename='inner_home_crm_delete_record'),
        (select id from core_plugin where pluginname='deleterecordv100_inner_home_crm_delete_record')
    );
