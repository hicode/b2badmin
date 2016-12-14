makeconstraints (){
    SQLCOMMAND="select basemakeconstraints();";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}
bash "$logexecfilename" "yellow" "WILL EXECUTE dl create scripts"
mysqltmppath="$mysqlpath""dl/create/";
bash "$ppexecpsqlfilesindir" "$mysqltmppath";

makeconstraints