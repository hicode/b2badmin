INSERT INTO core_page(mykatastima,pagename, fkroute) VALUES 
('krestena','inner_home_erp_paralaves',(select id from core_route where routename='b2b-lng-admin-dynhelperpagehelperpage')),
('krestena','inner_home_erp_customers',(select id from core_route where routename='b2b-lng-admin-dynhelperpagehelperpage')),
('krestena','inner_home_erp_my_items_metasiskevasia_antistixisi',(select id from core_route where routename='b2b-lng-admin-dynhelperpagehelperpage')),
('krestena','inner_home_erp_my_items_metasiskevasia_proionta',(select id from core_route where routename='b2b-lng-admin-dynhelperpagehelperpage')),
('krestena','inner_home_erp_my_items_apomiosi',(select id from core_route where routename='b2b-lng-admin-dynhelperpagehelperpage')),
('krestena','inner_home_erp_index',(select id from core_route where routename='b2b-lng-admin-dynhelperpagehelperpage'));
