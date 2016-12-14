INSERT INTO core_page(mykatastima,pagename, fkroute) VALUES 
(:mykatastima,'inner_home_index',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_details', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_energa',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_energa_details', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_ipoloipo',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_ipoloipo_details', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_scexpireinmonth',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_scexpireinmonth_details', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_all', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_payments', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_calendar',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_event_modal_contents',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_event_modal_add_members', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_event_modal_quick_tpls', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_trainers',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),

-- DLS20161019

(:mykatastima,'inner_home_crm_service_contracts_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),

-- DLS20161031
(:mykatastima,'inner_home_crm_packets',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_packets_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
-- DLE20161031

(:mykatastima,'inner_home_crm_members_contracts_energa_all', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_energa_visits_open_all', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_visits_done_all', (select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),

-- DLS20161107
(:mykatastima,'js-dl-pdf',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_services',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_services_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_receipts',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_contracts_payments_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_income_expenses',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_income_expenses_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_pdf',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
-- DLE20161107

(:mykatastima,'inner_home_crm_members_ipoloipa',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
(:mykatastima,'inner_home_crm_members_lixiprothesma',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),

-- DLS20161111
(:mykatastima,'inner_home_crm_event_modal_contents_edit',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),
-- DLE20161111

(:mykatastima,'inner_home_crm_trainers_details',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage')),

-- DLS20161117
(:mykatastima,'inner_home_crm_trainers_new',(select id from core_route where   routename='b2b-lng-admin-dynhelperpagehelperpage'));
-- DLE20161117