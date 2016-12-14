CREATE TABLE aab2badmin_basesettings 
(
    id bigint,
   fklng bigint default 0,
   schemaname text, 
   dbusername text,
   tblcoreprefix text,
   tblgenprefix text,
   viewgenprefix text,
   colgenprefix text,
    mykatastimadefault text
) 
WITH (
  OIDS = FALSE
)
;

ALTER TABLE aab2badmin_basesettings ADD PRIMARY KEY (id);