SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
#export myparamsfile="$SCRIPTDIR""settings_devel.bash";
#commonparams=`$myparamsfile`;
#eval "$commonparams";
echo "export REMOTEPGPASSWORD='kalimera'";
echo "export LINUXREMOTEUSER='root'";
export REMOTEROOTPATH='/var/www/html/'
echo "export REMOTEROOTPATH='$REMOTEROOTPATH'";
export MYPROJECTNAME="$1"
echo "export MYREMOTEPROJECTPATH='"$REMOTEROOTPATH""$MYPROJECTNAME"'";
