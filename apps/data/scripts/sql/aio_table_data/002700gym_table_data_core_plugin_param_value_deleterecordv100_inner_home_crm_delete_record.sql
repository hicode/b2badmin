    -- DLS20161111
    INSERT INTO core_plugin_param_value(
           fkplugin, paramname, paramvalue)
    VALUES       
    ((select id from core_plugin where pluginname='deleterecordv100_inner_home_crm_delete_record'),
    'mclasses+delpacketrec','corecrmavailablepacket'),
    ((select id from core_plugin where pluginname='deleterecordv100_inner_home_crm_delete_record'),
    'mclasses+delmemberrec','corecrmcustomer'),
    ((select id from core_plugin where pluginname='deleterecordv100_inner_home_crm_delete_record'),
    'mclasses+delservicerec','corecrmavailableservice'),
    ((select id from core_plugin where pluginname='deleterecordv100_inner_home_crm_delete_record'),
    'mclasses+deleventrec','corecrmevent');