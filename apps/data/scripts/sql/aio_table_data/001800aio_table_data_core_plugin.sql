INSERT INTO core_plugin(
                fkavailableplugin,blenabled,pluginname,pluginfirstkey)
        VALUES 
    (
        (SELECT id FROM core_available_plugin where pluginaliasname='fullcalendarv261'),
        1,
        'fullcalendarv261_js-my-fullcalendarv261','Full_Calendar'
    ),
    (
        (SELECT id FROM core_available_plugin where pluginaliasname='modalgeneralv100'),
        1, 
        'modalgeneralv100_modal_general','Modal_General'
    ),
    (   
        (SELECT id FROM core_available_plugin where pluginaliasname='outersidebarmenuv100'),
        1,
        'outersidebarmenuv100_outer_sidebar_menu','Outer_Sidebar_Menu'
    ),
    (
        (select id from core_available_plugin where   pluginaliasname='deleterecordv100'),
        1,
        'deleterecordv100_inner_home_crm_delete_record','Delete_Record'
    );

