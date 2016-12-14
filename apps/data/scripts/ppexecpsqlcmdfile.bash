SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
logexec="$SCRIPTDIR""log.bash"

myfnameforexec="$1";
mykatastima="$2";
if [ -z "${mykatastima}" ]; then
    mykatastima="ppkat";
fi
str="--Select mykatastima=$mykatastima--"
bash "$logexec" red "$str"
now=$(date +"%Y%m/%d %T.%N")
if [ -f "$myfnameforexec" ];
then
    str="--$now Start executing file $myfnameforexec--"
    bash "$logexec" green "$str"
    psql --set "mykatastima='$mykatastima'" -U postgres -d $MYDB <"$myfnameforexec" >> "$logfilename"
    now=$(date +"%Y%m/%d %T.%N")
    str="--$now End executing file $myfnameforexec--"
    bash "$logexec" green "$str"
else
    str="++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
    for i in `seq 1 10`;
        do
                str="$str""\n"
        done    
    str="$str""++$now+++++++++++++++++++Error File $myfnameforexec does not exist.+++++++++++++++++++++++++++++";
    str="$str""++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++";
    for i in `seq 1 10`;
        do
                str="$str""\n"
        done 
    bash "$logexec" red "$str"
fi