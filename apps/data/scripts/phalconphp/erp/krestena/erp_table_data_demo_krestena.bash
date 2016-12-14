export myparamsfile="$1";
commonparams=`$myparamsfile`;
eval "$commonparams";

erp_scripts_demo_data() {

    mykatastima=$1;
    myyear=$2;
    
            




#Demo Data

bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_items_metasiskevasia_antistixisi(
            mykatastima, mybarcodefrom,  
            mybarcodeto, mymasteritemto, myhopeto, myqtyto, mymonadapolisisto, mytimikostousto, mytimipolisisto,  mydescto)
     
(SELECT mykatastima, mybarcode,  
                    mybarcode||'new',mymasteritem||'new',myhope||'new',6,mymonadapolisis,(mytimikostous::numeric)/6,1,'ΦΥΣΙΚΟ ΕΠΙΤ.ΝΕΡΟ ΣΕΛΗΝΑΡΙ 1.5LT'
  FROM core_erp_items where mybarcode='41207260' limit 1)";

bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_items_metasiskevasia_antistixisi(
            mykatastima, mybarcodefrom,  
            mybarcodeto, mymasteritemto, myhopeto, myqtyto, mymonadapolisisto, mytimikostousto, mytimipolisisto,  mydescto)
     
(SELECT mykatastima, mybarcode,  
                    mybarcode||'new',mymasteritem||'new',myhope||'new',6,mymonadapolisis,(mytimikostous::numeric)/6,1,'ΦΥΣΙΚΟ ΜΕΤΑΛ.ΝΕΡΟ ZAROS 1.5LT'
  FROM core_erp_items where mybarcode='41205563' limit 1)";


    bash "$ppexecpsqlcmd" "select  mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_erp_my_items_metasiskevasia_antistixisi')";

}

erp_scripts_demo_data krestena 2016