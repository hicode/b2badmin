CREATE OR REPLACE FUNCTION tr_core_aud_function()
  RETURNS trigger AS
    $BODY$
        DECLARE
        _new_bldeleted bigint;
        _table_name text;
        _table_name_tmp text;
        _insert_values text;
            BEGIN
                _new_bldeleted := new.bldeleted;
                _table_name :=TG_TABLE_NAME||'_aud';
                _table_name_tmp :=_table_name||'_tmp';
                _insert_values := '$1.*,DEFAULT,DEFAULT,'||quote_literal(TG_TABLE_NAME);
                PERFORM 1
                FROM   pg_catalog.pg_tables 
                WHERE  tablename = _table_name
                AND    schemaname = TG_TABLE_SCHEMA ;
                IF NOT FOUND THEN
                    EXECUTE 'CREATE TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name_tmp) || '() inherits ('||TG_TABLE_SCHEMA ||'.' || quote_ident(TG_TABLE_NAME) || ','||TG_TABLE_SCHEMA ||'.mitra_mitrapk_aud) WITH ( OIDS=FALSE );CREATE TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' as select * from '||TG_TABLE_SCHEMA ||'.'||quote_ident(_table_name_tmp)||';';
                    EXECUTE 'DROP TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name_tmp) || ';';
                    EXECUTE 'ALTER TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' INHERIT '||TG_TABLE_SCHEMA ||'.mitra_mitrapk_aud;';
                    EXECUTE 'ALTER TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' OWNER TO '||(SELECT dbusername FROM aab2badmin_basesettings);
                    EXECUTE 'GRANT ALL ON TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' TO '||(SELECT dbusername FROM aab2badmin_basesettings);
                END IF;
                IF (TG_WHEN='BEFORE') THEN
                    NEW.dt_updated=now();
                    IF(NEW.bldisabled=1) THEN
                        NEW.dt_disabled=now();
                    END IF;
                    IF(NEW.fkparentlng is null) THEN
                        NEW.fkparentlng=NEW.id;
                    END IF;
                    RETURN NEW;
                ELSIF (TG_WHEN='AFTER') THEN
                    IF (TG_OP='INSERT') THEN
                        EXECUTE 'INSERT INTO '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' VALUES ('||_insert_values||');' USING NEW;
                    ELSE
                        EXECUTE 'INSERT INTO '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' VALUES ('||_insert_values||');' USING OLD;
                        IF (_new_bldeleted = 1) THEN 
                            EXECUTE 'INSERT INTO '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' VALUES ('||_insert_values||');' USING NEW;
                            EXECUTE 'DELETE FROM '||TG_TABLE_SCHEMA ||'.' || TG_TABLE_NAME || ' WHERE ID='||NEW.ID;
                        END IF;
                    END IF;
                    EXECUTE 'UPDATE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' set tbl_aud= '||quote_literal(TG_TABLE_NAME)||' where tbl_aud is null;';
                END IF;
                IF (_new_bldeleted = 1) THEN 
                    RETURN null;
                ELSE
                    RETURN NEW;
                END IF;               

            END;
    $BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;


select baseexec('ALTER FUNCTION '||schemaname||'.tr_core_aud_function() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.tr_core_aud_function() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;


DROP FUNCTION IF EXISTS triggersenable();
CREATE FUNCTION triggersenable() returns numeric language plpgsql volatile
  AS $f$
    BEGIN
        perform baseexec('ALTER TABLE '||schemaname||'.'||tablename||' ENABLE TRIGGER ALL;') from pg_catalog.pg_tables 
        where schemaname=(select schemaname from aab2badmin_basesettings) and tablename not in ('aab2badmin_basesettings','mitra_mitrapk');
return 1;

END;
 $f$;
select baseexec('ALTER FUNCTION '||schemaname||'.triggersenable() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.triggersenable() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;


DROP FUNCTION IF EXISTS triggersdisable();
CREATE FUNCTION triggersdisable() returns numeric language plpgsql volatile
  AS $f$
    BEGIN
        perform baseexec('ALTER TABLE '||schemaname||'.'||tablename||' DISABLE TRIGGER ALL;') from pg_catalog.pg_tables 
        where schemaname=(select schemaname from aab2badmin_basesettings) and tablename not in ('aab2badmin_basesettings','mitra_mitrapk');
return 1;

END;
 $f$;
select baseexec('ALTER FUNCTION '||schemaname||'.triggersdisable() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.triggersdisable() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;



DROP FUNCTION IF EXISTS mvupdatedependends(text,text);
CREATE FUNCTION mvupdatedependends(schemaname text, tblname text) returns text language plpgsql volatile
  AS $f$
  DECLARE
	qrytxt text;
        myret TEXT;
	tblrow RECORD;
        
	tblrows CURSOR(schemaname text,tblname text) 
	 FOR WITH RECURSIVE vlist AS (
		    SELECT c.oid::REGCLASS AS view_name
		      FROM pg_class c,pg_namespace where c.relnamespace=pg_namespace.oid
			and
				nspname = schemaname
			and
				relname = tblname
		     UNION ALL
		    SELECT DISTINCT r.ev_class::REGCLASS AS view_name
		      FROM pg_depend d
		      JOIN pg_rewrite r ON (r.oid = d.objid)
		      JOIN vlist ON (vlist.view_name = d.refobjid)
		     WHERE d.refobjsubid != 0
		)
		SELECT view_name FROM vlist where view_name::text like '%\_m';
    BEGIN
    myret:='Dependends for '||schemaname||'.'||tblname;
	OPEN tblrows(schemaname,tblname);
	LOOP
		FETCH tblrows INTO tblrow;
		EXIT WHEN NOT FOUND;
		qrytxt:='REFRESH MATERIALIZED VIEW '||tblrow.view_name||' WITH DATA ';
                myret:=myret||','||tblrow.view_name;
--		RAISE NOTICE '%', qrytxt;
		perform baseexec(qrytxt);		
	END LOOP;
	CLOSE tblrows;
      RETURN myret;
    END;
$f$;

ALTER FUNCTION mvupdatedependends( text,text) OWNER TO postgres;
select baseexec('ALTER FUNCTION '||schemaname||'.mvupdatedependends(text,text) SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;


DROP FUNCTION IF EXISTS mvupdatedeallpendends();

CREATE FUNCTION mvupdatedeallpendends()
RETURNS INT AS $$
DECLARE
    r RECORD;
    schema_arg TEXT;
BEGIN
    select schemaname into schema_arg from aab2badmin_basesettings;
    RAISE NOTICE 'Refreshing materialized view in schema %', schema_arg;
    FOR r IN SELECT matviewname FROM pg_matviews WHERE schemaname = schema_arg 
    LOOP
        RAISE NOTICE 'Refreshing %.%', schema_arg, r.matviewname;
        EXECUTE 'REFRESH MATERIALIZED VIEW ' || schema_arg || '.' || r.matviewname; 
    END LOOP;

    RETURN 1;
END 
$$ LANGUAGE plpgsql;

ALTER FUNCTION mvupdatedeallpendends() OWNER TO postgres;
select baseexec('ALTER FUNCTION '||schemaname||'.mvupdatedeallpendends() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;



-- DROP FUNCTION IF EXISTS mvupdatedeallpendends();
-- CREATE FUNCTION mvupdatedeallpendends() returns text language plpgsql volatile
--   AS $f$
--     DECLARE tblrow1 RECORD;
-- 	tblrow2 RECORD;
-- 	qrytxt text;
-- 		myret TEXT;
-- 	StartTime timestamptz;
-- 	  EndTime timestamptz;
-- 	  Delta interval;
-- 	 tblrows CURSOR(schemaname text,tblname text) 
-- 		 FOR WITH RECURSIVE vlist AS (
-- 			    SELECT c.oid::REGCLASS AS view_name
-- 			      FROM pg_class c,pg_namespace where c.relnamespace=pg_namespace.oid
-- 				and
-- 					nspname = schemaname
-- 				and
-- 					relname = tblname
-- 			     UNION ALL
-- 			    SELECT DISTINCT r.ev_class::REGCLASS AS view_name
-- 			      FROM pg_depend d
-- 			      JOIN pg_rewrite r ON (r.oid = d.objid)
-- 			      JOIN vlist ON (vlist.view_name = d.refobjid)
-- 			     WHERE d.refobjsubid != 0
-- 			)
-- 			SELECT view_name FROM vlist where view_name::text like '%\_m';
-- 		    BEGIN
-- 			DROP TABLE IF EXISTS TMPALLMVUPDATE;
-- 			CREATE TEMP TABLE TMPALLMVUPDATE (
-- 			    id        bigserial ,
-- 			    cmd       text
-- 			);
-- 		    
-- 		       FOR tblrow1 IN SELECT nspname,relname FROM pg_class c,pg_namespace where c.relnamespace=pg_namespace.oid
-- 			     and  relkind = 'r'
-- 			     and nspname =(select schemaname from aab2badmin_basesettings)
-- 		       LOOP 
-- 				OPEN tblrows(tblrow1.nspname,tblrow1.relname);
-- 				LOOP
-- 					FETCH tblrows INTO tblrow2;
-- 					EXIT WHEN NOT FOUND;
-- 					
-- 					qrytxt:='REFRESH MATERIALIZED VIEW '||tblrow2.view_name||' WITH DATA ';
-- 					myret:=myret||','||tblrow2.view_name;
-- 					INSERT INTO TMPALLMVUPDATE(
-- 						     cmd)
-- 					    VALUES (qrytxt);		    		
-- 				END LOOP;			
-- 				CLOSE tblrows;        
-- 		      END LOOP;
-- 	    perform baseexec(cmd) from (
-- 	SELECT min(id) id, cmd
-- 	  FROM TMPALLMVUPDATE group by cmd) a order by id asc;
--         RETURN '1';
--     END;
-- $f$;
-- ALTER FUNCTION mvupdatedeallpendends() OWNER TO postgres;




DROP FUNCTION IF EXISTS basemakeconstraints();
CREATE FUNCTION basemakeconstraints() returns numeric language plpgsql volatile
  AS $f$
    BEGIN
        REVOKE ALL ON SCHEMA public FROM PUBLIC;
        REVOKE ALL ON SCHEMA public FROM postgres;
        GRANT ALL ON SCHEMA public TO postgres;
        GRANT ALL ON SCHEMA public TO PUBLIC;
        perform baseexec('ALTER SCHEMA '||schemaname||' OWNER TO '||dbusername) from aab2badmin_basesettings;



perform baseexec('REVOKE ALL ON TABLE '||nspname||'.'||c.oid::regclass::text||' FROM PUBLIC;GRANT ALL ON TABLE '||nspname||'.'||c.oid::regclass::text||' TO '||(select dbusername from aab2badmin_basesettings)||';ALTER TABLE '||nspname||'.'||c.oid::regclass::text||' OWNER TO '||(select dbusername from aab2badmin_basesettings)||';')
 FROM pg_class c,pg_namespace where c.relnamespace=pg_namespace.oid
        and  relkind = 'm'
        and nspname = (select schemaname from aab2badmin_basesettings);

perform baseexec('REVOKE ALL ON TABLE '||nspname||'.'||c.oid::regclass::text||' FROM PUBLIC;GRANT ALL ON TABLE '||nspname||'.'||c.oid::regclass::text||' TO '||(select dbusername from aab2badmin_basesettings)||';ALTER TABLE '||nspname||'.'||c.oid::regclass::text||' OWNER TO '||(select dbusername from aab2badmin_basesettings)||';')
 FROM pg_class c,pg_namespace where c.relnamespace=pg_namespace.oid
        and  relkind = 'S'
        and nspname = (select schemaname from aab2badmin_basesettings) 
        and relname not like 'mitra_%';


        perform baseexec('REVOKE ALL ON TABLE '||table_name||' FROM PUBLIC;GRANT ALL ON TABLE '||table_name||' TO '||(select dbusername from aab2badmin_basesettings)||';ALTER TABLE '||table_name||' OWNER TO '||(select dbusername from aab2badmin_basesettings)||';') from information_schema.tables 
        where table_schema=(select schemaname from aab2badmin_basesettings) and table_name<>'aab2badmin_basesettings';


        perform baseexec('create trigger tra_'||tablename||' after insert or update on '||schemaname||'.'||tablename||' for each row execute procedure '||schemaname||'.tr_core_aud_function();ALTER TABLE '||schemaname||'.'||tablename||' DISABLE TRIGGER ALL;') from pg_catalog.pg_tables 
        where 
                schemaname=(select schemaname from aab2badmin_basesettings) 
            and 
                tablename not in ('aab2badmin_basesettings','mitra_mitrapk') 
            and 
                tablename not like ('%_aud')
            and
                'tra_'||tablename not in (SELECT tgname
                                            FROM   pg_trigger
                                            WHERE  tgrelid = (schemaname||'.'||tablename)::regclass
                                        );

        perform baseexec('create trigger trb_'||tablename||' before insert or update on '||schemaname||'.'||tablename||' for each row execute procedure '||schemaname||'.tr_core_aud_function();ALTER TABLE '||schemaname||'.'||tablename||' DISABLE TRIGGER ALL;') from pg_catalog.pg_tables 
        where 
                schemaname=(select schemaname from aab2badmin_basesettings) 
            and 
                tablename not in ('aab2badmin_basesettings','mitra_mitrapk') 
            and 
                tablename not like ('%_aud')
            and
                'trb_'||tablename not in (SELECT tgname
                                            FROM   pg_trigger
                                            WHERE  tgrelid = (schemaname||'.'||tablename)::regclass
                                        );







        perform baseexec('ALTER TABLE ONLY '||table_name||' ALTER COLUMN blpublished SET DEFAULT -1;ALTER TABLE ONLY '||table_name||' ALTER COLUMN dt_updated SET DEFAULT now();ALTER TABLE ONLY '||table_name||' ALTER COLUMN dt_created SET DEFAULT now();ALTER TABLE ONLY '||table_name||' ALTER COLUMN bldeleted SET DEFAULT 0;ALTER TABLE ONLY '||table_name||' ALTER COLUMN fklng SET DEFAULT 0;') from information_schema.tables 
        where table_schema=(select schemaname from aab2badmin_basesettings) and table_name<>'aab2badmin_basesettings' and (table_name like 'core_%'  or table_name like (select tblgenprefix from aab2badmin_basesettings)||'%');





        perform baseexec('ALTER TABLE '||table_name||' ADD CONSTRAINT mycon'||md5(table_name||',myid,mykatastima')||' UNIQUE (myid,mykatastima)') from information_schema.tables 
        where 
            'mycon'||md5(table_name||',myid,mykatastima') not in (SELECT conname FROM pg_constraint) 
        and 
            table_schema=(select schemaname from aab2badmin_basesettings) 
        and 
            table_name<>'aab2badmin_basesettings' 
        and
            table_name not like '%_aud'
        and 
            (table_name like 'core_%'  or table_name like (select tblgenprefix from aab2badmin_basesettings)||'%');





              perform baseexec('ALTER TABLE '||table_name||' ADD PRIMARY KEY (id);') 
                from 
                    information_schema.tables 
                where 
                    table_schema=(select schemaname from aab2badmin_basesettings) 
                and 
                    table_name not like '%_aud' 
                and
                    (
                            table_name like 'core_%'  
                        or 
                            (
                                    table_name like (select tblgenprefix from aab2badmin_basesettings)||'%' 
                                and 
                                    (
                                            table_name not like '%fe' 
                                        and 
                                            table_name not like '%update' 
                                    )
                            )
                    )
                and 
                    table_schema||table_name not in (select tc.table_schema||tc.table_name
                                            from 
                                                information_schema.table_constraints tc
                                                join information_schema.key_column_usage kc 
                                                    on kc.table_name = tc.table_name and kc.table_schema = tc.table_schema
                                            where 
                                                tc.constraint_type = 'PRIMARY KEY'
                                                --and kc.position_in_unique_constraint is not null
                                            order by tc.table_schema,
                                                     tc.table_name,
                                                     kc.position_in_unique_constraint);


        
        perform baseexec('ALTER TABLE '||table_name||' ADD FOREIGN KEY (fkusercreated) REFERENCES core_users (id) ON UPDATE NO ACTION ON DELETE NO ACTION;ALTER TABLE ONLY '||table_name||' ALTER COLUMN fkusercreated SET DEFAULT 1;') from information_schema.tables 
        where table_schema=(select schemaname from aab2badmin_basesettings) and table_name not like '%_aud' and table_name<>'aab2badmin_basesettings' and (table_name like 'core_%'  or table_name like (select tblgenprefix from aab2badmin_basesettings)||'%')
        and table_name <>'core_users'
        and table_schema||table_name not in (select tc.table_schema||tc.table_name
                                            from 
                                                information_schema.table_constraints tc
                                                join information_schema.key_column_usage kc 
                                                    on kc.table_name = tc.table_name and kc.table_schema = tc.table_schema
                                            where 
                                                tc.constraint_type = 'FOREIGN KEY'
                                                and kc.position_in_unique_constraint is not null
                                                and column_name='fkusercreated'
                                            order by tc.table_schema,
                                                     tc.table_name,
                                                     kc.position_in_unique_constraint);


        




        perform baseexec('ALTER TABLE '||table_name||' ADD FOREIGN KEY (fkuserlastupdated) REFERENCES core_users (id) ON UPDATE NO ACTION ON DELETE NO ACTION;ALTER TABLE ONLY '||table_name||' ALTER COLUMN fkuserlastupdated SET DEFAULT 1;') from information_schema.tables 
        where table_schema=(select schemaname from aab2badmin_basesettings) and table_name not like '%_aud' and table_name<>'aab2badmin_basesettings' and (table_name like 'core_%'  or table_name like (select tblgenprefix from aab2badmin_basesettings)||'%')
        and table_name <>'core_users'
        and table_schema||table_name not in (select tc.table_schema||tc.table_name
                                            from 
                                                information_schema.table_constraints tc
                                                join information_schema.key_column_usage kc 
                                                    on kc.table_name = tc.table_name and kc.table_schema = tc.table_schema
                                            where 
                                                tc.constraint_type = 'FOREIGN KEY'
                                                and kc.position_in_unique_constraint is not null
                                                and column_name='fkuserlastupdated'
                                            order by tc.table_schema,
                                                     tc.table_name,
                                                     kc.position_in_unique_constraint);





      RETURN 1;
    END;
$f$;

select baseexec('ALTER FUNCTION '||schemaname||'.basemakeconstraints() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basemakeconstraints() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;






DROP FUNCTION IF EXISTS basecreateview(text);
CREATE OR REPLACE FUNCTION basecreateview(myviewname text)
  RETURNS integer AS
$BODY$
        DECLARE
        dbviewnametxt text;
        dbviewnamefetxt text;
        remarkstxt text;
    selecttxt text;
    fromtxt text;
    extrawheretxt text;
    wheretxt text;
    ordertxt text;
    qrytxt text;
    finalqrytxt text;
    finalqrytxtfe text;
    ddlcmdtxt text;
    ddlcmdfetxt text;
    dbusername text;
BEGIN
    execute 'select dbusername from aab2badmin_basesettings' into dbusername;
    UPDATE core_view
        SET dbviewname='view'||id::text
     WHERE id=id
        and dbviewname is null; 

     UPDATE core_view
        SET dbviewnamefe=dbviewname||'fe'
     WHERE id=id
        and dbviewnamefe is null; 

    qrytxt := 'select ''DROP VIEW IF EXISTS ''||dbviewname||'';'' 
            from 
                vf_viewfields 
            where
                viewname='''||myviewname||'''
    ';
    perform baseexec(qrytxt);

    qrytxt := 'select ''DROP VIEW IF EXISTS ''||dbviewname||''fe;'' 
            from 
                vf_viewfields 
            where
                viewname='''||myviewname||'''
    ';
    perform baseexec(qrytxt);

    qrytxt := 'select ''CREATE OR REPLACE VIEW ''||dbviewname||'' AS '' 
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into dbviewnametxt;

    qrytxt := 'select ''CREATE OR REPLACE VIEW ''||dbviewnamefe||'' AS '' 
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into dbviewnamefetxt;

    qrytxt := 'select '' ''||coalesce(remarks,'' '') 
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into remarkstxt;


    qrytxt := 'select ddlcmd
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into ddlcmdtxt;

    qrytxt := 'select ddlcmdfe
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into ddlcmdfetxt;

    IF ddlcmdtxt is not null THEN
	
	ddlcmdtxt:=dbviewnametxt||ddlcmdtxt||';';
	
        IF ddlcmdfetxt is null THEN
            qrytxt:='UPDATE core_view
                    SET ddlcmdfe=ddlcmd
                    WHERE viewname='''||myviewname||'''';
            perform baseexec(qrytxt);
            qrytxt := 'select ddlcmdfe
            from 
                core_view 
            where
                viewname='''||myviewname||'''
	    ';
	    execute qrytxt into ddlcmdfetxt;
        END IF;
        ddlcmdfetxt:=dbviewnamefetxt||ddlcmdfetxt||';';
    ELSE

        qrytxt := 'select string_agg(colselect, '', '')||'',1 mydl'' from ( select dbtablename||''.''||dbfieldname||'' "''||aliasname||''"'' colselect
                    from 
                        core_view_select,
                        vf_viewfields
                    where
                        viewname='''||myviewname||'''
                        and
                        core_view_select.fkviewtablefield = vf_viewfields.fkviewtablefield
                    order by core_view_select.id) a
            ';
        execute qrytxt into selecttxt;



        --RAISE NOTICE 'selecttxt %', selecttxt;

        qrytxt := 'select '' from ''||string_agg(fromselect, '', '') from ( select distinct(''''||dbtablename) fromselect
                from 
                    vf_viewfields
                where
                    viewname='''||myviewname||''') a
        ';
        execute qrytxt into fromtxt;

        --RAISE NOTICE 'fromtxt %', fromtxt;


        qrytxt := 'select '' and ''||string_agg(fromselect, ''and '') from ( select distinct(''''||dbtablename||''.bldeleted=0 and ''||dbtablename||''.updatestatus=1 and ''||dbtablename||''.blpublished=1 '') fromselect
                from 
                    vf_viewfields
                where
                    viewname='''||myviewname||'''
                    and
                    (
                        dbtablename like '''||(select tblgenprefix from aab2badmin_basesettings)||'%''
                        or
                        dbtablename like '''||(select tblcoreprefix from aab2badmin_basesettings)||'%''
                    )
                ) a
        ';
        execute qrytxt into extrawheretxt;
        --extrawheretxt:=' ';
        qrytxt := 'select '' where ''||string_agg(finalrowwhere, '' '') from ( select finalrowwhere
                from 
                    vf_viewwherefinalunionaggr
                where
                    viewname='''||myviewname||''' order by ordering asc) a
        ';
        execute qrytxt into wheretxt;

        --RAISE NOTICE 'wheretxt %', wheretxt;

        qrytxt := 'select '' order by ''||string_agg(colorder, '', '') from ( select dbtablename||''.''||dbfieldname||'' ''||orderoperator colorder
                from 
                    core_view_order,
                    vf_viewfields
                where
                    viewname='''||myviewname||'''
                    and
                    core_view_order.fkviewtablefield = vf_viewfields.fkviewtablefield
                    order by core_view_order.ordering asc) a
        ';
        execute qrytxt into ordertxt;

        --RAISE NOTICE 'ordertxt %', ordertxt;
        wheretxt:=coalesce(wheretxt,' where (1=1) ');
        finalqrytxt:=dbviewnametxt||' select row_number() OVER ('||ordertxt||') AS id ,'||selecttxt||fromtxt||wheretxt||coalesce(ordertxt,' ')||';';
        ddlcmdtxt:=finalqrytxt;
        
        finalqrytxtfe:=' select row_number() OVER ('||ordertxt||') AS id ,'||selecttxt||fromtxt||wheretxt||coalesce(extrawheretxt,' ')||coalesce(ordertxt,' ')||';';
        finalqrytxtfe:=regexp_replace(finalqrytxtfe, '(tbl|view)([0-9]{1,12})','\1\2fe','g');
        finalqrytxtfe:=dbviewnamefetxt||finalqrytxtfe;
        ddlcmdfetxt:=finalqrytxtfe;
        
    
    END IF;
    perform baseexec(ddlcmdtxt);
    perform baseexec(ddlcmdfetxt);
    RAISE NOTICE 'ddlcmdfetxt %', ddlcmdfetxt;
    qrytxt := 'select ''ALTER TABLE ''||dbviewname||'' OWNER TO '||dbusername||';'' 
                from 
                    core_view 
                where
                    viewname='''||myviewname||'''
    ';
    
    execute qrytxt into finalqrytxt;
    
    execute finalqrytxt;
    execute regexp_replace(finalqrytxt, '(tbl|view)([0-9]{1,12})','\1\2fe','g');

    qrytxt := 'select ''COMMENT ON VIEW ''||dbviewname||'' IS '''''||myviewname||remarkstxt||''''';'' 
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into finalqrytxt;
    execute finalqrytxt;
    qrytxt := 'select ''COMMENT ON VIEW ''||dbviewname||''fe IS '''''||myviewname||remarkstxt||''''';'' 
            from 
                core_view 
            where
                viewname='''||myviewname||'''
    ';
    execute qrytxt into finalqrytxt;
    execute finalqrytxt;

	qrytxt:='UPDATE core_view
        SET ddlcmd=(select pg_get_viewdef((select ''''||dbviewname from core_view where viewname='''||myviewname||'''), true)),
        ddlcmdfe=(select pg_get_viewdef((select ''''||dbviewnamefe from core_view where viewname='''||myviewname||'''), true))
    WHERE viewname='''||myviewname||'''';
    RAISE NOTICE 'qrytxt %', qrytxt;
    execute qrytxt;
    
    
    return 1;

END
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;


CREATE OR REPLACE FUNCTION basecreatetblcol(myTG_TABLE_SCHEMA text,myTG_TABLE_NAME text,myid numeric, myremarks text,mycore_tabletablename text,mycore_fieldfktable numeric,mycore_fieldfieldname text, mycore_fieldfkfieldtype numeric,myprefix text)
  RETURNS integer AS
$BODY$
        DECLARE
	tbls_gen_prefix text;
        cols_gen_prefix text;
        gen_remarks text;
        blcheck numeric;
        fieldtype text; 
        core_tbl text;
        core_sch_tbl text;
	core_sch_tbl_col text;
	qrytxt text;
	col_name text;	
        tr_name text;dbusername text;
BEGIN
        execute 'select dbusername from aab2badmin_basesettings' into dbusername;

	myprefix:=coalesce(myprefix,' ');
	execute 'select tblgenprefix from aab2badmin_basesettings' into tbls_gen_prefix;
        execute 'select colgenprefix from aab2badmin_basesettings' into cols_gen_prefix;
        gen_remarks :=coalesce(myremarks,' ');
        core_tbl :=tbls_gen_prefix||myid||myprefix;
        core_sch_tbl :=myTG_TABLE_SCHEMA||'.'||core_tbl;
        tr_name := 'tr_'||myTG_TABLE_SCHEMA||'_'||core_tbl;
	if lower(myTG_TABLE_NAME)='core_table' then
            gen_remarks :=gen_remarks||' '||mycore_tabletablename;
            if myprefix=' ' then
                qrytxt := 'create table if not exists '||core_sch_tbl||' ( PRIMARY KEY (id) ) INHERITS (mitra_mitrapk) WITH ( OIDS = FALSE )';
                execute qrytxt;
                qrytxt := 'DROP TRIGGER IF EXISTS '||tr_name||' on '||core_sch_tbl;
                execute qrytxt;
                qrytxt := 'CREATE TRIGGER '||tr_name||' AFTER INSERT OR UPDATE ON '||core_sch_tbl||' FOR EACH ROW EXECUTE PROCEDURE fntr_tbl_general()';
                execute qrytxt;
                qrytxt := 'ALTER TABLE ' || core_sch_tbl || ' DISABLE TRIGGER ALL';
                execute qrytxt;
            else
                qrytxt := 'create table if not exists '||core_sch_tbl||' ( ) INHERITS (mitra_mitrapk) WITH ( OIDS = FALSE )';
                execute qrytxt;
            end if;
            
            qrytxt := 'COMMENT ON COLUMN '||core_sch_tbl||'.updatestatus IS ''0=never... 1=updated with front 2=need update''';
            execute qrytxt;
            qrytxt := 'COMMENT ON TABLE '||core_sch_tbl||' IS '''||gen_remarks||'''';
            execute qrytxt;
            qrytxt := 'ALTER TABLE '||core_sch_tbl||' OWNER TO '||dbusername;
            execute qrytxt;
        elsif lower(myTG_TABLE_NAME)='core_field'  then
            gen_remarks :=gen_remarks||' '||mycore_fieldfieldname;
            col_name:=cols_gen_prefix||myid;
            core_tbl :=tbls_gen_prefix||mycore_fieldfktable||myprefix;
            core_sch_tbl :=myTG_TABLE_SCHEMA||'.'||core_tbl;
            core_sch_tbl_col:=core_sch_tbl||'.'||col_name;
            begin
                qrytxt := 'select count(*) from information_schema.columns where table_schema='''||myTG_TABLE_SCHEMA||''' and table_name='''||core_tbl||''' and column_name='''||col_name||'''';
                execute qrytxt into blcheck;
                if blcheck=0 then
                    qrytxt := 'SELECT fieldtype from '||myTG_TABLE_SCHEMA||'.core_field_type where id='||mycore_fieldfkfieldtype ;
                            execute qrytxt into fieldtype;
                    qrytxt := 'ALTER TABLE '||core_sch_tbl||' ADD COLUMN '||col_name||' '||fieldtype ;
                    execute qrytxt;
                end if;
            EXCEPTION
                WHEN duplicate_column THEN RAISE NOTICE 'column  already exists';
            end;
            qrytxt := 'COMMENT ON COLUMN '||core_sch_tbl_col||' IS '''||gen_remarks||'''' ;
            execute qrytxt;
	end if;
    return 1;

END
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;
select baseexec('ALTER FUNCTION '||schemaname||'.basecreatetblcol( text, text, numeric, text, text, numeric, text,  numeric, text) OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basecreatetblcol( text, text, numeric, text, text, numeric, text,  numeric, text) SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;







DROP FUNCTION IF EXISTS basemakefeupdate(text,text);
CREATE OR REPLACE FUNCTION basemakefeupdate(schemaname text,tblname text) RETURNS integer AS $$
DECLARE
qrytxt text;
BEGIN
                qrytxt := 'INSERT INTO '||schemaname||'.'||tblname||'update select * from '||schemaname||'.'||tblname;
                execute qrytxt;
                qrytxt := 'INSERT INTO '||schemaname||'.'||tblname||'fe select * from '||schemaname||'.'||tblname||' where updatestatus = 1 and id not in (select id from '||schemaname||'.'||tblname||'fe )';
                execute qrytxt;
		qrytxt :='SELECT
			''UPDATE '||schemaname||'.'||tblname||'fe SET   ('' || string_agg(quote_ident(column_name), '','') || '') = ('' || string_agg(''tbl277.'' || quote_ident(column_name), '','') || '') 
				FROM   '||schemaname||'.'||tblname||' WHERE '||tblname||'.updatestatus = 1 and '||tblname||'.id = '||tblname||'fe.id''
			FROM   information_schema.columns
			WHERE  table_name   = '''||tblname||''' 
			AND    table_schema = '''||schemaname||'''
			AND    column_name <> ''id''';
		execute qrytxt;
                
        
	return 1;
end;
$$ LANGUAGE plpgsql;

select baseexec('ALTER FUNCTION '||schemaname||'.basemakefeupdate(text,text) OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basemakefeupdate(text,text) SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;




DROP FUNCTION IF EXISTS basemakeallfeupdate();
CREATE OR REPLACE FUNCTION basemakeallfeupdate() RETURNS integer AS $$
DECLARE
    tblrow RECORD;
    qrytxt text;
    BEGIN
        FOR tblrow IN SELECT dbtablename FROM core_table
    LOOP    
    RAISE NOTICE 'tblrow.dbtablename %', tblrow.dbtablename;
        perform basemakefeupdate((select schemaname from aab2badmin_basesettings),tblrow.dbtablename);
    END LOOP;
	return 1;
end;
$$ LANGUAGE plpgsql;

select baseexec('ALTER FUNCTION '||schemaname||'.basemakeallfeupdate() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basemakeallfeupdate() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;



DROP FUNCTION IF EXISTS basemakeallfeviews();
CREATE OR REPLACE FUNCTION basemakeallfeviews() RETURNS integer AS $$
DECLARE
    tblrow RECORD;
    qrytxt text;
    newviewname text;
    BEGIN
    FOR tblrow IN SELECT distinct(maincontrollername) maincontrollername  FROM vf_site_settings
    LOOP    
        
        newviewname := 'view'||tblrow.maincontrollername||'sitesettings';

        qrytxt := 'INSERT INTO core_view(viewname) VALUES ('''||newviewname||''')';
        RAISE NOTICE 'step1 %', qrytxt;
        perform baseexec(qrytxt);
        
        perform baseexec('INSERT INTO core_view_table_field(fkview, dbtablename,dbfieldname,remarks)(select core_view.id fkview,''vf_site_settings'', column_name,column_name from information_schema.columns, core_view WHERE table_schema = '''||(select schemaname from aab2badmin_basesettings)||''' and table_name=''vf_site_settings'' and viewname='''||newviewname||''' and column_name<>''id'')');
        
        qrytxt := 'INSERT INTO core_view_select(fkviewtablefield, aliasname)(SELECT id,  remarks FROM core_view_table_field where fkview=(select id from core_view where viewname='''||newviewname||''') order by id)';
        RAISE NOTICE 'step3 %', qrytxt;
        perform baseexec(qrytxt);

	qrytxt := 'INSERT INTO core_view_order(fkviewtablefield, orderoperator, ordering)(SELECT id,''asc'',1 FROM core_view_table_field where fkview=(select id from core_view where viewname='''||newviewname||''') and dbtablename=''vf_site_settings'' and dbfieldname=''paramname'' )';
	RAISE NOTICE 'step4 %', qrytxt;
        perform baseexec(qrytxt);
	
        
        qrytxt := 'INSERT INTO core_view_where_value(fkviewtablefield, wherevalue, whereoperator, wherealias) VALUES ( (SELECT fkviewtablefield FROM vf_viewfields where viewname='''||newviewname||''' and dbfieldname=''maincontrollername'' ), '''''''||tblrow.maincontrollername||''''''', ''='', ''alias1'||newviewname||''' )';
        RAISE NOTICE 'step5 %', qrytxt;
        perform baseexec(qrytxt);

        
        qrytxt := 'INSERT INTO core_view_where_logical_connections(fkviewwherevalue, ordering) VALUES ((SELECT id FROM vf_viewwherevalueselect where wherealias=''alias1'||newviewname||'''), 1)';
        RAISE NOTICE 'step6 %', qrytxt;
        perform baseexec(qrytxt);
        
        qrytxt := 'select basecreateview('''||newviewname||''')';
        RAISE NOTICE 'step7 %', qrytxt;
        perform baseexec(qrytxt);
        
        --perform baseexec('CREATE OR REPLACE VIEW '||newviewname||' AS SELECT * from vf_site_settings where maincontrollername='''||tblrow.maincontrollername||'''');
        --perform baseexec('ALTER TABLE '||newviewname||' OWNER TO b2b');
        --perform baseexec('GRANT ALL ON TABLE '||newviewname||' TO b2b');

    END LOOP;
	return 1;
end;
$$ LANGUAGE plpgsql;

select baseexec('ALTER FUNCTION '||schemaname||'.basemakeallfeviews() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basemakeallfeviews() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;


--DROP FUNCTION fntr_tbl_general();

CREATE OR REPLACE FUNCTION fntr_tbl_general()
  RETURNS trigger AS
    $BODY$
    DECLARE
    myTG_TABLE_SCHEMA text;
    myTG_TABLE_NAME text;
    myID numeric;
    qrytxt text;
    BEGIN
	myTG_TABLE_SCHEMA:=TG_TABLE_SCHEMA;
	myTG_TABLE_NAME:=TG_TABLE_NAME;
	if TG_WHEN='AFTER' then
		myID=new.id;
                qrytxt := 'INSERT INTO '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||'update select * from '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||' where id='||myID::TEXT;
                execute qrytxt;
                qrytxt := 'INSERT INTO '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||'fe select * from '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||' where updatestatus = 1 and id='||myID::TEXT||' and id not in (select id from '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||'fe where id='||myID::TEXT||')';
                execute qrytxt;
		qrytxt :='SELECT
			''UPDATE '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||'fe SET   ('' || string_agg(quote_ident(column_name), '','') || '') = ('' || string_agg(''tbl277.'' || quote_ident(column_name), '','') || '') 
				FROM   '||myTG_TABLE_SCHEMA||'.'||myTG_TABLE_NAME||' WHERE '||myTG_TABLE_NAME||'.updatestatus = 1 and '||myTG_TABLE_NAME||'.id='||myID::TEXT||' and  '||myTG_TABLE_NAME||'.id = '||myTG_TABLE_NAME||'fe.id''
			FROM   information_schema.columns
			WHERE  table_name   = '''||myTG_TABLE_NAME||''' 
			AND    table_schema = '''||myTG_TABLE_SCHEMA||'''
			AND    column_name <> ''id''';
		execute qrytxt;
                
        end if;
	return new;
end;
$BODY$
  LANGUAGE plpgsql VOLATILE
  COST 100;

select baseexec('ALTER FUNCTION '||schemaname||'.fntr_tbl_general() OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.fntr_tbl_general() SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;




DROP FUNCTION IF EXISTS basemaketemporarytblstep1(text,text);
CREATE OR REPLACE FUNCTION basemaketemporarytblstep1(tblname text,mykatastima text) RETURNS text AS $$
DECLARE 
tmptblname TEXT;
BEGIN
    tmptblname := tblname||'_tmp_' || to_char(current_timestamp,'yyyy_mm_dd_HH24_MI_SS') ;
    EXECUTE format('CREATE TABLE %I AS SELECT * FROM %I', tmptblname,tblname);
    EXECUTE format('delete from %I where mykatastima=''%I''', tblname,mykatastima);
    return tmptblname;
end;
$$ LANGUAGE plpgsql;

select baseexec('ALTER FUNCTION '||schemaname||'.basemaketemporarytblstep1(text,text) OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basemaketemporarytblstep1(text,text) SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;






DROP FUNCTION IF EXISTS basemaketemporarytblstep2(text,text,text);
CREATE OR REPLACE FUNCTION basemaketemporarytblstep2(tmptblname text,tblname text,mykatastima text) RETURNS text AS $$
DECLARE
qrytxt TEXT;
BEGIN
    qrytxt:='UPDATE '||tblname||'
    SET id=subquery.id
    FROM (SELECT id,myid,mykatastima
          FROM '||tmptblname||') AS subquery
    WHERE '||tblname||'.myid=subquery.myid and 
    '||tblname||'.mykatastima=subquery.mykatastima and
    '||tblname||'.mykatastima=''%I''';
    qrytxt:=format(qrytxt, mykatastima);
EXECUTE qrytxt;
    return qrytxt;
end;
$$ LANGUAGE plpgsql;

select baseexec('ALTER FUNCTION '||schemaname||'.basemaketemporarytblstep2(text,text,text) OWNER TO '||dbusername) from aab2badmin_basesettings;
select baseexec('ALTER FUNCTION '||schemaname||'.basemaketemporarytblstep2(text,text,text) SET search_path='||schemaname||', pg_catalog') from aab2badmin_basesettings;

