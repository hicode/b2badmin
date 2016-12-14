INSERT INTO core_available_payment_type(id,myid,mykatastima,title,aliasname) VALUES 
(0,0,(SELECT mykatastimadefault
  FROM aab2badmin_basesettings),'Χωρίς Τίτλο','notitle');