    myscriptspathlocalupdate="$myappspath"data/scripts/b2badmin_remote_update/
    bash "$ppexecpsqlfilesindir" "$myscriptspathlocalupdate";
    for mykatastima in $(ls -l "$myscriptspathlocalupdate" | grep "^d" | awk -F" " '{print $9}' )
    do
        bash "$ppexecpsqlfilesindir" "$myscriptspathlocalupdate"$mykatastima "$mykatastima"
    done
    bash "$ppexecpsqlcmdfile" "$myappspath"data/scripts/sql/aio_table_data_end_update.sql