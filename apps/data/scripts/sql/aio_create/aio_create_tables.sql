    






      CREATE TABLE mitra_mitrapk (
            id bigserial NOT NULL,
            myid bigint,
            mykatastima text not null default 'ppkat',
            fkusercreated bigint,
            dt_created timestamp without time zone DEFAULT now() NOT NULL,
            fkuserlastupdated bigint not null default 1,
            dt_updated timestamp without time zone,
            blpublished bigint DEFAULT '-1'::numeric NOT NULL,
            fkuserpublishup bigint not null default 1,
            dt_publishup timestamp without time zone,
            fkuserpublishdown bigint,
            dt_publishdown timestamp without time zone,
            fklng bigint DEFAULT 1 NOT NULL,
            fkparentlng bigint, --for language translations
            fkbelong bigint, --for tree recursive
            updatestatus bigint NOT NULL DEFAULT 0, -- 0=never... 1=updated with front 2=need update
            fkuserupdatestatus bigint,
            bldisabled bigint DEFAULT 0 NOT NULL,
            fkuserdisabled bigint,
            dt_disabled timestamp without time zone,
            bldeleted bigint DEFAULT 0 NOT NULL,
            fkuserdeleted bigint,
            dt_deleted timestamp without time zone,
            remarks text,
            title text,
            shorttitle text,
            jobremarks text
        );
        COMMENT ON COLUMN mitra_mitrapk.updatestatus IS '0=never... 1=updated with front 2=need update' ;
CREATE INDEX mitra_mitrapk_fkparentlng_idx
  ON mitra_mitrapk
  USING btree
  (fkparentlng);

-- Index: ppschema.mitra_mitrapk_id_idx

-- DROP INDEX ppschema.mitra_mitrapk_id_idx;

CREATE INDEX mitra_mitrapk_id_idx
  ON mitra_mitrapk
  USING btree
  (id);



create TABLE mitra_mitrapk_aud as select * from mitra_mitrapk where 1=2;
ALTER TABLE mitra_mitrapk_aud ADD COLUMN dt_aud timestamp without time zone DEFAULT now();
ALTER TABLE mitra_mitrapk_aud ADD COLUMN id_aud bigint DEFAULT nextval('mitra_mitrapk_id_seq'::regclass);
ALTER TABLE mitra_mitrapk_aud ADD COLUMN tbl_aud text;







        
CREATE TABLE core_katastima (
    
            mykatastimanum text
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_katastima ADD CONSTRAINT mycon'||md5('core_katastima,mykatastima,mykatastimanum')||' UNIQUE (mykatastima,mykatastimanum)');
select baseexec('ALTER TABLE core_katastima ADD CONSTRAINT mycon'||md5('core_katastima,mykatastima')||' UNIQUE (mykatastima)');

        

        CREATE TABLE core_route (
            routename text,
            routepath text,
            routemodule text,
            routecontroller text,
            routeaction text
        )
        INHERITS (mitra_mitrapk);

        
select baseexec('ALTER TABLE core_route ADD CONSTRAINT mycon'||md5('core_route,mykatastima,routename')||' UNIQUE (mykatastima,routename)');

         
select baseexec('ALTER TABLE core_route ADD CONSTRAINT mycon'||md5('core_route,mykatastima,routepath')||' UNIQUE (mykatastima,routepath)');

          CREATE TABLE core_page(
            pagename text NOT NULL,
            fkroute bigint NOT NULL
        )
        INHERITS (mitra_mitrapk);

        

  select baseexec('ALTER TABLE core_page ADD CONSTRAINT mycon'||md5('core_page,mykatastima,pagename')||' UNIQUE (mykatastima,pagename)');
        



          CREATE TABLE core_module (
          moduleposition text,
          modulewidth text,
          moduleheight text,
          modulecss text,
        modulename text

        )
        INHERITS (mitra_mitrapk);



  select baseexec('ALTER TABLE core_module ADD CONSTRAINT mycon'||md5('core_module,mykatastima,modulename')||' UNIQUE (mykatastima,modulename)');
      
        CREATE TABLE core_page_plugin (
          fkpage bigint not null,
          fkplugin bigint not null
        )
        INHERITS (mitra_mitrapk);

        
  select baseexec('ALTER TABLE core_page_plugin ADD CONSTRAINT mycon'||md5('core_page_plugin,mykatastima,fkpage,fkplugin')||' UNIQUE (mykatastima,fkpage,fkplugin)');
          
          CREATE TABLE core_module_row (
            fkmodule bigint,
            rownum bigint,
            rowwidth text,
            rowheight text,
            rowcss text,
            rowname text

        )
        INHERITS (mitra_mitrapk);

        
select baseexec('ALTER TABLE core_module_row ADD CONSTRAINT mycon'||md5('core_module_row,mykatastima,fkmodule,rownum')||' UNIQUE (mykatastima,fkmodule,rownum)');
 select baseexec('ALTER TABLE core_module_row ADD CONSTRAINT mycon'||md5('core_module_row,mykatastima,fkmodule,rowname')||' UNIQUE (mykatastima,fkmodule,rowname)');
 

        CREATE TABLE core_module_row_col (
            fkmodulerow bigint,
            fkplugin    bigint,
            colnum bigint,
            colwidth text,
            colheight text,
            colcss text,
            colname text

        )
        INHERITS (mitra_mitrapk);


        
select baseexec('ALTER TABLE core_module_row_col ADD CONSTRAINT mycon'||md5('core_module_row_col,mykatastima,fkmodulerow,colnum')||' UNIQUE (mykatastima,fkmodulerow,colnum)');
 
select baseexec('ALTER TABLE core_module_row_col ADD CONSTRAINT mycon'||md5('core_module_row_col,mykatastima,fkmodulerow,colname')||' UNIQUE (mykatastima,fkmodulerow,colname)');


        CREATE TABLE core_table_trigger (
            dbtablename text,
            phpbeforecreate text,
            phpaftercreate text,
            phpbeforeupdate text,
            phpafterupdate text
        )
        INHERITS (mitra_mitrapk);



        CREATE TABLE core_field (
            fktable bigint NOT NULL,
            fkfieldtype bigint NOT NULL,
            fieldname text NOT NULL,
            dbfieldname text,
            blrequired numeric(1,0) DEFAULT 0,
            blnullable numeric(1,0) DEFAULT 1,
            prevdbtype TEXT,
            defvaluetext TEXT,
            defvaluenumeric numeric,
            defvaluetwtz timestamp without time zone
        )
        INHERITS (mitra_mitrapk);

        CREATE TRIGGER tr_core_field_after AFTER INSERT OR UPDATE ON core_field FOR EACH ROW EXECUTE PROCEDURE fntr_core_general();


        CREATE TRIGGER tr_core_field_before BEFORE INSERT ON core_field FOR EACH ROW EXECUTE PROCEDURE fntr_core_general();


        CREATE TABLE core_field_type (

            fieldtype text NOT NULL
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_field_type ADD CONSTRAINT mycon'||md5('core_field_type,mykatastima,fieldtype')||' UNIQUE (mykatastima,fieldtype)');

        CREATE TABLE core_table (
        tablename text,
        dbtablename text

        )
        INHERITS (mitra_mitrapk);

        select baseexec('ALTER TABLE core_table ADD CONSTRAINT mycon'||md5('core_table,mykatastima,tablename')||' UNIQUE (mykatastima,tablename)');
        select baseexec('ALTER TABLE core_table ADD CONSTRAINT mycon'||md5('core_table,mykatastima,dbtablename')||' UNIQUE (mykatastima,dbtablename)');
        CREATE TRIGGER tr_core_table_after AFTER INSERT OR UPDATE ON core_table FOR EACH ROW EXECUTE PROCEDURE fntr_core_general();
        CREATE TRIGGER tr_core_table_before BEFORE INSERT ON core_table FOR EACH ROW EXECUTE PROCEDURE fntr_core_general();

  
        



        CREATE TABLE core_table_relation_type (
        reltype text not null 

        )
        INHERITS (mitra_mitrapk);


        select baseexec('ALTER TABLE core_table_relation_type ADD CONSTRAINT mycon'||md5('core_table_relation_type,mykatastima,reltype')||' UNIQUE (mykatastima,reltype)');

        CREATE TABLE core_table_relation (
        table1 text,
        table2 text,
        field1 text,
        field2 text,
        fkreltype bigint

        )
        INHERITS (mitra_mitrapk);




select baseexec('ALTER TABLE core_table_relation ADD CONSTRAINT mycon'||md5('core_table_relation,mykatastima,table1, table2, field1, field2, fkreltype')||' UNIQUE (mykatastima,table1, table2, field1, field2, fkreltype)');

        CREATE TABLE core_menu
        (
        fksite bigint,
        fkparentmenu bigint,
          menulink text, 
          menuparams text,
          menuname text, 
          menualias text, 
          menutype text,
          menusublevel numeric,
          menuordering numeric,
          blmenuhome numeric, 
          menuliextraclass text, 
          menuextralispancss text
        )
        INHERITS (mitra_mitrapk)
        WITH (
          OIDS=FALSE
        );

        ALTER TABLE ONLY core_menu ALTER COLUMN menuordering SET DEFAULT 1;
        ALTER TABLE ONLY core_menu ALTER COLUMN blmenuhome SET DEFAULT 0;
        ALTER TABLE ONLY core_menu ALTER COLUMN menusublevel SET DEFAULT 0;


        CREATE TABLE core_view (
        viewname text,
        ddlcmd text,
        ddlcmdfe text,
        dbviewname text,
        dbviewnamefe text

        )
        INHERITS (mitra_mitrapk);








        CREATE TABLE core_view_table_field (
        fkview bigint,
        dbtablename text,
        dbfieldname text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_view_table_field ADD CONSTRAINT mycon'||md5('core_view_table_field,mykatastima,fkview, dbtablename, dbfieldname')||' UNIQUE (mykatastima,fkview, dbtablename, dbfieldname)');




        CREATE TABLE core_view_select (
        fkviewtablefield bigint,
        aliasname text

        )
        INHERITS (mitra_mitrapk);




select baseexec('ALTER TABLE core_view_select ADD CONSTRAINT mycon'||md5('core_view_select,mykatastima,fkviewtablefield, aliasname')||' UNIQUE (mykatastima,fkviewtablefield, aliasname)');

        CREATE TABLE core_view_where_fields (
        fkviewtablefield1 bigint,
        fkviewtablefield2 bigint,
        whereoperator text,
        wherealias text NOT NULL

        )
        INHERITS (mitra_mitrapk);





        CREATE TABLE core_view_where_value (
        fkviewtablefield bigint,
        wherevalue text,
        whereoperator text,
        wherealias text NOT NULL

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_view_where_value ADD CONSTRAINT mycon'||md5('core_view_where_value,mykatastima,wherealias')||' UNIQUE (mykatastima,wherealias)');







        CREATE TABLE core_view_where_logical_connections (
        fkviewwherefields bigint,
        fkviewwherevalue bigint,
        logicaloperatorbefore text not null,
        ordering bigint not null

        )
        INHERITS (mitra_mitrapk);



        ALTER TABLE ONLY core_view_where_logical_connections ALTER COLUMN ordering SET DEFAULT 1;
        ALTER TABLE ONLY core_view_where_logical_connections ALTER COLUMN logicaloperatorbefore SET DEFAULT ' ';





        CREATE TABLE core_view_order (
        fkviewtablefield bigint,
        orderoperator text,
        ordering bigint

        )
        INHERITS (mitra_mitrapk);






        CREATE TABLE core_site (
        sitename text,
        maincontrollername text

        )
        INHERITS (mitra_mitrapk);

       
select baseexec('ALTER TABLE core_site ADD CONSTRAINT mycon'||md5('core_site,mykatastima,sitename')||' UNIQUE (mykatastima,sitename)');

        CREATE TABLE core_site_controllers (
        fksite bigint,
        controllername text

        )
        INHERITS (mitra_mitrapk);

        

select baseexec('ALTER TABLE core_site_controllers ADD CONSTRAINT mycon'||md5('core_site_controllers,mykatastima,fksite,controllername')||' UNIQUE (mykatastima,fksite,controllername)');


        CREATE TABLE core_static_translate_key (
        fksite bigint,
        keyname text
        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_static_translate_key ADD CONSTRAINT mycon'||md5('core_static_translate_key,mykatastima,keyname')||' UNIQUE (mykatastima,keyname)');


        CREATE TABLE core_static_translate_key_values (
        fkstatictranslatekey bigint,
        keyvalue text
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_static_translate_key_values ADD CONSTRAINT mycon'||md5('core_static_translate_key_values,mykatastima,fkstatictranslatekey,fklng')||' UNIQUE (mykatastima,fkstatictranslatekey,fklng)');

        CREATE TABLE core_available_plugin_translate_key (
        fkavailableplugin bigint not null,
        keyname text
        )
        INHERITS (mitra_mitrapk);

      
select baseexec('ALTER TABLE core_available_plugin_translate_key ADD CONSTRAINT mycon'||md5('core_available_plugin_translate_key,mykatastima,fkavailableplugin,keyname')||' UNIQUE (mykatastima,fkavailableplugin,keyname)');


        CREATE TABLE core_available_plugin_translate_key_values (
        fkavailableplugintranslatekey bigint,
        keyvalue text
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_plugin_translate_key_values ADD CONSTRAINT mycon'||md5('core_available_plugin_translate_key_values,mykatastima,fkavailableplugintranslatekey,fklng')||' UNIQUE (mykatastima,fkavailableplugintranslatekey,fklng)');

        CREATE TABLE core_site_table (
        fksite numeric,
        fktbl numeric,
        dbtablename text

        )
        INHERITS (mitra_mitrapk);


        CREATE TABLE core_settings (
        fksite bigint,
        paramname text,
        paramvalue text

        )
        INHERITS (mitra_mitrapk);




select baseexec('ALTER TABLE core_settings ADD CONSTRAINT mycon'||md5('core_settings,mykatastima,paramname')||' UNIQUE (mykatastima,paramname)');



        CREATE TABLE core_language (
        )
        INHERITS (mitra_mitrapk);




select baseexec('ALTER TABLE core_language ADD CONSTRAINT mycon'||md5('core_language,mykatastima,shorttitle')||' UNIQUE (mykatastima,shorttitle)');


        CREATE TABLE core_available_template (
        templatename text,
        aliasname text

        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_template ADD CONSTRAINT mycon'||md5('core_available_template,mykatastima,templatename')||' UNIQUE (mykatastima,templatename)');


select baseexec('ALTER TABLE core_available_template ADD CONSTRAINT mycon'||md5('core_available_template,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');

        CREATE TABLE core_available_template_param (
        fktemplate bigint,
        paramname text

        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_template_param ADD CONSTRAINT mycon'||md5('core_available_template_param,mykatastima,fktemplate,paramname')||' UNIQUE (mykatastima,fktemplate,paramname)');


        CREATE TABLE core_available_template_param_value (
        fkavailabletemplateparam bigint,
        paramvalue text,
        aliasname text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_available_template_param_value ADD CONSTRAINT mycon'||md5('core_available_template_param_value,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');




        CREATE TABLE core_template (
        fkavailabletemplate bigint,
        fksite bigint,
        blenabled numeric,
        aliasname text

        )
        INHERITS (mitra_mitrapk);



select baseexec('ALTER TABLE core_template ADD CONSTRAINT mycon'||md5('core_template,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');



        CREATE TABLE core_template_param_value (
        fktemplate bigint,
        fkavailabletemplateparamvalue bigint,
        paramvalue text
        )
        INHERITS (mitra_mitrapk);


        CREATE TABLE core_users (
        username text,
        userpassword text,
        fname text,
        lname text,
        email text,
        fkuserprefferlanguage bigint NOT NULL,
        displayname text,
        myfkcountryshorttiltle text,
        address text,
        city text        
        )
        INHERITS (mitra_mitrapk);

        select baseexec('ALTER TABLE core_users ADD CONSTRAINT mycon'||md5('core_users,mykatastima,username')||' UNIQUE (mykatastima,username)');
        select baseexec('ALTER TABLE core_users ADD CONSTRAINT mycon'||md5('core_users,mykatastima,email')||' UNIQUE (mykatastima,email)');

        CREATE TABLE core_available_module_structure_type (
        structuretypename text
        )
        INHERITS (mitra_mitrapk);




        CREATE TABLE core_available_module_structure_type_param_type (

        paramtype text
        )
        INHERITS (mitra_mitrapk);



        CREATE TABLE core_available_module_structure_type_param (
        fkavailablemodulestructuretype bigint,
        fkavailablemodulestructuretypeparamtype bigint,
        paramname text
        )
        INHERITS (mitra_mitrapk);


        CREATE TABLE core_available_module_structure_type_param_value (
        fkavailablemodulestructuretypeparam bigint,
        paramvalue text
        )
        INHERITS (mitra_mitrapk);


        CREATE TABLE core_available_module (
        modulename text,
        aliasname text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_available_module ADD CONSTRAINT mycon'||md5('core_available_module,mykatastima,modulename')||' UNIQUE (mykatastima,modulename)');
select baseexec('ALTER TABLE core_available_module ADD CONSTRAINT mycon'||md5('core_available_module,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');

        CREATE TABLE core_available_module_param (
        fkmodule bigint,
        paramname text

        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_module_param ADD CONSTRAINT mycon'||md5('core_available_module_param,mykatastima,fkmodule,paramname')||' UNIQUE (mykatastima,fkmodule,paramname)');


        CREATE TABLE core_available_module_param_value (
        fkavailablemoduleparam bigint,
        paramvalue text,
        aliasname text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_available_module_param_value ADD CONSTRAINT mycon'||md5('core_available_module_param_value,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');



        




        CREATE TABLE core_module_param_value (
        fkmodule bigint,
        fkavailablemoduleparamvalue bigint,
        paramvalue text
        )
        INHERITS (mitra_mitrapk);


        CREATE TABLE core_module_structure_type (
        fkmodule bigint,
        fkavailablemodulestructuretype bigint,
        ordering numeric
        )
        INHERITS (mitra_mitrapk);



        CREATE TABLE core_module_structure_type_param_value (
        fkmodulestructuretype bigint,
        fkavailablemodulestructuretypeparamvalue bigint,
        paramvalue text

        )
        INHERITS (mitra_mitrapk);















        CREATE TABLE core_available_plugin (
            pluginname text,
            pluginversion text,
            pluginaliasname text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_available_plugin ADD CONSTRAINT mycon'||md5('core_available_plugin,mykatastima,pluginname,pluginversion')||' UNIQUE (mykatastima,pluginname,pluginversion)');

select baseexec('ALTER TABLE core_available_plugin ADD CONSTRAINT mycon'||md5('core_available_plugin,mykatastima,pluginaliasname')||' UNIQUE (mykatastima,pluginaliasname)');


        CREATE TABLE core_available_plugin_param (
            fkplugin bigint,
            paramname text

        )
        INHERITS (mitra_mitrapk);



        
select baseexec('ALTER TABLE core_available_plugin_param ADD CONSTRAINT mycon'||md5('core_available_plugin_param,mykatastima,fkplugin,paramname')||' UNIQUE (mykatastima,fkplugin,paramname)');



        CREATE TABLE core_available_plugin_param_value (
        fkavailablepluginparam bigint,
        paramvalue text,
        aliasname text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_available_plugin_param_value ADD CONSTRAINT mycon'||md5('core_available_plugin_param_value,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');



        CREATE TABLE core_plugin (
        fkavailableplugin bigint,
        blenabled numeric,
        pluginname text,
        pluginfirstkey text

        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_plugin ADD CONSTRAINT mycon'||md5('core_plugin,mykatastima,pluginname')||' UNIQUE (mykatastima,pluginname)');
 



        CREATE TABLE core_plugin_param_value (
        fkplugin bigint,
        fkavailablepluginparamvalue bigint,
        paramname text,
        paramvalue text,
        ordering bigint NOT NULL DEFAULT nextval('ordering_seq'::regclass)
        )
        INHERITS (mitra_mitrapk);


        

 select baseexec('ALTER TABLE core_plugin_param_value ADD CONSTRAINT mycon'||md5('core_plugin_param_value,mykatastima,fkplugin,paramname')||' UNIQUE (mykatastima,fkplugin,paramname)');
         
select baseexec('ALTER TABLE core_plugin_param_value ADD CONSTRAINT mycon'||md5('core_plugin_param_value,mykatastima,fkplugin,ordering')||' UNIQUE (mykatastima,fkplugin,ordering)');

        CREATE TABLE core_country (
                 capital text
        )
        INHERITS (mitra_mitrapk);

        select baseexec('ALTER TABLE core_country ADD CONSTRAINT mycon'||md5('core_country,mykatastima,shorttitle,fklng')||' UNIQUE (mykatastima,shorttitle,fklng)');



        CREATE TABLE core_prefecture (
        fkcountry bigint,
        capital text
        )
        INHERITS (mitra_mitrapk);

        select baseexec('ALTER TABLE core_prefecture ADD CONSTRAINT mycon'||md5('core_prefecture,mykatastima,fkcountry,title')||' UNIQUE (mykatastima,fkcountry,title)');

        CREATE TABLE core_town (
                 fkprefecture bigint
        )
        INHERITS (mitra_mitrapk);

        select baseexec('ALTER TABLE core_town ADD CONSTRAINT mycon'||md5('core_town,mykatastima,fkprefecture,title')||' UNIQUE (mykatastima,fkprefecture,title)');

        CREATE TABLE core_poc (
        )
        INHERITS (mitra_mitrapk);

        CREATE TABLE core_region (
                fktown bigint,
                fkpoc bigint,
                addressorvillage text,
                streetnum text
        )
        INHERITS (mitra_mitrapk);

        CREATE TABLE core_gender (
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_gender ADD CONSTRAINT mycon'||md5('core_gender,mykatastima,title')||' UNIQUE (mykatastima,title)');

        CREATE TABLE core_salutation (
        )
        INHERITS (mitra_mitrapk);

 select baseexec('ALTER TABLE core_salutation ADD CONSTRAINT mycon'||md5('core_salutation,mykatastima,title')||' UNIQUE (mykatastima,title)');
       

CREATE TABLE core_available_taxes (
          taxpercentage numeric,
          dtfrom timestamp without time zone,
          dtuntil timestamp without time zone
        
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_available_payment_type (
        aliasname text not null 
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_payment_type ADD CONSTRAINT mycon'||md5('core_available_payment_type,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');

CREATE TABLE core_available_payment_reason (
        aliasname text not null 
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_payment_reason ADD CONSTRAINT mycon'||md5('core_available_payment_reason,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');


CREATE TABLE core_available_codes (
        myowner text not null,
        mycode bigint not null,
        mytype text not null,
        mypage text not null,
        mymethod text not null
        
         )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_codes ADD CONSTRAINT mycon'||md5('core_available_codes,mycode')||' UNIQUE (mycode)');

-- DLS20161107
        CREATE TABLE core_available_recinv_type (
            aliasname text
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_recinv_type ADD CONSTRAINT mycon'||md5('core_available_recinv_type,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');

CREATE TABLE core_available_expenses_type (
            aliasname text
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_available_expenses_type ADD CONSTRAINT mycon'||md5('core_available_expenses_type,mykatastima,aliasname')||' UNIQUE (mykatastima,aliasname)');