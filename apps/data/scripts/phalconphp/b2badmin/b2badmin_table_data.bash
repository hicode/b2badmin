bash "$logexecfilename" "yellow" "WILL EXECUTE aio scripts_data"
mysqltmppath="$mysqlpath""aio_table_data/";
bash "$ppexecpsqlfilesindir" "$mysqltmppath";