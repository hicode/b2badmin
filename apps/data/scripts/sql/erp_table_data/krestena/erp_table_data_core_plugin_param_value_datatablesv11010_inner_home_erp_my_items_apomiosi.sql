delete from core_plugin_param_value where mykatastima='krestena' and  
    fkplugin in 
    (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'trans_table_title','datatablesv11010_inner_home_erp_my_items_apomiosiApomiosi'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'async_req_data_param+extrasearch',''
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'async_req_data_param+col','3'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'async_req_data_param+sort','asc'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'async_req_data_param+pagelength','20'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'Actions_Tools+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'Button_New+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'Button_New+title','New Customer'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'Table_Cols+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+idseq','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+expandedit','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'translates+trans_successmessage','successmessage'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'translates+trans_querytook','querytook'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'datasource+readtblname','Vferpmyitemsapomiosikrestenam'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'datasource+writetblname','Coreerpmyitemsapomiosi'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'datasource+readpk','fkparentlng'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'datasource+writepk','id'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'datasource+extrasearch+fklng+value','current'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),



    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myyear+heading+trans_title','Year'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myyear+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myyear+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myyear+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myyear+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myyear+cells+class','hleft'
    ),





    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+employeeusername+heading+trans_title','datatablesv11010_inner_home_erp_my_items_apomiosiemployeeusername'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+employeeusername+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+employeeusername+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+employeeusername+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+employeeusername+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+employeeusername+cells+class','hcenter'
    ),


    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mybarcode+heading+trans_title','datatablesv11010_inner_home_erp_my_items_apomiosimybarcode'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mybarcode+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mybarcode+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mybarcode+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mybarcode+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mybarcode+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mydesc+heading+trans_title','datatablesv11010_inner_home_erp_my_items_apomiosimydesc'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mydesc+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mydesc+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mydesc+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mydesc+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+mydesc+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+monadapolisistitle+heading+trans_title','datatablesv11010_inner_home_erp_my_items_apomiosimonadapolisistitle'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+monadapolisistitle+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+monadapolisistitle+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+monadapolisistitle+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+monadapolisistitle+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+monadapolisistitle+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+apomiosititle+heading+trans_title','datatablesv11010_inner_home_erp_my_items_apomiosiapomiosititle'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+apomiosititle+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+apomiosititle+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+apomiosititle+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+apomiosititle+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+apomiosititle+cells+class','hcenter'
    ),
    











        
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myqty+heading+trans_title','datatablesv11010_inner_home_erp_my_items_apomiosimyqty'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myqty+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myqty+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myqty+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myqty+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'cols+myqty+cells+class','hcenter'
    ),















    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+class','table table-striped table-bordered table-hover tblCmod' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tabletype','table' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+hidden+mykatastima','krestena' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+hidden+fkemployee','currentuser' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+hidden+myyear','currentyear' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosiapomiosititle' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol1+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosimybarcode' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol2+width','10%' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosimyqty' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosimonadapolisistitle' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr1+tcol4+width','5%' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+type','content_select_list' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+tblname','coreerplcategoryapomiosi' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+params+fklng','current' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+params+bldeleted','0' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+params+blpublished','1' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+params+bldisabled','0' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+keyval','myid' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+datasource+showval','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+html+fieldname','fkcategoryapomiosi' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+html+class','bs-select form-control' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol1+width','' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol2+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol2+field','mybarcode' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol2+html+fieldname','mybarcode' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol2+html+class','form-control' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol2+notinitreadonly','' ),

   

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol3+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol3+field','myqty' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol3+html+fieldname','myqty' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol3+html+class','form-control' ),

   

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol4+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol4+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol4+field','monadapolisistitle' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol4+html+fieldname','monadapolisistitle' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr2+tcol4+html+class','form-control' ),

    

    
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosimyhope' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol1+width','10%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosimymasteritem' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol2+width','5%' ),
    
    

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_apomiosimydesc' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr3+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol1+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol1+field','myhope' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol1+html+fieldname','myhope' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol1+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol2+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol2+field','mymasteritem' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol2+html+fieldname','mymasteritem' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol2+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol3+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol3+field','mydesc' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol3+html+fieldname','mydesc' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_apomiosi'),
	'newrecord+tbl+tr4+tcol3+html+class','form-control' )

    ;