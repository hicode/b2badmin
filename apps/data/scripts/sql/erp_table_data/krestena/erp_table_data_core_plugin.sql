INSERT INTO core_plugin(
            mykatastima,
            fkavailableplugin, 
            blenabled,
            pluginname,
            pluginfirstkey)
    VALUES 
    ('krestena',(select id from core_available_plugin where pluginaliasname='pageheaderv100'),
            1,
            'pageheaderv100_inner_home_erp_paralaves','PageHelperHeader'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='datatablesv11010'),
            1,
            'datatablesv11010_inner_home_erp_paralaves','DataTableAjax'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='pageheaderv100'),
            1,
            'pageheaderv100_inner_home_erp_customers','PageHelperHeader'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='datatablesv11010'),
            1,
            'datatablesv11010_inner_home_erp_customers','DataTableAjax'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='pageheaderv100'),
            1,
            'pageheaderv100_inner_home_erp_my_items_metasiskevasia_antistixisi','PageHelperHeader'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='datatablesv11010'),
            1,
            'datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi','DataTableAjax'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='pageheaderv100'),
            1,
            'pageheaderv100_inner_home_erp_my_items_metasiskevasia_proionta','PageHelperHeader'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='datatablesv11010'),
            1,
            'datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta','DataTableAjax'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='pageheaderv100'),
            1,
            'pageheaderv100_inner_home_erp_my_items_apomiosi','PageHelperHeader'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='datatablesv11010'),
            1,
            'datatablesv11010_inner_home_erp_my_items_apomiosi','DataTableAjax'
    ),
    ('krestena',(select id from core_available_plugin where pluginaliasname='pageheaderv100'),
        1,
        'pageheaderv100_inner_home_erp_index','PageHelperHeader');