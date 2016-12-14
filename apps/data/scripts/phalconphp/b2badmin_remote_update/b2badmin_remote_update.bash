myscriptspathremoteupdate="$MYREMOTEAPPSPATH"data/scripts/b2badmin_remote_update/
bash "$ppexecpsqlfilesindir" "$myscriptspathremoteupdate";
for mykatastima in $(ls -l "$myscriptspathremoteupdate" | grep "^d" | awk -F" " '{print $9}' )
do
    bash "$ppexecpsqlfilesindir" "$myscriptspathremoteupdate"$mykatastima "$mykatastima"
done

    bash "$ppexecpsqlcmdfile" "$MYREMOTEAPPSPATH"data/scripts/sql/aio_table_data_end_update.sql