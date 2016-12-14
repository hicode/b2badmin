delete from core_plugin_param_value 
where mykatastima=:mykatastima and fkplugin in (select id from core_plugin where pluginname='modalgeneralv100_modal_general');











INSERT INTO core_plugin_param_value(
           mykatastima,fkplugin, paramname, paramvalue)
    VALUES
    

    (:mykatastima,(select id from core_plugin where mykatastima=:mykatastima and mykatastima=:mykatastima and pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+attrs+id',''),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+attrs+class','bs-select form-control'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+attrs+name','event_status'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+attrs+data-required','1'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+tblname','corecrmeventstatus'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+kind','production'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+keyval','id'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+showval','statustitle'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+params+fklng','current'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+params+bldeleted','0'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+params+blpublished','1'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventstatus+datasource+params+bldisabled','0'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+attrs+id',''),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+attrs+class','bs-select form-control'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+attrs+name','event_type'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+attrs+data-required','1'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+tblname','corecrmeventtype'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+kind','production'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+keyval','id'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+showval','typetitle'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+params+fklng','current'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+params+bldeleted','0'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+params+blpublished','1'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+eventtype+datasource+params+bldisabled','0'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+general+colored','1'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+general+colour','generalcolour'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+attrs+id',''),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+attrs+class','bs-select form-control'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+attrs+name','assigned_resource'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+tblname','corecrmplugincalendarresource'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+kind','production'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+keyval','id'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+showval','title'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+params+fklng','current'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+params+bldeleted','0'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+params+blpublished','1'),
    (:mykatastima,(select id from core_plugin where pluginname='modalgeneralv100_modal_general'),
        'DlCommonFields+assignedresource+datasource+params+bldisabled','0');