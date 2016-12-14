delete from core_plugin_param_value where mykatastima='krestena' and  
    fkplugin in 
    (select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi');

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'trans_table_title','Antistixisi'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'async_req_data_param+extrasearch',''
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'async_req_data_param+col','3'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'async_req_data_param+sort','asc'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'async_req_data_param+pagelength','20'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'async_req_data_param+lengthmenukeys','10,20,50,100,150,250,500,-1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'async_req_data_param+lengthmenuvalues','10,20,50,100,150,250,500,All'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'Actions_Tools+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'Button_New+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'Button_New+title','New Customer'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'Table_Cols+blshow','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+idseq','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+expandedit','1'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'translates+trans_successmessage','successmessage'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'translates+trans_youhaverequestedtoview','youhaverequestedtoview'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'translates+trans_recordsbutduethelimitationreturnedonly','recordsbutduethelimitationreturnedonly'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'translates+trans_querytook','querytook'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'datasource+readtblname','Vferpmyitemsmetasiskevasiaantistixisikrestenam'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'datasource+writetblname','Coreerpmyitemsmetasiskevasiaantistixisi'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'datasource+readpk','fkparentlng'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'datasource+writepk','id'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'datasource+extrasearch+fklng+value','current'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'datasource+extrasearch+fklng+searchmethod','Exact'
    ),


    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodefrom+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimybarcodefrom'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodefrom+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodefrom+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodefrom+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodefrom+filter+searchmethod','Like'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodefrom+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodeto+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimybarcodeto'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodeto+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodeto+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodeto+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodeto+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mybarcodeto+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescfrom+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimydescfrom'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescfrom+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescfrom+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescfrom+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescfrom+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescfrom+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescto+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimydescto'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescto+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescto+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescto+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescto+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+mydescto+cells+class','hcenter'
    ),
    











    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyfrom+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimyqtyfrom'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyfrom+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyfrom+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyfrom+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyfrom+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyfrom+cells+class','hcenter'
    ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyto+heading+trans_title','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimyqtyto'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyto+heading+width','5%'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyto+heading+sortable','true'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyto+filter+type','input'
    ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyto+filter+searchmethod','Like'
    )
    ,
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'cols+myqtyto+cells+class','hcenter'
    ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+class','table table-striped table-bordered table-hover tblCmod' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tabletype','table' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+hidden+mykatastima','krestena' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimybarcodefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol1+width','10%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimydescfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol2+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimyqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimonadapolisistitlefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr1+tcol4+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol1+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol1+field','mybarcodefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol1+html+fieldname','mybarcodefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol1+html+class','form-control' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol1+notinitreadonly','' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol2+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol2+field','mydescfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol2+html+fieldname','mydescfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol2+html+class','form-control' ),

   

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol3+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol3+field','myqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol3+html+fieldname','myqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol3+html+class','form-control' ),

   

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol4+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol4+type','rocontent' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol4+field','myqtyfrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol4+html+fieldname','monadapolisistitlefrom' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr2+tcol4+html+class','form-control' ),

    

    
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimybarcodeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol1+width','10%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimydescto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol2+width','5%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimyqtyto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimonadapolisistitleto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr3+tcol4+width','5%' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol1+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol1+field','mybarcodeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol1+html+fieldname','mybarcodeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol1+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol2+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol2+field','mydescto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol2+html+fieldname','mydescto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol2+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol3+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol3+field','myqtyto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol3+html+fieldname','myqtyto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol3+html+class','form-control' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+type','content_select_list' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+field','fksalutationid' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+tblname','coreerplmonadapolisis' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+params+fklng','current' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+params+mykatastima','krestena' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+params+bldeleted','0' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+params+blpublished','1' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+params+bldisabled','0' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+keyval','myid' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+datasource+showval','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+html+fieldname','mymonadapolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+html+class','bs-select form-control' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr4+tcol4+width','' ),

    

    
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol1+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol1+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimyhopeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol1+width','10%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol2+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol2+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimymasteritemto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol2+width','5%' ),
    
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol3+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol3+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimytimikostousto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol3+width','5%' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol4+type','title' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol4+trans_text','datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisimytimipolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr5+tcol4+width','5%' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol1+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol1+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol1+field','myhopeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol1+html+fieldname','myhopeto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol1+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol2+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol2+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol2+field','mymasteritemto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol2+html+fieldname','mymasteritemto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol2+html+class','form-control' ),

    

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol3+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol3+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol3+field','mytimikostousto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol3+html+fieldname','mytimikostousto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol3+html+class','form-control' ),

    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol4+width','' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol4+type','content_input' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol4+field','mytimipolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol4+html+fieldname','mytimipolisisto' ),
    ('krestena',(select id from core_plugin where mykatastima='krestena' and  pluginname='datatablesv11010_inner_home_erp_my_items_metasiskevasia_antistixisi'),
	'newrecord+tbl+tr6+tcol4+html+class','form-control' );