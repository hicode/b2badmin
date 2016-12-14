tablespaces_create() {
    mkdir -p "$tblspcrootdir""$1"
    chown postgres:postgres "$tblspcrootdir""$1"
    SQLCOMMAND="CREATE TABLESPACE "$1" LOCATION '"$tblspcrootdir""$1"';";
    bash "$ppexecpsqlcmdNodb" "$SQLCOMMAND"
}

tablespaces_create "$tblspcname_base";
tablespaces_create "$tblspcname_crm";
tablespaces_create "$tblspcname_erp";