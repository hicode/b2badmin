SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"
#export myparamsfile="$SCRIPTDIR""settings_devel.bash";
#commonparams=`$myparamsfile`;
#eval "$commonparams";
echo "export REMOTEPGPASSWORD='kalimera1234567890'";
echo "export LINUXREMOTEUSER='root'";
echo "export LINUXSERVERIPORNAME='telecon-vps1'";
export REMOTEROOTPATH='/usr/share/pp/'
echo "export REMOTEROOTPATH='$REMOTEROOTPATH'";
export MYPROJECTNAME="$1"
export MYREMOTEPROJECTPATH="$REMOTEROOTPATH""$MYPROJECTNAME";
echo "export MYREMOTEPROJECTPATH='"$MYREMOTEPROJECTPATH"'";
echo "export MYREMOTEAPPSPATH='"$MYREMOTEPROJECTPATH"/apps/'";
