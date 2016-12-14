SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
logexec="$SCRIPTDIR""log.bash"

mycmdforexec="$1";
RED='\033[0;31m'
GREEN='\033[0;32m'
NC='\033[0m' # No Color
now=$(date +"%Y%m/%d %T.%N")
str="--$now Start executing command $mycmdforexec--"
bash "$logexec" green "$str"

psql -U postgres -d $MYDB -c "$mycmdforexec" >> "$logfilename"
now=$(date +"%Y%m/%d %T.%N")
str="--$now End executing command $mycmdforexec--"
bash "$logexec" green "$str"