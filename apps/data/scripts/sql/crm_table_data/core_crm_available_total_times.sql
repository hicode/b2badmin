INSERT INTO core_crm_available_total_times(
            id,myid,mykatastima, totaltimes,title)
    VALUES (0,0,(SELECT mykatastimadefault
  FROM aab2badmin_basesettings), 0,'Χωρίς Πακέτο');

