
INSERT INTO core_crm_available_duration(
            myid,mykatastima,title, totalmonths, ordering)
    VALUES (1,:mykatastima,'Μήνας', 1, 10),
            (5,:mykatastima,'2Μηνο', 2, 5),
            (10,:mykatastima,'3Mηνο', 3, 20),
            (20,:mykatastima,'4Mηνο', 4, 30),
            (30,:mykatastima,'6Mηνο', 6, 40),
            (40,:mykatastima,'8Mηνο', 8, 50),
            (50,:mykatastima,'Ετήσιο', 12, 60);

INSERT INTO core_crm_available_duration(
            myid,mykatastima,title, totalweeks, ordering)
    VALUES (1000,:mykatastima,'Εβδομαδιαίο', 1, 1000);

INSERT INTO core_crm_available_duration(
            myid,mykatastima,title, totalminutes, ordering)
    VALUES 
        (2000,:mykatastima,'30''', 30, 2000),
        (2010,:mykatastima,'55''', 55, 2010),
        (2020,:mykatastima,'60''', 60, 2020);

INSERT INTO core_crm_available_duration(
            myid,mykatastima,title, totaldays, ordering)
    VALUES (3000,:mykatastima,'Ημερήσιο', 1, 3000);


