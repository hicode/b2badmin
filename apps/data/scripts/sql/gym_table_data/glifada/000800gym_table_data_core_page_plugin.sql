INSERT INTO core_page_plugin(mykatastima,fkpage,fkplugin) VALUES
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_index'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_index')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_index'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_details'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_members_details')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_calendar'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_calendar'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_calendar'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_calendar')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_event_modal_contents'),
        (select id from core_plugin where pluginname='modalgeneralv100_modal_general')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_event_modal_contents'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261')
    ),
    (:mykatastima,
        (select id from core_page where pagename='js-dl'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_event_modal_add_members'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_event_modal_quick_tpls'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='modalgeneralv100_inner_home_crm_event_modal_quick_tpls')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_trainers'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_trainers')
    ),
    (:mykatastima,
        (select id from core_page where pagename='js-dl'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_event_modal_add_members')
    ),

-- DLS20161015
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_service_contracts_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_members_new')
    );
    -- DLE20161015