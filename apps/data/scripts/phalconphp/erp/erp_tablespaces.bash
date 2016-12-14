SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
export myparamsfile="$1";
commonparams=`$myparamsfile`;
eval "$commonparams";


tablespaces_add (){
    SQLCOMMAND="ALTER TABLE "$1" SET TABLESPACE "$2";";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}

SQLCOMMAND="select baseexec('ALTER TABLE '||schemaname||'.'||tablename||' SET TABLESPACE "$tblspcname_erp";') from pg_tables where schemaname='"$MYSCHEMA"' and tablename like '%_erp_%';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"