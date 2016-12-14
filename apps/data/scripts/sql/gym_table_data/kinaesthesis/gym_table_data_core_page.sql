INSERT INTO core_page(mykatastima,pagename, fkroute) VALUES 
(:mykatastima,'inner_home_index',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_details', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_payments', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_calendar',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_event_modal_contents',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_event_modal_add_members', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_event_modal_quick_tpls', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_trainers',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),

-- DLS20161019

(:mykatastima,'inner_home_crm_service_contracts_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage'));
-- DLE20161019