INSERT INTO core_available_module_structure_type_param(fkavailablemodulestructuretype,fkavailablemodulestructuretypeparamtype,paramname) 
(select core_available_module_structure_type.id,core_available_module_structure_type_param_type.id,'headtitle' from core_available_module_structure_type,
core_available_module_structure_type_param_type where paramtype='text');

