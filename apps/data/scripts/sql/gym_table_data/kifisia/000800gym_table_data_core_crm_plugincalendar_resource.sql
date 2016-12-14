delete from core_crm_plugincalendar_resource 
where mykatastima=:mykatastima;

INSERT INTO core_crm_plugincalendar_resource(myid,mykatastima,title, fkplugincalendar, fkresource, blenabled, ordering, generalcolour, textcolour) VALUES 
(1,:mykatastima,'Αίθουσα 1',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res1'),1,1,'#2b89a8','#000000'),
(2,:mykatastima,'Αίθουσα 2',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res2'),1,2,'#2b89a8','#000000'),
(3,:mykatastima,'Αίθουσα 3',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res3'),1,3,'#2b89a8','#000000'),
(4,:mykatastima,'Αίθουσα 4',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res4'),1,4,'#2b89a8','#000000'),
(5,:mykatastima,'Αίθουσα 5',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res5'),0,5,'#2b89a8','#000000'),
(6,:mykatastima,'Αίθουσα 6',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res6'),0,6,'#2b89a8','#000000'),
(7,:mykatastima,'Αίθουσα 7',(select id from core_plugin where mykatastima=:mykatastima and pluginname='fullcalendarv261'),(select id from core_crm_resource where mykatastima=:mykatastima and title='Res7'),0,7,'#2b89a8','#000000');
