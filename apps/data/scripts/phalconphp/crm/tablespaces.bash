SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
export myparamsfile="$1";
commonparams=`$myparamsfile`;
eval "$commonparams";


tablespaces_add (){
    SQLCOMMAND="ALTER TABLE "$1" SET TABLESPACE "$2";";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}

SQLCOMMAND="select baseexec('ALTER TABLE '||schemaname||'.'||tablename||' SET TABLESPACE "$tblspcname_crm";') from pg_tables where schemaname='"$MYSCHEMA"' and tablename like '%_crm_%';";
bash "$ppexecpsqlcmd" "$SQLCOMMAND"