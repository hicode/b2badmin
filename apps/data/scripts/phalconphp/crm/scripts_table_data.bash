SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
export myparamsfile="$1";
commonparams=`$myparamsfile`;
eval "$commonparams";
export mypath="$SCRIPTDIR ";
export mysqlpath="$SCRIPTDIR ""../../sql/";

scripts () {

    bash "$logexecfilename" "yellow" "WILL EXECUTE general crm scripts data";
    mysqltmppath="$mysqlpath""crm_table_data/";
    bash "$ppexecpsqlfilesindir" "$mysqltmppath"    
}

scripts