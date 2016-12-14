makeconstraints (){
    SQLCOMMAND="select basemakeconstraints();";
    bash "$ppexecpsqlcmd" "$SQLCOMMAND"
}
bash "$logexecfilename" "yellow" "WILL EXECUTE pp create scripts"
mysqltmppath="$mysqlpath""pp/create/";
bash "$ppexecpsqlfilesindir" "$mysqltmppath";

makeconstraints