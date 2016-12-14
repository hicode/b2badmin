INSERT INTO core_plugin(
                mykatastima,fkavailableplugin,blenabled,pluginname,pluginfirstkey)
        VALUES 
    
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='datatablesv11010'),
        1, 
        'datatablesv11010_inner_home_crm_event_modal_add_members','DataTableAjax'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='modalgeneralv100'),
        1, 
        'modalgeneralv100_inner_home_crm_event_modal_quick_tpls','CreateEventQuickTpls'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='datatablesv11010'),
        1, 
        'datatablesv11010_inner_home_crm_trainers','DataTableAjax'),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='pageheaderv100'),
        1,
        'pageheaderv100_inner_home_crm_members','PageHelperHeader'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='pageheaderv100'),
        1,
        'pageheaderv100_inner_home_crm_calendar','PageHelperHeader'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='datatablesv11010'),
        1,
        'datatablesv11010_inner_home_crm_members','DataTableAjax'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='datatablesv11010'),
        1,
        'datatablesv11010_inner_home_crm_members_contracts','DataTableAjax2'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='datatablesdetailstablev100'),
        1,
        'datatablesdetailstable_inner_home_crm_members_details','Row_Details_HtmlTable'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='pageheaderv100'),
        1,
        'pageheaderv100_inner_home_index','PageHelperHeader'
    ),
    (
        :mykatastima,(SELECT id FROM core_available_plugin where pluginaliasname='fullcalendarv261'),
        1,
        'fullcalendarv261','Full_Calendar'
    ),


-- DLS20161015
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='newrecordv100'),
        1,
        'newrecordv100_inner_home_crm_service_contracts_new','New_Record'
    ),
    (
        :mykatastima,(select id from core_available_plugin where   pluginaliasname='newrecordv100'),
        1,
        'newrecordv100_inner_home_crm_members_new','New_Record'
    );
    -- DLS20161015