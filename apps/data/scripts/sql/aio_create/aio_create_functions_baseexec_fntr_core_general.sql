DROP FUNCTION IF EXISTS baseexec(text);
CREATE FUNCTION baseexec(text) returns text language plpgsql volatile
  AS $f$
    BEGIN
      EXECUTE $1;
      RETURN $1;
    END;
$f$;

ALTER FUNCTION baseexec( text) OWNER TO postgres;


CREATE OR REPLACE FUNCTION fntr_core_general()
  RETURNS trigger AS
$BODY$
DECLARE
myTG_TABLE_SCHEMA text;
myTG_TABLE_NAME text;
myid numeric;
myremarks text;
mycore_tabletablename text;
mycore_fieldfktable numeric;
mycore_fieldfieldname text;
mycore_fieldfkfieldtype numeric;
tbls_gen_prefix text;
tmp text;
BEGIN
	myTG_TABLE_SCHEMA:=TG_TABLE_SCHEMA;
	myTG_TABLE_NAME:=TG_TABLE_NAME;
	myremarks=new.remarks;
	myid:=new.id;
        execute 'select tblgenprefix from aab2badmin_basesettings' into tbls_gen_prefix;
	if lower(TG_TABLE_NAME)='core_table' then
		mycore_tabletablename :=new.tablename;
		new.dbtablename :=tbls_gen_prefix||coalesce(myid::text,'df');
	elsif lower(TG_TABLE_NAME)='core_field'  then
		mycore_fieldfktable:=new.fktable;
		mycore_fieldfieldname=new.fieldname;
		mycore_fieldfkfieldtype:=new.fkfieldtype;
		new.dbfieldname :='col'||coalesce(myid::text,'df');
	end if;
	if TG_WHEN='AFTER' then
		perform basecreatetblcol(myTG_TABLE_SCHEMA ,myTG_TABLE_NAME , myid, myremarks ,mycore_tabletablename ,mycore_fieldfktable ,mycore_fieldfieldname , mycore_fieldfkfieldtype, ' ' ) ;
		perform basecreatetblcol(myTG_TABLE_SCHEMA ,myTG_TABLE_NAME , myid, myremarks ,mycore_tabletablename ,mycore_fieldfktable ,mycore_fieldfieldname , mycore_fieldfkfieldtype, 'fe' ) ;
                perform basecreatetblcol(myTG_TABLE_SCHEMA ,myTG_TABLE_NAME , myid, myremarks ,mycore_tabletablename ,mycore_fieldfktable ,mycore_fieldfieldname , mycore_fieldfkfieldtype, 'update' ) ;
        end if;
	return new;
end;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

select baseexec('ALTER FUNCTION '||schemaname||'.fntr_core_general() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.fntr_core_general() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;
