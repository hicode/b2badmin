INSERT INTO core_crm_available_packet(
            myid,mykatastima,title,
            fkavailableservice,
            fkavailableduration,
            fktotaltimes,
            recprice)
    VALUES 
    (1,:mykatastima,'Γιόγκα 3μηνο',
            (select id from core_crm_available_service where mykatastima=:mykatastima and title='Γιόγκα'),
            (select id from core_crm_available_duration where mykatastima=:mykatastima and totalmonths=3),
            (select id from core_crm_available_total_times where mykatastima=:mykatastima and totaltimes=8),
            55),
    (2,:mykatastima,'Γιόγκα 6μηνο',
            (select id from core_crm_available_service where mykatastima=:mykatastima and title='Γιόγκα'),
            (select id from core_crm_available_duration where mykatastima=:mykatastima and totalmonths=6),
            (select id from core_crm_available_total_times where mykatastima=:mykatastima and totaltimes=8),
            100),
    (3,:mykatastima,'Πιλάτες 6μηνο',
            (select id from core_crm_available_service where mykatastima=:mykatastima and title='Πιλάτες'),
            (select id from core_crm_available_duration where mykatastima=:mykatastima and totalmonths=6),
            (select id from core_crm_available_total_times where mykatastima=:mykatastima and totaltimes=8),
            150),
    (4,:mykatastima,'Όργανα Ετήσιο',
            (select id from core_crm_available_service where mykatastima=:mykatastima and title='Όργανα'),
            (select id from core_crm_available_duration where mykatastima=:mykatastima and totalmonths=12),
            (select id from core_crm_available_total_times where mykatastima=:mykatastima and totaltimes=0),
            70),
    (5,:mykatastima,'Ζούμπα 4Mηνο',
            (select id from core_crm_available_service where mykatastima=:mykatastima and title='Ζούμπα'),
            (select id from core_crm_available_duration where mykatastima=:mykatastima and totalmonths=4),
            (select id from core_crm_available_total_times where mykatastima=:mykatastima and totaltimes=10),
            88);


