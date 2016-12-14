set my.pluginname to 'datatablesdetailstable_inner_home_crm_members_details';

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
	'datasource+readtblname','vfcrmcustomerm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+writetblname','corecrmcustomer'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+params+fkcustomerfkparentlng','mygetparentkeymyget'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'mainportlet+title+extrafield1','customerfull'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+data+id','CHCrmCDataTableAjax::Get_Tab_Unique_Id(1)' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+data+class','tab-pane active' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+data+trans_title','General' ),


    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+datasource+readtblname','vfcrmcustomerm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+datasource+writetblname','corecrmcustomer'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+datasource+params+fkcustomerfkparentlng','mygetparentkeymyget'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+data+id','CHCrmCDataTableAjax::Get_Tab_Unique_Id(2)' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+data+class','tab-pane' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+data+trans_title','Address' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+datasource+readtblname','corecrmcustomerhealth'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+datasource+writetblname','corecrmcustomerhealth'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+datasource+readpk','fkcustomer'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+datasource+params+fkcustomer','mygetparentkeymyget'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+data+id','CHCrmCDataTableAjax::Get_Tab_Unique_Id(3)' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tabletype','table' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+data+class','tab-pane' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+data+trans_title','healthhistory' 
    ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+readtblname','vfcrmcustomercontractm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+writetblname','corecrmcustomercontract'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+params+fkcustomerfkparentlng','mygetparentkeymyget'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+params+mygetparentkeymyget','fkcustomerfkparentlng'--epeidi einai grid to xrisimopoio san extra get
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+datasource+pluginaliasname','datatablesv11010_inner_home_crm_members_contracts'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+data+id','CHCrmCDataTableAjax::Get_Tab_Unique_Id(4)' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+data+class','tab-pane' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+data+trans_title','Contracts' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab4+data+tabtype','datatableajax' 
    ),







(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+readtblname','vfcrmcustomercontractpaymentm'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+writetblname','corecrmcustomercontractpayment'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+readpk','fkcustomerfkparentlng'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+writepk','id'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+params+fkcustomerfkparentlng','mygetparentkeymyget'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+params+mygetparentkeymyget','fkcustomerfkparentlng'--epeidi einai grid to xrisimopoio san extra get
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+params+fklng','current'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+datasource+pluginaliasname','datatablesv11010_inner_home_crm_members_contracts_payments'
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+data+id','CHCrmCDataTableAjax::Get_Tab_Unique_Id(5)' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+data+class','tab-pane' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+data+trans_title','Payments' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab5+data+tabtype','datatableajax' 
    ),












--     (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+class','table table-striped table-bordered table-hover tblCmod' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol1+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol1+trans_text','keyid' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol1+width','10%' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol2+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol2+trans_text','uniqid' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol2+width','10%' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol3+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol3+trans_text','writer' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol3+width','10%' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol4+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol4+trans_text','dtcreated' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol4+width','10%' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol5+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol5+trans_text','lastupdateduser' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol5+width','10%' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol6+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol6+trans_text','dtlastupdated' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol6+width','10%' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol7+type','title' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol7+trans_text','updatestatus' 
--     ),
-- (:mykatastima,
--     (select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol7+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol8+type','title' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol8+trans_text',' ' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr1+tcol8+width','30%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol1+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol1+field','fkcustomerfkparentlng' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol1+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol2+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol2+field','fkcustomeruniqid' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol2+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol3+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol3+field','fkcustomerfkusercreated' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol3+datasource+reffield','username' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol3+datasource+tblname','users'
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol3+datasource+kind','core'
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol3+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol4+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol4+dbtype','\Phalcon\Db\Column::TYPE_DATETIME' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol4+field','fkcustomerdt_created' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol4+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol5+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol5+field','fkcustomerfkuserlastupdated' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol5+datasource+reffield','username' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol5+datasource+tblname','users' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol5+datasource+kind','core' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol5+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol6+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol6+dbtype','\Phalcon\Db\Column::TYPE_DATETIME' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol6+field','fkcustomerdt_updated' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol6+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol7+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol7+display_cell','colours' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol7+pulsate','true' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol7+pulsate_values+0','2' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol7+field','customerupdatestatus' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl1+tr2+tcol7+width','10%' 
--     ),



--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+class','table table-striped table-bordered table-hover tblCmod' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr1+tcol1+type','title' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr1+tcol1+trans_text','salutation' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr1+tcol1+width','5%' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr1+tcol2+type','title' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr1+tcol2+trans_text','gender' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr1+tcol2+width','5%' ),
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
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+type','content_select_list' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+field','fksalutationid' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+tblname','coresalutation' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+params+fklng','current' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+params+bldeleted','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+params+blpublished','1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+params+bldisabled','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+keyval','id' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+datasource+showval','title' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+html+fieldname','fksalutation' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+html+class','bs-select form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol1+width','' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+type','content_select_list' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+field','fkgenderid' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+tblname','coregender' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+params+fklng','current' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+params+bldeleted','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+params+blpublished','1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+params+bldisabled','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+keyval','id' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+datasource+showval','title' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+html+fieldname','fkgender' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+html+class','bs-select form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab1+tbl2+tr2+tcol2+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol3+field','customerlname' ),
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
	'tab1+tbl2+tr2+tcol4+field','customerfname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+html+fieldname','fname' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol4+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+field','customertelmobile' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+html+fieldname','telmobile' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol5+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+width','' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+field','customertelland' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+html+fieldname','telland' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol6+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+type','content_input_date' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+dbtype','\Phalcon\Db\Column::TYPE_DATE' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+field','customerbirthday' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol7+html+fieldname','birthday' ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+field','customeremail' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+html+fieldname','email' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab1+tbl2+tr2+tcol8+html+class','form-control' ),

--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+class','table table-striped table-bordered table-hover tblCmod' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr1+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr1+tcol1+trans_text','countryname1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr1+tcol1+width','15%' 
--     ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol2+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol2+trans_text','townname1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol2+width','20%' 
    ),
        (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol3+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol3+trans_text','prefecturename1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol3+width','25%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol4+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol4+trans_text','addressname1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol4+width','20%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol5+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol5+trans_text','pocname1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr1+tcol5+width','10%' 
    ),
    

--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+type','content_select_list'),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+field','fkcountry1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+tblname','corecountry' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+params+fklng','current' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+params+bldeleted','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+params+blpublished','1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+params+bldisabled','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+keyval','id' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+datasource+showval','title' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+html+fieldname','fkcountry1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+html+class','bs-select form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol1+width','' ),
--     
-- 
--     
--         (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+type','content_select_list'),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+field','fkprefecture1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+tblname','coreprefecture' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+params+fklng','current' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+params+bldeleted','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+params+blpublished','1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+params+bldisabled','0' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+keyval','id' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+datasource+showval','title' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+html+fieldname','fkprefecture1' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+html+class','bs-select form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr2+tcol2+width','' ),


    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol2+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol2+divclass','col-md-5' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol2+field','townname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol2+html+fieldname','townname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol2+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol2+width','' ), 
        
        (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol3+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol3+divclass','col-md-5' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol3+field','regionname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol3+html+fieldname','regionname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol3+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol3+width','' ), 

(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol4+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol4+divclass','col-md-5' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol4+field','addressname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol4+html+fieldname','addressname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol4+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol4+width','' ),  

(:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol5+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol5+divclass','col-md-5' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol5+field','pocname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol5+html+fieldname','pocname1' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol5+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab2+tbl1+tr2+tcol5+width','' ), 



-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol1+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol1+field','countryname1' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol1+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol2+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol2+field','prefecture1' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol2+width','10%' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol3+type','rocontent' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol3+field','townname1' 
--     ),
-- (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab2+tbl1+tr3+tcol3+width','10%' 
--     ),






    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+class','table table-striped table-bordered table-hover tblCmod' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+width','50%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+coltype','th' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+colspan','2' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+trans_text','bl01' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol1+divclass','col-md-6' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+divclass','col-md-1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+width','10%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+field','bl01' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+html+fieldname','bl01' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+switch+data-on-color','success' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+switch+data-off-color','danger' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+type','content_input_switch' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+trans_dataontext','YES1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol1+trans_dataofftext','NO1' 
    ),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol2+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol2+divclass','col-md-5' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol2+field','bl01notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol2+html+fieldname','bl01notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol2+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol2+width','' ),    
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol2+width','50%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol2+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol2+coltype','th' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol2+colspan','2' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol2+trans_text','bl02' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr1+tcol2+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+divclass','col-md-1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+width','10%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+field','bl02' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+html+fieldname','bl02' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+switch+data-on-color','success' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+switch+data-off-color','danger' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+type','content_input_switch' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+trans_dataontext','YES1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol3+trans_dataofftext','NO1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol4+divclass','col-md-5' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol4+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol4+field','bl02notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol4+html+fieldname','bl02notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol4+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr2+tcol4+width','' ),




    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol1+width','50%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol1+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol1+coltype','th' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol1+colspan','2' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol1+trans_text','bl03' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol1+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+field','bl03' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+html+fieldname','bl03' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+switch+data-on-color','success' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+switch+data-off-color','danger' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+type','content_input_switch' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+trans_dataontext','YES1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol1+trans_dataofftext','NO1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol2+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol2+field','bl03notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol2+html+fieldname','bl03notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol2+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol2+width','' ),
    
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol2+width','50%' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol2+type','title' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol2+coltype','th' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol2+colspan','2' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol2+trans_text','bl04' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr3+tcol2+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+class','text-center' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+field','bl04' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+html+fieldname','bl04' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+switch+data-on-color','success' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+switch+data-off-color','danger' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+type','content_input_switch' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+trans_dataontext','YES1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol3+trans_dataofftext','NO1' 
    ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol4+type','content_input' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol4+field','bl04notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol4+html+fieldname','bl04notes' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol4+html+class','form-control' ),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
	'tab3+tbl1+tr4+tcol4+width','' );

--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol1+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol1+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol1+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol1+trans_text','bl05' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+field','bl05' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+html+fieldname','bl05' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol1+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol2+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol2+field','bl05notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol2+html+fieldname','bl05notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol2+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol2+width','' ),
--     
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol2+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol2+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol2+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol2+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol2+trans_text','bl06' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr5+tcol2+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+field','bl06' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+html+fieldname','bl06' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol3+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol4+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol4+field','bl06notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol4+html+fieldname','bl06notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol4+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr6+tcol4+width','' ),
-- 
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol1+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol1+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol1+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol1+trans_text','bl07' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+field','bl07' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+html+fieldname','bl07' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol1+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol2+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol2+field','bl07notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol2+html+fieldname','bl07notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol2+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol2+width','' ),
--     
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol2+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol2+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol2+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol2+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol2+trans_text','bl08' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr7+tcol2+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+field','bl08' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+html+fieldname','bl08' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol3+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol4+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol4+field','bl08notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol4+html+fieldname','bl08notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol4+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr8+tcol4+width','' ),
-- 
-- 
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol1+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol1+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol1+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol1+trans_text','bl09' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+field','bl09' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+html+fieldname','bl09' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol1+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol2+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol2+field','bl09notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol2+html+fieldname','bl09notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol2+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol2+width','' ),
--     
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol2+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol2+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol2+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol2+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol2+trans_text','bl10' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr9+tcol2+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+field','bl10' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+html+fieldname','bl10' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol3+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol4+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol4+field','bl10notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol4+html+fieldname','bl10notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol4+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr10+tcol4+width','' ),
-- 
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol1+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol1+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol1+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol1+trans_text','bl11' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+field','bl11' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+html+fieldname','bl11' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol1+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol2+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol2+field','bl11notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol2+html+fieldname','bl11notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol2+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol2+width','' ),
--     
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol2+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol2+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol2+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol2+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol2+trans_text','bl12' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr11+tcol2+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+field','bl12' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+html+fieldname','bl12' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol3+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol4+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol4+field','bl12notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol4+html+fieldname','bl12notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol4+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr12+tcol4+width','' ),
-- 
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol1+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol1+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol1+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol1+trans_text','bl13' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+field','bl13' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+html+fieldname','bl13' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol1+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol2+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol2+field','bl13notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol2+html+fieldname','bl13notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol2+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol2+width','' ),
--     
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol2+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol2+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol2+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol2+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol2+trans_text','bl14' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr13+tcol2+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+field','bl14' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+html+fieldname','bl14' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol3+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol4+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol4+field','bl14notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol4+html+fieldname','bl14notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol4+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr14+tcol4+width','' ),
-- 
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol1+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol1+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol1+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol1+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol1+trans_text','bl15' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+field','bl15' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+html+fieldname','bl15' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol1+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol2+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol2+field','bl15notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol2+html+fieldname','bl15notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol2+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol2+width','' ),
--     
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol2+width','50%' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol2+type','title' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol2+coltype','th' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol2+colspan','2' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol2+trans_text','bl16' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr15+tcol2+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+class','text-center' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+field','bl16' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+html+fieldname','bl16' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+switch+data-on-color','success' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+switch+data-off-color','danger' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+switch+checkedon','AGCHParams::$Static_Bl_True' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+type','content_input_switch' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+trans_dataontext','YES1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol3+trans_dataofftext','NO1' 
--     ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol4+type','content_input' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol4+field','bl16notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol4+html+fieldname','bl16notes' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol4+html+class','form-control' ),
--     (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname=(SELECT current_setting('my.pluginname'))),
-- 	'tab3+tbl1+tr16+tcol4+width','' );