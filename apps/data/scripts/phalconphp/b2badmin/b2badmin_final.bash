bash "$logexecfilename" "yellow" "Will Execute Final Scripts"

bash "$ppexecpsqlcmdfile" "$mysqlpath"aio_table_data_end.sql






bash "$logexecfilename" "yellow" "WILL DELETE THE MODELS"
if [ "$MYMETHOD" = "devel" ]; then
    bash "$logexecfilename" "yellow" "WILL MAKE THE CURL $MYCURLURL"
    rm -rf "$myappspath"b2b/models/PrototypeModels
    rm -rf "$myappspath"b2b/models/AliasModels
    rm -rf "$mypublictmppath"cache
    curl $MYCURLURL
    printf "\nPlease type on your browser \n $MYSITEURL \nto access your new installation\nwith username : admin\nwith password : telecon12345\n"
fi