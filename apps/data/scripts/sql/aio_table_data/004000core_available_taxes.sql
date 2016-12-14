INSERT INTO core_available_taxes(id,myid,mykatastima,title,taxpercentage) VALUES 
(0,0,(SELECT mykatastimadefault
  FROM aab2badmin_basesettings),'0%',0);