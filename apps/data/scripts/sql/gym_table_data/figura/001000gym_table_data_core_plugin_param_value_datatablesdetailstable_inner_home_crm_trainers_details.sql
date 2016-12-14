set my.pluginname to 'datatablesdetailstable_inner_home_crm_trainers_details';

delete from core_plugin_param_value where 
mykatastima=:mykatastima and 
fkplugin in (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname')));

INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES 
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'colspan','19'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'detailtype','portlets'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_editinlanguageel','Editinlanguageel'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_editinlanguageen','Editinlanguageen'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_editbuttontext','editbuttontext'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_savebuttontext','savebuttontext'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_cancelbuttontext','cancelbuttontext'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_msgnotranslationfound','msgnotranslationfound'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'translates+trans_msgthedataloadedsuccesfully','msgthedataloadedsuccesfully'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+readtblname','vfcrmtrainer'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+writetblname','corecrmtrainer'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+readpk','fktrainerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+params+fktrainerfkparentlng','mygetparentkeymyget'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'mainportlet+title+extrafield1','trainerfull'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+data+id','CHCrmCDataTableAjax::Get_Tab_Unique_Id(1)' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+data+class','tab-pane active' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+data+trans_title','General' ),


    












    (:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+class','table table-striped table-bordered table-hover tblCmod' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol1+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol1+trans_text','keyid' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol1+width','10%' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol2+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol2+trans_text','uniqid' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol2+width','10%' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol3+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol3+trans_text','writer' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol3+width','10%' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol4+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol4+trans_text','dtcreated' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol4+width','10%' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol5+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol5+trans_text','lastupdateduser' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol5+width','10%' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol6+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol6+trans_text','dtlastupdated' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol6+width','10%' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol7+type','title' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol7+trans_text','updatestatus' 
    ),
(:mykatastima,
    (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol7+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol8+type','title' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol8+trans_text',' ' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr1+tcol8+width','30%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol1+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol1+field','fktrainerfkparentlng' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol1+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol2+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol2+field','fktrainerfkparentlng' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol2+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol3+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol3+field','fktrainerfkusercreated' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol3+datasource+reffield','username' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol3+datasource+tblname','users'
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol3+datasource+kind','core'
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol3+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol4+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol4+dbtype','\Phalcon\Db\Column::TYPE_DATETIME' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol4+field','fktrainerdt_created' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol4+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol5+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol5+field','fktrainerfkuserlastupdated' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol5+datasource+reffield','username' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol5+datasource+tblname','users' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol5+datasource+kind','core' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol5+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol6+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol6+dbtype','\Phalcon\Db\Column::TYPE_DATETIME' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol6+field','fktrainerdt_updated' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol6+width','10%' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol7+type','rocontent' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol7+display_cell','colours' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol7+pulsate','true' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol7+pulsate_values+0','2' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol7+field','trainerupdatestatus' 
    ),
(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl1+tr2+tcol7+width','10%' 
    ),



    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+class','table table-striped table-bordered table-hover tblCmod' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol1+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol1+trans_text','salutation' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol1+width','5%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol2+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol2+trans_text','gender' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol2+width','5%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol3+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol3+trans_text','lastname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol3+width','10%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol4+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol4+trans_text','firstname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol4+width','10%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol5+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol5+trans_text','mobilephone' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol5+width','5%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol6+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol6+trans_text','landphone' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol6+width','5%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol7+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol7+trans_text','birthday' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol7+width','5%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol8+type','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol8+trans_text','email' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr1+tcol8+width','5%' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+type','content_select_list' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+field','fksalutationid' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+tblname','coresalutation' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+params+fklng','current' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+params+bldeleted','0' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+params+blpublished','1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+params+bldisabled','0' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+keyval','id' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+datasource+showval','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+html+fieldname','fksalutation' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+html+class','bs-select form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol1+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+type','content_select_list' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+field','fkgenderid' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+tblname','coregender' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+params+fklng','current' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+params+bldeleted','0' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+params+blpublished','1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+params+bldisabled','0' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+keyval','id' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+datasource+showval','title' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+html+fieldname','fkgender' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+html+class','bs-select form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol2+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+field','lname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+html+fieldname','lname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+field','fname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+html+fieldname','fname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+field','telmobile' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+html+fieldname','telmobile' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+field','telland' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+html+fieldname','telland' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+type','content_input_date' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+dbtype','\Phalcon\Db\Column::TYPE_DATE' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+field','birthday' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+html+fieldname','birthday' ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+field','email' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+html+fieldname','email' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+html+class','form-control' )

    ;