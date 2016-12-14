bash "$logexecfilename" "yellow" "WILL EXECUTE dl data scripts"
mysqltmppath="$mysqlpath""dl/data/";
bash "$ppexecpsqlfilesindir" "$mysqltmppath";