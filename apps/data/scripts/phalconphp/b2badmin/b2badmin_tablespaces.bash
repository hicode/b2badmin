tablespaces_create() {
    mkdir -p "$tblspcrootdir""$1"
    chown postgres:postgres "$tblspcrootdir""$1"
    SQLCOMMAND="CREATE TABLESPACE "$1" LOCATION '"$tblspcrootdir""$1"';";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}

tablespaces_create "$tblspcname_base";
tablespaces_create "$tblspcname_crm";
tablespaces_create "$tblspcname_erp";

tablespaces_add (){
    SQLCOMMAND="ALTER TABLE "$1" SET TABLESPACE "$2";";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}


SQLCOMMAND="select baseexec('ALTER TABLE '||schemaname||'.'||tablename||' SET TABLESPACE "$tblspcname_base";') from pg_tables where schemaname='"$MYSCHEMA"' and tablename  not like '%_crm_%' and tablename not like '%_erp_%';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND" > /dev/null
