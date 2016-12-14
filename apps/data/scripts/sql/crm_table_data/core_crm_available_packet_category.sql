INSERT INTO core_crm_available_packet_category(
            id,myid,mykatastima,title)
    VALUES (0,0,(SELECT mykatastimadefault
  FROM aab2badmin_basesettings),'Χωρίς Όνομα');
