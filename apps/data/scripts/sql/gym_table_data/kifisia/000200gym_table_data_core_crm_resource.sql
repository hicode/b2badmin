delete from core_crm_resource 
where mykatastima=:mykatastima;

INSERT INTO core_crm_resource(myid,mykatastima,title) VALUES 
(1,:mykatastima,'Res1'),
(2,:mykatastima,'Res2'),
(3,:mykatastima,'Res3'),
(4,:mykatastima,'Res4'),
(5,:mykatastima,'Res5'),
(6,:mykatastima,'Res6'),
(7,:mykatastima,'Res7'),
(8,:mykatastima,'Res8');
