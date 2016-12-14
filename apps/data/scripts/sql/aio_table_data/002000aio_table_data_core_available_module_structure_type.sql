INSERT INTO core_available_module_structure_type(id,structuretypename) 
VALUES 
(1,'module'),
 (2,'row'),
 (3,'col'),
 (4,'group-pieces'),
 (5,'group-rows'),
 (6,'piece');

update core_available_module_structure_type set myid=id;
