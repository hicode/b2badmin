bash "$logexecfilename" "yellow" "WILL EXECUTE pp data scripts"
mysqltmppath="$mysqlpath""pp/data/";
bash "$ppexecpsqlfilesindir" "$mysqltmppath";