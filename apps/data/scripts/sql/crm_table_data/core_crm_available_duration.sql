INSERT INTO core_crm_available_duration(
            id,myid,mykatastima,title,  ordering)
    VALUES (0,0,(SELECT mykatastimadefault
  FROM aab2badmin_basesettings),'Χωρίς Διάρκεια',1);