INSERT INTO core_crm_available_service(
            id,myid,mykatastima,title, aliasname)
    VALUES (0,0,(SELECT mykatastimadefault
  FROM aab2badmin_basesettings),'Χωρίς Πακέτο', 'nocategory');

