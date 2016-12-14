export myparamsfile="$1";
commonparams=`$myparamsfile`;
eval "$commonparams";
erp_scripts_data() {

    mykatastima=$1;
    myyear=$2;
    mypatherpvasilopouloskatastima="$myerprootdatapathvasilopoulos"$mykatastima"/";
    mypatherpvasilopouloskatastimastr="$mypatherpvasilopouloskatastima""STR/";
    mypatherpvasilopoulos="$mypatherpvasilopouloskatastima"$myyear"/";
    mytmpfile="$mypatherpvasilopouloskatastima"pptmp;

    for myfname in $(find "$mypatherpvasilopoulos" -name '*.TXT' )
        do 
            myiconvname="$myfname"".iconv";
            if [ -f "$myiconvname" ]
            then
                    echo "File found $myiconvname"
            else
                    iconv -s -f WINDOWS-1253 -t UTF8 -o "$myiconvname" "$myfname";
                    sed -i '$d' "$myiconvname";
            fi        
    done

    for myfname in $(find "$mypatherpvasilopouloskatastimastr" -name 'STR*.*' -not -name "*.iconv*" )
        do 
            myiconvname="$myfname"".iconv";
            if [ -f "$myiconvname" ]
            then
                    echo "File found $myiconvname"
            else
                    iconv -s -f WINDOWS-1253 -t UTF8 -o "$myiconvname" "$myfname";
                    sed -i '$d' "$myiconvname";
            fi        
    done

    echo "">"$mytmpfile";
    domaterializedview=0;
    myfilename='STR*.*';
    for myfname in $(find "$mypatherpvasilopouloskatastimastr" -name "$myfilename" -not -name "*.iconv*")
        do 
            myfields="mymd5,mykatastima,myyear, mydateoffpar,  mycustomercode,  myitemcode,  mydescription,  myinvoiceqty,  mynetvalue,  myvatvalue,  mydocumenttype,  mydocumentprefix,  mydocumentnumber,  myrefyear ,  myreftype ,  myrefprefix,  myrefnumber ,  myvatcode ,  myunitofmeasure";
            myfnamebasename=`basename $myfname`;
            mymd5=`md5sum "$myfname"`;
            myiconvname="$myfname"".iconv";
            myiconvsqlname="$myiconvname"".iconv.sql";
            totfound=`bash "$ppexecpsqlcmd" "select count(mymd5) from core_erp_my_md5_filename where mymd5='$mymd5' and myfilename='$myfnamebasename' group by mymd5" -U postgres | wc -l`;
            if [ $totfound -eq 5 ]; then
                echo "Records found for $mymd5";
            else
                bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_md5_filename(mymd5,myfilename) values ('$mymd5','$myfnamebasename');" -U postgres
                domaterializedview=1;
                echo "INSERT INTO core_erp_str_tmp($myfields) VALUES">"$myiconvsqlname"

                awk -v FIELDWIDTHS='6 8 10 15 35 15 15 15 3 4 15 4 3 4 15 5 30' -v mymd5="$mymd5" -v mykatastima="$mykatastima" -v myyear="$myyear" -v OFS='\t' '
                    { if (NR!=1) {printf ","};gsub("\x27"," ");printf "(\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27)\n",mymd5,mykatastima,myyear,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17; }
                ' "$myiconvname" >> "$myiconvsqlname"

                echo ";">>"$myiconvsqlname"

                bash "$ppexecpsqlcmdfile" "$myiconvsqlname"
            fi
    done
    
    if [ $domaterializedview -eq 1 ]; then
        echo "UPDATE core_erp_str_tmp
          SET 
            mymd5=RTRIM(LTRIM(mymd5)), 
            mykatastima=RTRIM(LTRIM(mykatastima)), 
            myyear=RTRIM(LTRIM(myyear)), 
            mydateoffpar=RTRIM(LTRIM(mydateoffpar)), 
            mycustomercode=RTRIM(LTRIM(mycustomercode)),                     
            myitemcode=RTRIM(LTRIM(myitemcode)),                     
            mydescription=RTRIM(LTRIM(mydescription)),                    
            myinvoiceqty=RTRIM(LTRIM(myinvoiceqty)),                    
            mynetvalue=RTRIM(LTRIM(mynetvalue)), 
            myvatvalue=RTRIM(LTRIM(myvatvalue)), 
            mydocumenttype=RTRIM(LTRIM(mydocumenttype)), 
            mydocumentprefix=RTRIM(LTRIM(mydocumentprefix)), 
            mydocumentnumber=RTRIM(LTRIM(mydocumentnumber)), 
            myrefyear=RTRIM(LTRIM(myrefyear)), 
            myreftype=RTRIM(LTRIM(myreftype)), 
            myrefprefix=RTRIM(LTRIM(myrefprefix)), 
            myrefnumber=RTRIM(LTRIM(myrefnumber)), 
            myvatcode=RTRIM(LTRIM(myvatcode)), 
            myunitofmeasure=RTRIM(LTRIM(myunitofmeasure))
          WHERE id=id;">>"$mytmpfile"

        echo "UPDATE core_erp_str_tmp
                SET myyear=SUBSTR(mydateoffpar,1,4)
              WHERE id=id;">>"$mytmpfile"



        echo "INSERT INTO core_erp_str
        ($myfields) 
        (SELECT $myfields 
            FROM core_erp_str_tmp 
            where mymd5 not in (select distinct(mymd5) from core_erp_str));">>"$mytmpfile"


        bash "$ppexecpsqlcmdfile" "$mytmpfile"
        bash "$ppexecpsqlcmd" "select  mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_erp_str')";
    fi


echo "">"$mytmpfile";
domaterializedview=0;
myfilename='POSSALES.TXT';
for myfname in $(find "$mypatherpvasilopoulos" -name "$myfilename" )
    do 
        mymd5=`md5sum "$myfname"`;
        myiconvname="$myfname"".iconv";
        myiconvsqlname="$myiconvname"".iconv.sql";
        totfound=`bash "$ppexecpsqlcmd" "select count(mymd5) from core_erp_my_md5_filename where mymd5='$mymd5' and myfilename='$myfilename' group by mymd5" -U postgres | wc -l`;
        if [ $totfound -eq 5 ]; then
            echo "Records found for $mymd5";
        else
            bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_md5_filename(mymd5,myfilename) values ('$mymd5','$myfilename');" -U postgres
            domaterializedview=1;
            echo "INSERT INTO core_erp_possales_tmp(mymd5,mykatastima,myyear, mydate, mymasteritem,mydesc, mycategoryfpa, mymonadametrisis, myaxiapolisismefpa, myposotita, mysintelestisfpa) VALUES">"$myiconvsqlname"

            awk -v FIELDWIDTHS='8 11 35 1 7 10 8 13' -v mymd5="$mymd5" -v mykatastima="$mykatastima" -v myyear="$myyear" -v OFS='\t' '
                { if (NR!=1) {printf ","};gsub("\x27"," ");printf "(\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%f\x27,\x27%f\x27,\x27%f\x27,\x27%f\x27)\n",mymd5,mykatastima,myyear,$1,$2,$3,$4,$5,$6,$7,$8; }
            ' "$myiconvname" >> "$myiconvsqlname"

            echo ";">>"$myiconvsqlname"
            bash "$ppexecpsqlcmdfile" "$myiconvsqlname"
            
        fi
done

if [ $domaterializedview -eq 1 ]; then
    echo "UPDATE core_erp_possales_tmp
        SET 
          mymd5=RTRIM(LTRIM(mymd5)), 
          mykatastima=RTRIM(LTRIM(mykatastima)), 
          myyear=RTRIM(LTRIM(myyear)), 
          mydate=RTRIM(LTRIM(mydate)), 
          mymasteritem=RTRIM(LTRIM(mymasteritem)), 
          mydesc=RTRIM(LTRIM(mydesc)), 
          mycategoryfpa=RTRIM(LTRIM(mycategoryfpa)), 
          mymonadametrisis=RTRIM(LTRIM(mymonadametrisis)), 
          myaxiapolisismefpa=RTRIM(LTRIM(myaxiapolisismefpa)), 
          myposotita=RTRIM(LTRIM(myposotita)), 
          mysintelestisfpa=RTRIM(LTRIM(mysintelestisfpa))
        WHERE id=id;">>"$mytmpfile"

  echo "INSERT INTO core_erp_possales
  (mymd5,mykatastima,myyear,mydate, mymasteritem,mydesc, mycategoryfpa, mymonadametrisis, myaxiapolisismefpa,myposotita, mysintelestisfpa) 
  (SELECT mymd5,mykatastima,myyear,mydate,mymasteritem, mydesc, mycategoryfpa, mymonadametrisis, myaxiapolisismefpa,myposotita, mysintelestisfpa 
      FROM core_erp_possales_tmp 
      where mydate not in (select distinct(mydate) from core_erp_possales)
      and mymd5 not in (select distinct(mymd5) from core_erp_possales));">>"$mytmpfile"

      
    bash "$ppexecpsqlcmdfile" "$mytmpfile"

    bash "$ppexecpsqlcmd" "select  mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_erp_possales')";
fi


echo "">"$mytmpfile";
domaterializedview=0;
myfilename='RETSALES.TXT';
for myfname in $(find "$mypatherpvasilopoulos" -name "$myfilename" )
    do
        mymd5=`md5sum "$myfname"`;
        myiconvname="$myfname"".iconv";
        myiconvsqlname="$myiconvname"".iconv.sql";
        totfound=`bash "$ppexecpsqlcmd" "select count(mymd5) from core_erp_my_md5_filename where mymd5='$mymd5' and myfilename='$myfilename' group by mymd5" -U postgres | wc -l`;
        if [ $totfound -eq 5 ]; then
            echo "Records found for $mymd5";
        else
            bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_md5_filename(mymd5,myfilename) values ('$mymd5','$myfilename');" -U postgres
            domaterializedview=1;

            echo "INSERT INTO core_erp_retsales_tmp(mymd5,mykatastima,myyear,mydate, mymasteritem,mydesc, mycategoryfpa, mymonadametrisis, myaxiapolisismefpa, myposotita, mysintelestisfpa) VALUES">"$myiconvsqlname"

            awk -v FIELDWIDTHS='8 11 35 1 7 10 8 13' -v mymd5="$mymd5" -v mykatastima="$mykatastima" -v myyear="$myyear" -v OFS='\t' '
                { if (NR!=1) {printf ","};gsub("\x27"," ");printf "(\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%f\x27,\x27%f\x27,\x27%f\x27,\x27%f\x27)\n",mymd5,mykatastima,myyear,$1,$2,$3,$4,$5,$6,$7,$8; }
            ' "$myiconvname" >> "$myiconvsqlname"

            echo ";">>"$myiconvsqlname"

            bash "$ppexecpsqlcmdfile" "$myiconvsqlname"
        fi
done



if [ $domaterializedview -eq 1 ]; then
    echo "INSERT INTO core_erp_retsales
            (mymd5,mykatastima,myyear,mydate, mymasteritem,mydesc, mycategoryfpa, mymonadametrisis, myaxiapolisismefpa,myposotita, mysintelestisfpa) 
            (SELECT mymd5,mykatastima,myyear,mydate,mymasteritem, mydesc, mycategoryfpa, mymonadametrisis, myaxiapolisismefpa,myposotita, mysintelestisfpa 
                FROM core_erp_retsales_tmp 
                where mydate not in (select distinct(mydate) from core_erp_retsales)
                and mymd5 not in (select distinct(mymd5) from core_erp_retsales));">>"$mytmpfile"

    bash "$ppexecpsqlcmdfile" "$mytmpfile"

    bash "$ppexecpsqlcmd" "select  mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_erp_retsales')";
fi




echo "">"$mytmpfile";
domaterializedview=0;
myfilename='ITEMS.TXT';
for myfname in $(find "$mypatherpvasilopoulos" -name "$myfilename" )
    do 
        mymd5=`md5sum "$myfname"`;
        myiconvname="$myfname"".iconv";
        myiconvsqlname="$myiconvname"".iconv.sql";
        mymonthday=`echo  "$myfname" | sed -n -e 's/.*\/'$mykatastima'\/'$myyear'\///p' | sed -n -e 's/\/'$myfilename'$//p' | awk -F  "-" ' {print $1}'`;
        mydateparalavis="$myyear""$mymonthday";
        totfound=`bash "$ppexecpsqlcmd" "select count(mymd5) from core_erp_my_md5_filename where mymd5='$mymd5' and myfilename='$myfilename' group by mymd5" -U postgres | wc -l`;
        if [ $totfound -eq 5 ]; then
            echo "Records found for $mymd5";
        else
            bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_md5_filename(mymd5,myfilename) values ('$mymd5','$myfilename');" -U postgres

            domaterializedview=1;
            echo "INSERT INTO core_erp_items_tmp(mymd5, mykatastima, myyear, mydateparalavis, mymasteritem, myhope, mydesc, myperiexkiv, mycategoryfpa, mytimikostous, mytimipolisis, myentosektospoik, mybarcode, mytmimaeidous, mymonadapolisis, mystatus) VALUES">"$myiconvsqlname"

            awk -v FIELDWIDTHS='11 7 35 7 1 9 8 1 13 3 1 1' -v mymd5="$mymd5" -v mykatastima="$mykatastima" -v myyear="$myyear" -v mydateparalavis="$mydateparalavis" -v OFS='\t' '
                { if (NR!=1) {printf ","};gsub("\x27"," ");printf "(\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%.2f\x27,\x27%s\x27,\x27%.2f\x27,\x27%.2f\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27)\n",mymd5,mykatastima,myyear,mydateparalavis,$1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12; }
            ' "$myiconvname" >> "$myiconvsqlname"

            echo ";">>"$myiconvsqlname"

            bash "$ppexecpsqlcmdfile" "$myiconvsqlname"
        fi
done
if [ $domaterializedview -eq 1 ]; then
    echo "INSERT INTO core_erp_items
                (mymd5, mykatastima, myyear, mydateparalavis, mymasteritem, 
                myhope, mydesc, myperiexkiv, mycategoryfpa, mytimikostous, mytimipolisis, 
                myentosektospoik, mybarcode, mytmimaeidous, mymonadapolisis, 
                mystatus) 
            (SELECT mymd5, mykatastima, myyear, mydateparalavis, mymasteritem, 
                    myhope, mydesc, myperiexkiv, mycategoryfpa, mytimikostous, mytimipolisis, 
                    myentosektospoik, mybarcode, mytmimaeidous, mymonadapolisis, 
                    mystatus 
                FROM core_erp_items_tmp 
                where mymd5 not in (select distinct(mymd5) from core_erp_items));">>"$mytmpfile"

            echo "UPDATE core_erp_items
                  SET 
                    mymd5=RTRIM(LTRIM(mymd5)), 
                    mykatastima=RTRIM(LTRIM(mykatastima)), 
                    myyear=RTRIM(LTRIM(myyear)), 
                    mydateparalavis=RTRIM(LTRIM(mydateparalavis)), 
                    mymasteritem=RTRIM(LTRIM(mymasteritem)), 
                    myhope=RTRIM(LTRIM(myhope)), 
                    mydesc=RTRIM(LTRIM(mydesc)), 
                    myperiexkiv=RTRIM(LTRIM(myperiexkiv)), 
                    mycategoryfpa=RTRIM(LTRIM(mycategoryfpa)), 
                    mytimikostous=RTRIM(LTRIM(mytimikostous)), 
                    mytimipolisis=RTRIM(LTRIM(mytimipolisis)), 
                    myentosektospoik=RTRIM(LTRIM(myentosektospoik)), 
                    mybarcode=RTRIM(LTRIM(mybarcode)), 
                    mytmimaeidous=RTRIM(LTRIM(mytmimaeidous)), 
                    mymonadapolisis=RTRIM(LTRIM(mymonadapolisis)), 
                    mystatus=RTRIM(LTRIM(mystatus))
                  WHERE id=id;">>"$mytmpfile"

    bash "$ppexecpsqlcmdfile" "$mytmpfile"

    bash "$ppexecpsqlcmd" "select  mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_erp_items')";
fi



        echo "">"$mytmpfile";
        domaterializedview=0;
        myfilename='CUSTS.TXT';
        myfname="$mypatherpvasilopouloskatastima""$myfilename";

        mymd5=`md5sum "$myfname"`;
        myiconvname="$myfname"".iconv";
        myiconvsqlname="$myiconvname"".iconv.sql";
        if [ -f "$myiconvname" ]
        then
                echo "File found $myiconvname"
        else
                iconv -s -f WINDOWS-1253 -t UTF8 -o "$myiconvname" "$myfname";
                sed -i '$d' "$myiconvname";
        fi   

        totfound=`bash "$ppexecpsqlcmd" "select count(mymd5) from core_erp_my_md5_filename where mymd5='$mymd5' and myfilename='$myfilename' group by mymd5" -U postgres | wc -l`;
        if [ $totfound -eq 5 ]; then
            echo "Records found for $mymd5";
        else
            bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_md5_filename(mymd5,myfilename) values ('$mymd5','$myfilename');" -U postgres

            domaterializedview=1;
            echo "truncate table core_erp_custs_tmp;INSERT INTO core_erp_custs_tmp(mymd5, mykatastima, myyear, mykodikoskatastimatos, mykodikospelati, myeponimia, myaddress, myarithmos, mytk, myphone, mymail, myfax, mydoy, mydayspistosis, mypistotikoorio, myafm, mypaymenttype, myepaggelma, myphone2, mydatedimioyrgiaspelati, mycategoryfpa, mykodikosdoy, mykodikoshoras, mykartapelati, myekptosipelati) VALUES">"$myiconvsqlname"

            awk -v FIELDWIDTHS='6 16 35 30 5 5 15 30 15 30 3 9 10 1 20 15 8 1 6 4 13 6' -v mymd5="$mymd5" -v mykatastima="$mykatastima" -v myyear="$myyear" -v OFS='\t' '
                { if (NR!=1) {printf ","};gsub("\x27"," ");printf "(\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%f\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%f\x27)\n",mymd5,mykatastima,myyear,$1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12,$13,$14,$15,$16,$17,$18,$19,$20,$21,$22; }
            ' "$myiconvname" >> "$myiconvsqlname"

            echo ";">>"$myiconvsqlname"

            bash "$ppexecpsqlcmdfile" "$myiconvsqlname"
        fi

    if [ $domaterializedview -eq 1 ]; then
        echo "UPDATE core_erp_custs_tmp
                    SET 
                        mymd5=RTRIM(LTRIM(mymd5)), 
                        mykatastima=RTRIM(LTRIM(mykatastima)), 
                        myyear=RTRIM(LTRIM(myyear)), 
                        mykodikoskatastimatos=RTRIM(LTRIM(mykodikoskatastimatos)), 
                        mykodikospelati=RTRIM(LTRIM(mykodikospelati)), 
                        myeponimia=RTRIM(LTRIM(myeponimia)), 
                        myaddress=RTRIM(LTRIM(myaddress)), 
                        myarithmos=RTRIM(LTRIM(myarithmos)), 
                        mytk=RTRIM(LTRIM(mytk)), 
                        myphone=RTRIM(LTRIM(myphone)), 
                        mymail=RTRIM(LTRIM(mymail)), 
                        myfax=RTRIM(LTRIM(myfax)), 
                        mydoy=RTRIM(LTRIM(mydoy)), 
                        mydayspistosis=RTRIM(LTRIM(mydayspistosis)), 
                        mypistotikoorio=RTRIM(LTRIM(mypistotikoorio)), 
                        myafm=RTRIM(LTRIM(myafm)), 
                        mypaymenttype=RTRIM(LTRIM(mypaymenttype)), 
                        myepaggelma=RTRIM(LTRIM(myepaggelma)), 
                        myphone2=RTRIM(LTRIM(myphone2)), 
                        mydatedimioyrgiaspelati=RTRIM(LTRIM(mydatedimioyrgiaspelati)), 
                        mycategoryfpa=RTRIM(LTRIM(mycategoryfpa)), 
                        mykodikosdoy=RTRIM(LTRIM(mykodikosdoy)), 
                        mykodikoshoras=RTRIM(LTRIM(mykodikoshoras)), 
                        mykartapelati=RTRIM(LTRIM(mykartapelati)), 
                        myekptosipelati=RTRIM(LTRIM(myekptosipelati))
     WHERE id=id;">>"$mytmpfile"

                echo "INSERT INTO core_erp_custs
                    (mymd5, mykatastima, myyear, mykodikoskatastimatos, 
           mykodikospelati, myeponimia, myaddress, myarithmos, mytk, myphone, 
           mymail, myfax, mydoy, mydayspistosis, mypistotikoorio, myafm, 
           mypaymenttype, myepaggelma, myphone2, mydatedimioyrgiaspelati, 
           mycategoryfpa, mykodikosdoy, mykodikoshoras, mykartapelati, myekptosipelati) 
                (SELECT mymd5, mykatastima, myyear, mykodikoskatastimatos, 
           mykodikospelati, myeponimia, myaddress, myarithmos, mytk, myphone, 
           mymail, myfax, mydoy, mydayspistosis, mypistotikoorio, myafm, 
           mypaymenttype, myepaggelma, myphone2, mydatedimioyrgiaspelati, 
           mycategoryfpa, mykodikosdoy, mykodikoshoras, mykartapelati, myekptosipelati 
                    FROM core_erp_custs_tmp 
                    where
                        mykodikospelati not in (select mykodikospelati from core_erp_custs));">>"$mytmpfile"

                echo "UPDATE core_erp_custs
                        SET   (  mykodikoskatastimatos, 
           mykodikospelati, myeponimia, myaddress, myarithmos, mytk, myphone, 
           mymail, myfax, mydoy, mydayspistosis, mypistotikoorio, myafm, 
           mypaymenttype, myepaggelma, myphone2, mydatedimioyrgiaspelati, 
           mycategoryfpa, mykodikosdoy, mykodikoshoras, mykartapelati, myekptosipelati)
                            = (core_erp_custs_tmp.mykodikoskatastimatos, 
           core_erp_custs_tmp.mykodikospelati, core_erp_custs_tmp.myeponimia, core_erp_custs_tmp.myaddress, core_erp_custs_tmp.myarithmos, core_erp_custs_tmp.mytk, core_erp_custs_tmp.myphone, 
           core_erp_custs_tmp.mymail, core_erp_custs_tmp.myfax, core_erp_custs_tmp.mydoy, core_erp_custs_tmp.mydayspistosis, core_erp_custs_tmp.mypistotikoorio, core_erp_custs_tmp.myafm, 
           core_erp_custs_tmp.mypaymenttype, core_erp_custs_tmp.myepaggelma, core_erp_custs_tmp.myphone2, core_erp_custs_tmp.mydatedimioyrgiaspelati, 
           core_erp_custs_tmp.mycategoryfpa, core_erp_custs_tmp.mykodikosdoy, core_erp_custs_tmp.mykodikoshoras, core_erp_custs_tmp.mykartapelati, core_erp_custs_tmp.myekptosipelati)
                        FROM   core_erp_custs_tmp
                        WHERE  core_erp_custs_tmp.mykodikospelati = core_erp_custs.mykodikospelati;">>"$mytmpfile"
        bash "$ppexecpsqlcmdfile" "$mytmpfile"
        bash "$ppexecpsqlcmd" "select  mvupdatedependends((select schemaname from aab2badmin_basesettings),'core_erp_custs')";
    fi

#domaterializedview=0;
#
        myfilename='BARCODES.TXT';
        myfname="$mypatherpvasilopouloskatastima""$myfilename";
        mymd5=`md5sum "$myfname"`;
        mysqlname="$myfname"".sql";
        totfound=`bash "$ppexecpsqlcmd" "select count(mymd5) from core_erp_my_md5_filename where mymd5='$mymd5' and myfilename='$myfilename' group by mymd5" -U postgres | wc -l`;
        if [ $totfound -eq 5 ]; then
            echo "Records found for $mymd5";
        else
            bash "$ppexecpsqlcmd" "INSERT INTO core_erp_my_md5_filename(mymd5,myfilename) values ('$mymd5','$myfilename');" -U postgres

            domaterializedview=1;
            echo "truncate table core_erp_barcodes;INSERT INTO core_erp_barcodes(mymd5, mykatastima, myyear, mymasteritem, mybarcode) VALUES">"$mysqlname"

            awk -v FIELDWIDTHS='11 13' -v mymd5="$mymd5" -v mykatastima="$mykatastima" -v myyear="$myyear" -v OFS='\t' '
                { if (NR!=1) {printf ","};gsub("\x27"," ");printf "(\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27,\x27%s\x27)\n",mymd5,mykatastima,myyear,$1,$2; }
            ' "$myfname" >> "$mysqlname"

            echo ";">>"$mysqlname"

            
            bash "$ppexecpsqlcmdfile" "$mysqlname"
        fi
}

erp_scripts_data $2 $3