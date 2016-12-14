INSERT INTO core_field_type(
            id, fieldtype)
    VALUES (1,'TEXT'),
(2,'timestamp without time zone'),
(3,'NUMERIC'),
(4,'DATE'),
(5,'BIGINT');

update core_field_type set myid=id;
