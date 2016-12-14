delete from core_plugin_param_value where mykatastima='krestena' and  
    fkplugin in 
    (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'trans_table_title','Proionta'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'async_req_data_param+extrasearch',''
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'async_req_data_param+col','3'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'async_req_data_param+sort','asc'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'async_req_data_param+pagelength','20'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'Actions_Tools+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'Button_New+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'Button_New+title','New Customer'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'Table_Cols+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+idseq','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+expandedit','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'translates+trans_successmessage','successmessage'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'translates+trans_querytook','querytook'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'datasource+readtblname','Vferpmyitemsmetasiskevasiaproiontakrestenam'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'datasource+writetblname','Coreerpmyitemsmetasiskevasiaproionta'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'datasource+readpk','fkparentlng'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'datasource+writepk','id'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'datasource+extrasearch+fklng+value','current'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+username+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontausername'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+username+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+username+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+username+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+username+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+username+cells+class','hcenter'
    ),


    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodefrom+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamybarcodefrom'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodefrom+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodefrom+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodefrom+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodefrom+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodefrom+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodeto+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamybarcodeto'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodeto+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodeto+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodeto+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodeto+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mybarcodeto+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescfrom+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamydescfrom'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescfrom+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescfrom+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescfrom+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescfrom+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescfrom+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescto+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamydescto'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescto+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescto+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescto+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescto+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+mydescto+cells+class','hcenter'
    ),
    











    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyfrom+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamyqtyfrom'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyfrom+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyfrom+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyfrom+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyfrom+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyfrom+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyto+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamyqtyto2'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyto+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyto+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyto+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyto+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'cols+myqtyto+cells+class','hcenter'
    ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+class','table table-striped table-bordered table-hover tblCmod' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tabletype','table' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+hidden+mykatastima','krestena' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamybarcodefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol1+width','10%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamydescfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol2+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamyqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamonadapolisistitlefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr1+tcol4+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol1+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol1+field','mybarcodefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol1+html+fieldname','mybarcodefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol1+html+class','form-control' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol1+notinitreadonly','' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol2+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol2+field','mydescfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol2+html+fieldname','mydescfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol2+html+class','form-control' ),

   

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol3+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol3+field','myqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol3+html+fieldname','myqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol3+html+class','form-control' ),

   

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol4+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol4+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol4+field','monadapolisistitlefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol4+html+fieldname','monadapolisistitlefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr2+tcol4+html+class','form-control' ),

    

    
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamybarcodeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol1+width','10%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamydescto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol2+width','5%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamyqtyto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamonadapolisistitleto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr3+tcol4+width','5%' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol1+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol1+field','mybarcodeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol1+html+fieldname','mybarcodeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol1+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol2+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol2+field','mydescto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol2+html+fieldname','mydescto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol2+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol3+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol3+field','myqtyto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol3+html+fieldname','myqtyto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol3+html+class','form-control' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol4+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol4+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol4+field','monadapolisistitleto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol4+html+fieldname','monadapolisistitleto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr4+tcol4+html+class','form-control' ),

    

    
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamyhopeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol1+width','10%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamymasteritemto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol2+width','5%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamytimikostousto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_proiontamytimipolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr5+tcol4+width','5%' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol1+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol1+field','myhopeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol1+html+fieldname','myhopeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol1+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol2+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol2+field','mymasteritemto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol2+html+fieldname','mymasteritemto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol2+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol3+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol3+field','mytimikostousto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol3+html+fieldname','mytimikostousto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol3+html+class','form-control' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol4+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol4+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol4+field','mytimipolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol4+html+fieldname','mytimipolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_proionta'),
	'newrecord+tbl+tr6+tcol4+html+class','form-control' );