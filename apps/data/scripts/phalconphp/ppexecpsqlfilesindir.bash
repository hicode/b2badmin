SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
mydir="$1"
mykatastima="$2"
bash "$logexecfilename" "yellow" "---------------------------------------------------"
bash "$logexecfilename" "yellow" "--------------WILL EXECUTE files in Directory $1"
bash "$logexecfilename" "yellow" "---------------------------------------------------"

for myfname in $(find "$mydir" -maxdepth 1 -name '*.sql' | sort -n )
do
        bash "$ppexecpsqlcmdfile" "$myfname" "$mykatastima"
done   