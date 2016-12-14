makeconstraints (){
    SQLCOMMAND="select basemakeconstraints();";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}

SQLCOMMAND="CREATE ROLE "$MYDBUSER" LOGIN PASSWORD '"$MYDBPASS"' NOSUPERUSER INHERIT NOCREATEDB NOCREATEROLE NOREPLICATION;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="ALTER USER "$MYDBUSER" WITH PASSWORD '"$MYDBPASS"';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="CREATE DATABASE "$MYDB" WITH OWNER = "$MYDBUSER" ENCODING = 'UTF8' TABLESPACE = pg_default LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8' CONNECTION LIMIT = -1;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="CREATE EXTENSION pgcrypto;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="CREATE ROLE ppb2badminusr LOGIN PASSWORD 'ppb2badminusr1975' SUPERUSER NOINHERIT VALID UNTIL 'infinity';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="ALTER USER ppb2badminusr WITH PASSWORD 'ppb2badminusr1975';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"



SQLCOMMAND="CREATE EXTENSION dblink;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

if [ "$MYRECREATESCHEMA" = "1" ]; then

    SQLCOMMAND="DROP SCHEMA IF EXISTS "$MYSCHEMA" CASCADE;";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
fi

SQLCOMMAND="CREATE SCHEMA IF NOT EXISTS "$MYSCHEMA";";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="CREATE SEQUENCE ordering_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="ALTER TABLE ordering_seq OWNER TO "$MYDBUSER";";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_create/aio_create_table_data_aab2badmin_basesettings.sql

SQLCOMMAND="INSERT INTO aab2badmin_basesettings(id,schemaname, dbusername, tblcoreprefix, tblgenprefix, viewgenprefix, colgenprefix,mykatastimadefault) VALUES (1,'"$MYSCHEMA"', '"$MYDBUSER"', 'core_', 'tbl', 'view', 'col','ppkat');";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"


SQLCOMMAND="ALTER table aab2badmin_basesettings OWNER TO "$MYDBUSER";";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"


bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_create/aio_create_functions_baseexec_fntr_core_general.sql

SQLCOMMAND="ALTER FUNCTION baseexec( text) SET search_path="$MYSCHEMA", pg_catalog;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_create/aio_create_tables.sql



bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_create/aio_create_functions.sql


SQLCOMMAND="ALTER FUNCTION mvupdatedependends( text,text) SET search_path="$MYSCHEMA", pg_catalog;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"

SQLCOMMAND="ALTER FUNCTION mvupdatedeallpendends() SET search_path="$MYSCHEMA", pg_catalog;";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"


makeconstraints

SQLCOMMAND="select baseexec('DROP VIEW "$MYSCHEMA".' || table_name || ' cascade;') FROM information_schema.views WHERE table_schema='"$MYSCHEMA"'";
bash "$ppexecpsqlcmd" "$SQLCOMMAND" 

bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_create/aio_create_views.sql
bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_create/aio_create_views_materialized.sql