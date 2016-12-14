INSERT INTO core_crm_trainer(mykatastima,fkspeciality,fname,lname,telmobile,telland,birthday,email) VALUES
(:mykatastima,(select id from core_crm_available_service where mykatastima=:mykatastima and aliasname='zoumpa'),'Name 1','Lastname 1','','2152288332',to_timestamp(null,'DD-MM-YYYY'),''),
(:mykatastima,(select id from core_crm_available_service where mykatastima=:mykatastima and aliasname='giogka'),'Name 2','Lastname 2','6992122871','2115522663',to_timestamp(null,'DD-MM-YYYY'),''),
(:mykatastima,(select id from core_crm_available_service where mykatastima=:mykatastima and aliasname='pilates'),'Name 3','Lastname 3','6999999111','2130989882',to_timestamp(null,'DD-MM-YYYY'),''),
(:mykatastima,(select id from core_crm_available_service where mykatastima=:mykatastima and aliasname='karate'),'Name 4','Lastname 4','69478782217','2109922891',to_timestamp(null,'DD-MM-YYYY'),'');

