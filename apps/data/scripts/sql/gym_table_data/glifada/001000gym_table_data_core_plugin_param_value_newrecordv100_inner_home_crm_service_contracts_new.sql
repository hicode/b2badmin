
    -- DLS20161014
    INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES

        
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+formrows','4'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+extradata','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+title','addnewservicecontracttitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+tblname','vfcrmcustomerm'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+kind','production'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+keyval','id'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+showval','customerfull'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+params+fklng','current'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+params+bldeleted','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+params+blpublished','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+params+bldisabled','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+title+datasource+params+fkcustomerid','request_param3'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+class','col-md-12 col-sm-12'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+id','NewRecord'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-writetbl','corecrmcustomercontract'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-writetblpk','id'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-extra','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-extra-writetbl','corecrmcustomercontractpayment'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-extra-writetblpk','id'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-extra-write-type','multiple'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+data-extra-writetbl-fkparent','fkcustomercontract'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+portlet+attributes+style','padding: 10px; margin-bottom: 5px;'),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+type','input'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+permissions+r','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+permissions+w','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+label+trans_text','prokatavolititle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+label+required','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+label+attributes+class','control-label'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+class','form-control text-center new-record-field'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+type','text'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+name','cc_new_record_advancepayment'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+id','cc_new_record_advancepayment'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+value','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-name','advancepayment'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-type','numberextracheckfield'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-title','advancetitleerror'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-validation-required','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-validation-number','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-validation-min','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-validation-numberecf', '$(''#cc_new_record_cost'').val()'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+attributes+data-operator','<='),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+icon+static','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+icon+placement','L'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+icon+type','fa'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+10+icon+class','fa-euro'),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+type','input'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+permissions+r','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+permissions+w','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+label+trans_text','dtprokatavolittile'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+label+required','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+label+attributes+class','control-label'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+class','form-control text-center new-record-field'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+type','text'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+name','cc_new_record_dtadvancepayment'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+data-name','dtadvancepayment'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+data-type','datepicker'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+data-title','dtprokatavolititleerror'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+20+attributes+data-validation-required','0'),

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+type','input'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+permissions+r','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+permissions+w','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+label+trans_text','discounttitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+label+required','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+label+attributes+class','control-label'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+class','form-control text-center new-record-field'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+type','text'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+name','cc_new_record_discount'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+value','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-name','discountnum'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-type','numberextracheckfield'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-title','discounttitleerror'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-validation-required','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-validation-number','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-validation-min','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-validation-numberecf', '$(''#cc_new_record_cost'').val() - $(''#cc_new_record_advancepayment'').val()'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+attributes+data-operator','<='),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+icon+static','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+icon+placement','L'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+icon+type','fa'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+30+icon+class','fa-euro'),

    

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+type','input'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+permissions+r','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+permissions+w','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+label+trans_text','datestarttitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+label+required','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+label+attributes+class','control-label'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+class','form-control text-center new-record-field'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+type','text'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+name','cc_new_record_dtstart'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+data-name','dtstart'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+data-type','datepicker'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+data-title','datestarterrortitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+4+attributes+data-validation-required','1'),
    
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+type','input'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+permissions+r','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+permissions+w','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+label+trans_text','dateendtitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+label+required','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+label+attributes+class','control-label'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+label+attributes+style','text-align: center;'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+class','form-control text-center new-record-field'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+type','text'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+name','cc_new_record_dtend'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+readonly','readonly'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+data-name','dtend'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+data-type','datepicker'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+data-title','dateenderrortitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+5+attributes+data-validation-required','1'),
    
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+type','input'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+permissions+r','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+permissions+w','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+label+trans_text','costtitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+label+required','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+label+attributes+class','control-label'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+class','form-control text-center new-record-field'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+type','text'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+name','cc_new_record_cost'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+id','cc_new_record_cost'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-name','price'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-type','number'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-title','costerrortitle'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-validation-required','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-validation-number','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-validation-min','0'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+attributes+data-validation-max','nolimit'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+icon+static','1'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+icon+placement','L'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+icon+type','fa'),
    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and pluginname='newrecordv100_inner_home_crm_service_contracts_new'),
    'newrecord+fields+6+icon+class','fa-euro');