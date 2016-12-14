select baseexec('DROP SEQUENCE IF EXISTS recinv_'||mykatastima||'_seq;CREATE SEQUENCE recinv_'||mykatastima||'_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 START 1 CACHE 1;')
 FROM core_katastima;

update mitra_mitrapk set fklng=0 where fklng is null;
update mitra_mitrapk set mykatastima=(select mykatastimadefault from aab2badmin_basesettings) where mykatastima is null;
update mitra_mitrapk set myid=id where myid is null;
 update mitra_mitrapk set blpublished=1 where blpublished=-1;
 update mitra_mitrapk set fkparentlng=id where fkparentlng is null and id=id;
 update core_available_template_param_value set (aliasname) =(a.availabletemplatealiasname||a.availableparamname||paramvalue) from vf_templateavailable a where a.fkavailabletemplateparam=core_available_template_param_value.fkavailabletemplateparam;
 
 select basemakeconstraints();
 
 ALTER TABLE core_table_relation
           ADD FOREIGN KEY (fkreltype) REFERENCES core_table_relation_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION;
 
 ALTER TABLE core_field
           ADD FOREIGN KEY (fktable) REFERENCES core_table (id) ON UPDATE NO ACTION ON DELETE NO ACTION;
 
         ALTER TABLE core_field
           ADD FOREIGN KEY (fkfieldtype) REFERENCES core_field_type (id) ON UPDATE NO ACTION ON DELETE NO ACTION;
       



SET default_tablespace = '';

SET default_with_oids = false;

DO $$DECLARE tblrow RECORD;
BEGIN
    FOR tblrow IN SELECT dbtablename FROM core_table
    LOOP    
        EXECUTE 'ALTER TABLE ' || tblrow.dbtablename || ' ENABLE TRIGGER ALL';
    END LOOP;
END$$;

 select mvupdatedeallpendends();
select triggersenable();