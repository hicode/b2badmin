SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
export myparamsfile="$1";
commonparams=`$myparamsfile`;
eval "$commonparams";
export mypath="$SCRIPTDIR ";
export mysqlpath="$SCRIPTDIR ""../../sql/";

bash "$mypath""scripts_create.bash" "$myparamsfile";
bash "$mypath""tablespaces.bash" "$myparamsfile";
bash "$mypath""scripts_table_data.bash" "$myparamsfile";