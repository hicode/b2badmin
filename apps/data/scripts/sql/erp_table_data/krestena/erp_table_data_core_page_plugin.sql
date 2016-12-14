INSERT INTO core_page_plugin(mykatastima,fkpage,fkplugin) VALUES
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_paralaves'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_paralaves')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_paralaves'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_paralaves')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_paralaves'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_customers'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_customers')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_customers'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_customers')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_customers'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_metasiskevasia_proionta'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_metasiskevasia_proionta'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_my_items_metasiskevasia_proionta')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_metasiskevasia_proionta'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_metasiskevasia_antistixisi'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_metasiskevasia_antistixisi'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_my_items_metasiskevasia_antistixisi')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_metasiskevasia_antistixisi'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_apomiosi'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_apomiosi'),
        (select id from core_plugin where mykatastima='krestena' and  pluginname='pageheaderv100_inner_home_erp_my_items_apomiosi')
    ),
    ('krestena',
        (select id from core_page where mykatastima='krestena' and  pagename='inner_home_erp_my_items_apomiosi'),
        (select id from core_plugin where pluginname='outersidebarmenuv100_outer_sidebar_menu')
    );