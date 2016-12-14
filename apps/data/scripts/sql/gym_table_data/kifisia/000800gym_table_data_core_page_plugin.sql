delete from core_page_plugin 
where mykatastima=:mykatastima;

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
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_energa'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_energa')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_energa'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_energa')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_energa'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),


    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipo'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_ipoloipo')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipo'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_ipoloipo')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipo'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),


    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_scexpireinmonth'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_scexpireinmonth')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_scexpireinmonth'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_scexpireinmonth')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_scexpireinmonth'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),




    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts')
    ),

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_contracts_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_all'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_payments'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_payments')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_details'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_members_details')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_energa_details'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_members_energa_details')
    ),

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipo_details'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_members_ipoloipo_details')
    ),

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_scexpireinmonth_details'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_members_scexpireinmonth_details')
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
    ),

-- DLS20161031

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_packets'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_packets')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_packets_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_packets_new')
    ),
--DLE20161031

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_energa_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_energa_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_energa_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_contracts_energa_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_energa_all'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),



    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_energa_visits_open_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_energa_visits_open_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_energa_visits_open_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_contracts_energa_visits_open_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_energa_visits_open_all'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    )

    ,(:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_visits_done_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_contracts_visists_done_all')
    ),
    
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_visits_done_all'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_contracts_visits_done_all')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_visits_done_all'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),

    -- DLS20161107
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_services'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_services')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_receipts'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_receipts')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_services_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_services_new')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_income_expenses'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_income_expenses')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_income_expenses_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_income_expenses_new')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_members_contracts_new')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_contracts_payments_new'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_members_contracts_payments_new')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_pdf'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='printpdfv100_inner_home_crm_pdf')
    ),
    -- DLE20161107

    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipa'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_ipoloipa')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipa'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_ipoloipa')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_ipoloipa'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),

(:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_lixiprothesma'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesv11010_inner_home_crm_members_lixiprothesma')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_lixiprothesma'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='pageheaderv100_inner_home_crm_members_lixiprothesma')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_members_lixiprothesma'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),

-- DLS20161111
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_event_modal_contents_edit'),
        (select id from core_plugin where pluginname='modalgeneralv100_modal_general')
    ),
    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_event_modal_contents_edit'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261_inner_home_crm_event_modal_contents_edit')
    ),
    -- DLE


    (:mykatastima,
        (select id from core_page where mykatastima=:mykatastima and pagename='inner_home_crm_trainers_details'),
        (select id from core_plugin where mykatastima=:mykatastima and pluginname='datatablesdetailstable_inner_home_crm_trainers_details')
    );