SCRIPTDIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"/"

export MYPROJECTNAME=
export MYMETHOD=

export ppexecpsqlcmdfile="$SCRIPTDIR""ppexecpsqlcmdfile.bash";
export ppexecpsqlcmd="$SCRIPTDIR""ppexecpsqlcmd.bash";
export ppexecpsqlcmdfileNodb="$SCRIPTDIR""ppexecpsqlcmdfileNodb.bash";
export ppexecpsqlcmdNodb="$SCRIPTDIR""ppexecpsqlcmdNodb.bash";
export ppexecpsqlfilesindir="$SCRIPTDIR""ppexecpsqlfilesindir.bash";
export logexecfilename="$SCRIPTDIR""log.bash";
export logfilename="$SCRIPTDIR""b2badminlog.log";
touch "$logfilename";




usage()
{
cat << EOF
usage: $0 options

This script creates b2badmin project 

OPTIONS:
    -h Usage
    -p MYPROJECTNAME
    -m MYMETHOD (devel,live)
EOF
}





while getopts “h:p:m:” OPTION
do
     case $OPTION in
        p)
             MYPROJECTNAME=$OPTARG
             ;;
        m)
             MYMETHOD=$OPTARG
             ;;
        h)
             usage
             exit
             ;;
        ?)
             usage
             exit
             ;;
     esac
done


if [[ -z "$MYPROJECTNAME" ]]
then
    echo "You must use option -p for project name";
    usage
    exit 1;
elif [[ -z "$MYMETHOD" ]]
then
    echo "You must use option -m for method name (devel,live)";
    usage
    exit 1;
fi



if [ "$MYMETHOD" = "devel" ]; then
    echo "">"$logfilename";
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export PGPASSWORD="$LOCALPGPASSWORD";
fi
if [ "$MYMETHOD" = "live" ]; then
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export myparamsfile="$SCRIPTDIR""settings_live.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    #export MYREMOTEPROJECTPATH="$REMOTEROOTPATH""$MYPROJECTNAME";

    export PGPASSWORD="$REMOTEPGPASSWORD";
fi

if [ "$MYMETHOD" = "update" ]; then
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export myparamsfile="$SCRIPTDIR""settings_live.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    #export MYREMOTEPROJECTPATH="$REMOTEROOTPATH""$MYPROJECTNAME";

    export PGPASSWORD="$REMOTEPGPASSWORD";
fi

if [ "$MYMETHOD" = "update_local" ]; then
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export PGPASSWORD="$LOCALPGPASSWORD";
fi



if [ "$MYMETHOD" = "live_to_remote_server_update" ]; then
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export myparamsfile="$SCRIPTDIR""settings_live.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    #export MYREMOTEPROJECTPATH="/usr/share/pp/$MYPROJECTNAME";

    export PGPASSWORD="$REMOTEPGPASSWORD";
fi

if [ "$MYMETHOD" = "live_to_remote_server" ]; then
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export myparamsfile="$SCRIPTDIR""settings_live.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    #export MYREMOTEPROJECTPATH="/usr/share/pp/$MYPROJECTNAME";

    export PGPASSWORD="$REMOTEPGPASSWORD";
fi

if [ "$MYMETHOD" = "live_to_remote_laptop" ]; then
    export myparamsfile="$SCRIPTDIR""settings_devel.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    export myparamsfile="$SCRIPTDIR""settings_live_laptop.bash $MYPROJECTNAME";
    commonparams=`$myparamsfile`;
    eval "$commonparams";

    #export MYREMOTEPROJECTPATH="/usr/share/pp/$MYPROJECTNAME";

    export PGPASSWORD="$REMOTEPGPASSWORD";
fi


export mypath="$SCRIPTDIR ";
export mysqlpath="$SCRIPTDIR ""../sql/";

if [ "$MYMETHOD" = "devel" ]; then

    

    


    bash "$logexecfilename" "yellow" "WILL EXECUTE aio_create base scripts"

    bash "$mypath""b2badmin/b2badmin_files.bash";

    bash "$mypath""b2badmin/b2badmin_create.bash";

    bash "$mypath""b2badmin/b2badmin_tablespaces.bash";
    bash "$mypath""b2badmin/b2badmin_table_data.bash";



    bash "$mypath""b2badmin/b2badmin_create_pp.bash";
    bash "$mypath""b2badmin/b2badmin_table_data_pp.bash";

    bash "$mypath""b2badmin/b2badmin_create_dl.bash";
    bash "$mypath""b2badmin/b2badmin_table_data_dl.bash";


    if [ "$MYBLCRMCREATE" = "1" ]; then
        bash "$mypath""crm/base.bash" "$myparamsfile";
    fi

    if [ "$MYBLCRMGYMCREATE" = "1" ]; then
        bash "$mypath""gym/base.bash" "$myparamsfile";
    fi

    if [ "$MYBLCRMHAIRCREATE" = "1" ]; then
        bash "$mypath""hair/base.bash" "$myparamsfile";
    fi

    if [ "$MYBLERPVASILOPOULOSCREATE" = "1" ]; then
        bash "$mypath""erp/erp_base.bash" "$myparamsfile";
    fi


    bash "$mypath""b2badmin/b2badmin_final.bash";

    mydbexportpath="$myappspath"data/dbexport/;
    pg_dump -U postgres -d $MYDB -n "$MYSCHEMA" > "$mydbexportpath""$MYSCHEMA".sql

fi


if [ "$MYMETHOD" = "live" ]; then
    bash "$mypath"b2badmin_live"/"b2badmin_live.bash

fi

if [ "$MYMETHOD" = "update" ]; then
    bash "$mypath"b2badmin_update"/"b2badmin_update.bash

fi

if [ "$MYMETHOD" = "update_local" ]; then
    bash "$mypath"b2badmin_update"/"b2badmin_update_local.bash

fi

if [ "$MYMETHOD" = "live_to_remote_server" ]; then
    bash "$logexecfilename" yellow "Executing Remote Scripts to Live Server"

    cmd="$mypath"b2badmin_remote"/"b2badmin_remote_tablespaces.bash;
    bash "$logexecfilename" yellow "Executing ""$cmd"
    bash "$cmd";

    cmd="$mypath"b2badmin_remote"/"b2badmin_remote_create.bash;
    bash "$logexecfilename" yellow "Executing ""$cmd"
    bash "$cmd";

    mydbexportpath="$MYREMOTEPROJECTPATH"/apps/data/dbexport/
    #pg_dump -U postgres -d b2bdb -n "$MYSCHEMA" > "$mydbexportpath""$MYSCHEMA".sql
    tar -xf "$mydbexportpath""$MYSCHEMA".sql.tar.gz -C "$mydbexportpath"
    bash "$ppexecpsqlcmdfile" "$mydbexportpath""$MYSCHEMA".sql;
    
    bash "$logexecfilename" yellow "Removing Temporary Files"
    rm -rf "$mydbexportpath""$MYSCHEMA".sql
    rm -rf "$MYREMOTEPROJECTPATH"/public/tmp/*

fi

if [ "$MYMETHOD" = "live_to_remote_server_update" ]; then
    bash "$logexecfilename" yellow "Executing Remote Scripts to Live Server Update"

    cmd="$mypath"b2badmin_remote_update"/"b2badmin_remote_update.bash;
    bash "$logexecfilename" yellow "Executing ""$cmd"
    bash "$cmd";

fi

if [ "$MYMETHOD" = "live_to_remote_laptop" ]; then
    bash "$logexecfilename" yellow "Executing Remote Scripts to Laptop"

    cmd="$mypath"b2badmin_remote"/"b2badmin_remote_tablespaces.bash;
    bash "$logexecfilename" yellow "Executing ""$cmd"
    bash "$cmd";

    cmd="$mypath"b2badmin_remote"/"b2badmin_remote_create.bash;
    bash "$logexecfilename" yellow "Executing ""$cmd"
    bash "$cmd";

    mydbexportpath="$MYREMOTEPROJECTPATH"/apps/data/dbexport/
    #pg_dump -U postgres -d b2bdb -n "$MYSCHEMA" > "$mydbexportpath""$MYSCHEMA".sql
    tar -xf "$mydbexportpath""$MYSCHEMA".sql.tar.gz -C "$mydbexportpath"
    bash "$ppexecpsqlcmdfile" "$mydbexportpath""$MYSCHEMA".sql;
    
    bash "$logexecfilename" yellow "Removing Temporary Files"
    rm -rf "$mydbexportpath""$MYSCHEMA".sql
    rm -rf "$MYREMOTEPROJECTPATH"/public/tmp/*

fi

bash "$logexecfilename" green "the operation has completed succesfully"