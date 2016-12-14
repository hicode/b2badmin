        CREATE OR REPLACE VIEW vf_site_settings AS 
         SELECT 
        row_number() OVER (ORDER BY core_site.id asc,core_settings.paramname asc) AS id,
         core_settings.id fksettings,
            core_settings.dt_created,
            core_settings.fklng,
            core_site.id fksite,
            core_settings.paramname,
            core_settings.paramvalue,
            core_site.sitename,
            core_site.maincontrollername
           FROM core_site,
            core_settings
          WHERE core_site.id::numeric = core_settings.fksite::numeric
          or core_settings.fksite is null
          order by core_site.id asc,core_settings.paramname asc;


          


          CREATE OR REPLACE VIEW vf_region AS 
         SELECT 
        row_number() OVER (ORDER BY core_country.title asc, core_prefecture.title asc, core_town.title asc, core_region.addressorvillage asc, core_region.streetnum asc) AS id,
        core_country.fklng,
         core_country.title countrytitle,
         core_prefecture.title prefecturetitle,
         core_town.title towntitle,
         core_region.addressorvillage,
         core_region.streetnum,
         core_poc.title poctitle,
         core_country.title||' '||core_prefecture.title||' '||core_town.title||' '||core_region.addressorvillage||' '||core_region.streetnum||' '||core_poc.title alltitles,
         core_country.id fkcountry,
         core_prefecture.id fkprefecture,
         core_town.id fktown,
         core_region.id fkregion,
         core_poc.id fkpoc,
         ((core_country.bldisabled # 1)*(core_prefecture.bldisabled # 1)*(core_town.bldisabled # 1)*(core_region.bldisabled # 1)*(core_poc.bldisabled # 1))# 1 bldisabled,
        ((core_country.bldeleted # 1)*(core_prefecture.bldeleted # 1)*(core_town.bldeleted # 1)*(core_region.bldeleted # 1)*(core_poc.bldeleted # 1))# 1 bldeleted,
        core_country.blpublished*core_prefecture.blpublished*core_town.blpublished*core_region.blpublished*core_poc.blpublished blpublished
           FROM core_country,core_prefecture,core_town,core_region,core_poc
          WHERE core_country.fkparentlng = core_prefecture.fkcountry
                and core_prefecture.fkparentlng=core_town.fkprefecture
                and core_town.fkparentlng=core_region.fktown
                and core_poc.fkparentlng=core_region.fkpoc
                and core_country.fklng = core_prefecture.fklng
                and core_prefecture.fklng=core_town.fklng
                and core_town.fklng=core_region.fklng
                and core_poc.fklng=core_region.fklng
          order by core_country.title asc, core_prefecture.title asc, core_town.title asc, core_region.addressorvillage asc, core_region.streetnum asc;












        CREATE OR REPLACE VIEW vf_templateavailable AS 
        SELECT row_number() OVER () AS id,0 as fklng, core_available_template.id fkavailabletemplate, fkavailabletemplateparam,core_available_template_param_value.id fkavailabletemplateparamvalue, templatename availabletemplatename, core_available_template.aliasname availabletemplatealiasname, paramname availableparamname,paramvalue availableparamvalue, core_available_template_param_value.aliasname availabletemplateparamvaluealiasname
          FROM core_available_template,core_available_template_param,core_available_template_param_value
          where core_available_template.id=core_available_template_param.fktemplate
          and core_available_template_param_value.fkavailabletemplateparam=core_available_template_param.id;

        CREATE OR REPLACE VIEW vf_template AS 
                 SELECT core_template.id fktemplate,aliasname templatealiasname,availableparamname templateparamname,paramvalue templateparamvalue,blenabled templateblenabled,sitename templatesitename,maincontrollername templatecontrollername,
                 vf_templateavailable.*
                   FROM vf_templateavailable,
                   core_template,
                   core_template_param_value,
                    core_site
                  WHERE vf_templateavailable.fkavailabletemplate = core_template.fkavailabletemplate 
                  AND core_template_param_value.fktemplate = core_template.id
                  and core_template_param_value.fkavailabletemplateparamvalue=vf_templateavailable.fkavailabletemplateparamvalue
                and core_site.id=core_template.fksite
                  order by aliasname asc,availableparamname asc;


        CREATE OR REPLACE VIEW vf_pluginavailable AS 
         SELECT row_number() OVER () AS id,0 as fklng,core_available_plugin.id AS fkavailableplugin,
            core_available_plugin_param_value.fkavailablepluginparam,
            core_available_plugin_param_value.id AS fkavailablepluginparamvalue,
            core_available_plugin.pluginname AS availablepluginname,
            core_available_plugin.pluginaliasname AS availablepluginaliasname,
            core_available_plugin_param.paramname AS availableparamname,
            core_available_plugin_param_value.paramvalue AS availableparamvalue,
            core_available_plugin_param_value.aliasname AS availablepluginparamvaluealiasname
           FROM core_available_plugin,
            core_available_plugin_param,
            core_available_plugin_param_value
          WHERE core_available_plugin.id = core_available_plugin_param.fkplugin AND core_available_plugin_param_value.fkavailablepluginparam = core_available_plugin_param.id;

        CREATE OR REPLACE VIEW vf_plugin AS 
         SELECT core_plugin.id fkplugin,pluginname pluginaliasname,pluginfirstkey,core_plugin_param_value.paramname pluginparamname,paramvalue pluginparamvalue,blenabled pluginblenabled,
         vf_pluginavailable.*
           FROM vf_pluginavailable,
           core_plugin,
           core_plugin_param_value
          WHERE vf_pluginavailable.fkavailableplugin = core_plugin.fkavailableplugin 
          AND core_plugin_param_value.fkplugin = core_plugin.id
          and core_plugin_param_value.fkavailablepluginparamvalue=vf_pluginavailable.fkavailablepluginparamvalue
          order by pluginname asc,availableparamname asc;



    CREATE OR REPLACE VIEW vf_plugin_no_available_params AS 
             SELECT row_number() OVER (order by core_available_plugin.pluginname asc, core_plugin.pluginname asc, ordering asc) AS id, 0 as fklng, 
             COALESCE(core_plugin.mykatastima,'ppkat') mykatastima, 
            core_available_plugin.id AS fkavailableplugin,
            core_available_plugin.pluginname AS availablepluginname,
            core_available_plugin.pluginversion as availablepluginversion,
            core_available_plugin.pluginaliasname as availablepluginaliasname,
            core_plugin.id AS fkplugin,
            core_plugin.pluginname as pluginaliasname,
            core_plugin_param_value.paramname as pluginparamname,
            core_plugin_param_value.paramvalue as pluginparamvalue,
            core_plugin_param_value.ordering,
            pluginfirstkey,
            core_plugin_param_value.id as fkcorepluginparamvalue
       FROM core_available_plugin,
        core_plugin,
        core_plugin_param_value
      WHERE core_available_plugin.id = core_plugin.fkavailableplugin AND core_plugin.id = core_plugin_param_value.fkplugin
        order by core_available_plugin.pluginname asc, core_plugin.pluginname asc, ordering asc;



        CREATE OR REPLACE VIEW vf_route_page AS 
             SELECT row_number() OVER (order by routename asc, pagename asc) AS id, 0 as fklng, 
             core_page.mykatastima,
             routename,routepath,routemodule,routecontroller,routeaction,
             pagename,fkroute,
	     core_page.id as fkpage,
             core_route.blpublished*core_page.blpublished as blpublished,
             core_route.bldeleted*core_page.bldeleted as bldeleted
       FROM core_route,
        core_page
      WHERE core_route.id = core_page.fkroute 
        order by routename asc, pagename asc;









        CREATE OR REPLACE VIEW vf_route_page_plugin_no_available_params AS 
             SELECT row_number() OVER (order by routename asc, pagename asc,pluginaliasname asc, ordering asc) AS id, 0 as fklng, 
             vf_plugin_no_available_params.mykatastima,
             routename,routepath,routemodule,routecontroller,routeaction,
             pagename,fkroute,
	     vf_route_page.fkpage,ordering,
             fkavailableplugin, availablepluginname, availablepluginversion, 
             availablepluginaliasname, vf_plugin_no_available_params.fkplugin, pluginaliasname, pluginfirstkey, pluginparamname, 
             pluginparamvalue,
             fkcorepluginparamvalue
       FROM vf_route_page,
        vf_plugin_no_available_params,
        core_page_plugin
      WHERE vf_route_page.fkpage = core_page_plugin.fkpage AND vf_plugin_no_available_params.fkplugin=core_page_plugin.fkplugin
        order by routename asc, pagename asc,pluginaliasname asc, ordering asc;







        CREATE OR REPLACE VIEW vf_route_page_plugin_no_available_params_json AS 
             SELECT row_number() OVER () AS id, 
fklng,mykatastima,routename,routepath,routemodule,
    routecontroller,
    routeaction,
    pagename,
    fkroute,
    fkpage,    
    fkavailableplugin,
    availablepluginname,
    availablepluginversion,
    availablepluginaliasname,
    a.fkplugin,
    pluginaliasname,
    pluginfirstkey,
    paramjson
    
    
  FROM (select distinct fklng,vf_route_page_plugin_no_available_params.mykatastima,routename,routepath,routemodule,
    routecontroller,
    routeaction,
    pagename,
    fkroute,
    fkpage,    
    fkavailableplugin,
    availablepluginname,
    availablepluginversion,
    availablepluginaliasname,
    vf_route_page_plugin_no_available_params.fkplugin,
    pluginaliasname,
    pluginfirstkey from vf_route_page_plugin_no_available_params) a,


(select fkplugin,row_to_json(r)::text paramjson from  (SELECT fkplugin,mykatastima,array_agg(t.ordering) AS ordering
           , array_agg(t.pluginparamname) AS pluginparamname, array_agg(t.pluginparamvalue) AS pluginparamvalue, array_agg(t.pluginparamvalue) AS fkcorepluginparamvalue
      FROM vf_route_page_plugin_no_available_params t  group by fkplugin,mykatastima
     ) r) rtj where rtj.fkplugin=a.fkplugin;




    CREATE OR REPLACE VIEW vf_plugin_no_available_params_json AS 
             SELECT row_number() OVER () AS id, 
    fklng,
    mykatastima,
    fkavailableplugin,
    availablepluginname,
    availablepluginversion,
    availablepluginaliasname,
    a.fkplugin,
    pluginaliasname,
    pluginfirstkey,
    paramjson
    
    
  FROM 
(select distinct fklng,
mykatastima,
    fkavailableplugin,
    availablepluginname,
    availablepluginversion,
    availablepluginaliasname,
    fkplugin,
    pluginaliasname,
    pluginfirstkey from vf_plugin_no_available_params) a ,

(select fkplugin,row_to_json(r)::text paramjson from  (SELECT fkplugin,mykatastima,array_agg(t.ordering) AS ordering
           , array_agg(t.pluginparamname) AS pluginparamname, array_agg(t.pluginparamvalue) AS pluginparamvalue, array_agg(t.pluginparamvalue) AS fkcorepluginparamvalue
      FROM vf_plugin_no_available_params t  group by fkplugin,mykatastima
     ) r) rtj where rtj.fkplugin=a.fkplugin ;










        

        CREATE OR REPLACE VIEW vf_tablefieldtype AS 
         SELECT core_field.id,core_field.dt_created,core_field.fklng,core_table.id AS fktable,
            core_table.tablename,
            core_table.dbtablename,
            core_field.id AS fkfield,
            core_field.fieldname,
            core_field.dbfieldname,
            core_field.blrequired,
            core_field.blnullable,
            core_field.prevdbtype,
            core_field.defvaluetext,
            core_field.defvaluenumeric,
            core_field.defvaluetwtz,
            core_field.fkfieldtype,
            core_field_type.fieldtype
           FROM core_table,
            core_field,
            core_field_type
          WHERE core_field.fktable = core_table.id AND core_field_type.id = core_field.fkfieldtype;



        CREATE OR REPLACE VIEW vf_sitetablefieldtype AS 
         SELECT vf_tablefieldtype.id,vf_tablefieldtype.dt_created,vf_tablefieldtype.fklng,core_site_table.fksite AS fkmigrationsite,
            core_site.sitename,
            core_site.maincontrollername,
            vf_tablefieldtype.fktable,
            vf_tablefieldtype.tablename,
            vf_tablefieldtype.dbtablename,
            vf_tablefieldtype.fkfield,
            vf_tablefieldtype.fieldname,
            vf_tablefieldtype.dbfieldname,
            vf_tablefieldtype.blrequired,
            vf_tablefieldtype.blnullable,
            vf_tablefieldtype.prevdbtype,
            vf_tablefieldtype.defvaluetext,
            vf_tablefieldtype.defvaluenumeric,
            vf_tablefieldtype.defvaluetwtz,
            vf_tablefieldtype.fkfieldtype,
            vf_tablefieldtype.fieldtype
           FROM core_site,
            core_site_table,
            vf_tablefieldtype
          WHERE core_site.id::numeric = core_site_table.fksite AND core_site_table.fktbl = vf_tablefieldtype.fktable::numeric;




        CREATE OR REPLACE VIEW vf_sitecontrollers AS 
         SELECT core_site_controllers.id,core_site_controllers.dt_created,core_site_controllers.fklng,core_site_controllers.fksite,
            core_site.sitename,
            core_site.maincontrollername,
            core_site_controllers.controllername
           FROM core_site,
            core_site_controllers
          WHERE core_site.id::numeric = core_site_controllers.fksite;






        CREATE OR REPLACE VIEW vf_viewfields AS 
         SELECT (core_view.id::text||core_view_table_field.id::text)::numeric id,core_view_table_field.dt_created,core_view_table_field.fklng,fkview,core_view_table_field.id fkviewtablefield, viewname, dbviewname, dbtablename, 
               dbfieldname,core_view_table_field.remarks
          FROM core_view,core_view_table_field
          where core_view.id=core_view_table_field.fkview;



        CREATE OR REPLACE VIEW vf_viewwherevalueselect AS 
         SELECT core_view_where_value.id,0 as fklng,fkview,viewname,dbviewname,vf_viewfields.fkviewtablefield,dbfieldname,wherealias,whereoperator,wherevalue,
        dbtablename || '.' ||dbfieldname||whereoperator||wherevalue wherevalueselect   
         FROM core_view_where_value,vf_viewfields
        where vf_viewfields.fkviewtablefield=core_view_where_value.fkviewtablefield;




        CREATE OR REPLACE VIEW vf_viewwherefieldsselect AS 
         SELECT core_view_where_fields.id,0 as fklng,
            a.fkview,
            a.viewname,
            a.dbviewname,
            core_view_where_fields.wherealias,
            core_view_where_fields.whereoperator,
            core_view_where_fields.fkviewtablefield1,
            core_view_where_fields.fkviewtablefield2,
            (a.dbtablename||'.'||a.dbfieldname || core_view_where_fields.whereoperator) || b.dbtablename||'.'||b.dbfieldname AS wherefieldsselect
           FROM core_view_where_fields,
            vf_viewfields a,
            vf_viewfields b    
          WHERE core_view_where_fields.fkviewtablefield1 = a.fkviewtablefield
          and core_view_where_fields.fkviewtablefield2 = b.fkviewtablefield;




        CREATE OR REPLACE VIEW vf_viewwherevaluesselectfinal AS 
         select row_number() OVER () AS id,fkview,0 as fklng,
        dbviewname,
        viewname,
        ordering, 
        logicaloperatorbefore,
        coalesce(logicaloperatorbefore,' ')||' '||vf_viewwherevalueselect.wherevalueselect finalrowwhere
          FROM core_view_where_logical_connections,
          vf_viewwherevalueselect
          where fkviewwherevalue=vf_viewwherevalueselect.id;



        CREATE OR REPLACE VIEW vf_viewwherefieldsselectfinal AS 
         SELECT row_number() OVER () AS id, vf_viewwherefieldsselect.fkview,0 as fklng,
            vf_viewwherefieldsselect.dbviewname,
            vf_viewwherefieldsselect.viewname,
            core_view_where_logical_connections.ordering,
            core_view_where_logical_connections.logicaloperatorbefore,
            (COALESCE(core_view_where_logical_connections.logicaloperatorbefore, ' '::text) || ' '::text) || vf_viewwherefieldsselect.wherefieldsselect AS finalrowwhere
           FROM core_view_where_logical_connections,
            vf_viewwherefieldsselect
          WHERE core_view_where_logical_connections.fkviewwherefields = vf_viewwherefieldsselect.id;



        CREATE OR REPLACE VIEW vf_viewwherefinal AS 
         select row_number() OVER (order by finalviewname,finalordering asc) AS id, 0 as fklng,* from (
        select a.fkview fkview,a.dbviewname dbviewname,a.viewname viewname,a.fkview afkview,a.dbviewname adbviewname,a.viewname aviewname,
        b.fkview bfkview,b.dbviewname bdbviewname,b.viewname bviewname,
        (coalesce(a.fkview::text,'')||coalesce(b.fkview::text,''))::numeric finalfkview,
        (coalesce(a.dbviewname::text,'')||coalesce(b.dbviewname::text,''))::text finaldbviewname,
        (coalesce(a.viewname::text,'')||coalesce(b.viewname::text,''))::text finalviewname,
        a.ordering aordering,b.ordering bordering,(coalesce(a.ordering::text,'')||coalesce(b.ordering::text,''))::numeric finalordering,
        a.finalrowwhere afinalrowwhere,b.finalrowwhere bfinalrowwhere, coalesce(a.finalrowwhere,'')||coalesce(b.finalrowwhere,'') finalrowwhere from 
        vf_viewwherefieldsselectfinal a
        FULL OUTER JOIN vf_viewwherevaluesselectfinal b
        ON a.fkview=b.fkview) a;




        CREATE OR REPLACE VIEW vf_viewwherefinalunion AS 
         SELECT row_number() OVER (order by vf_viewwherefieldsselectfinal.dbviewname asc) AS id,vf_viewwherefieldsselectfinal.fkview,0 as fklng,
            vf_viewwherefieldsselectfinal.dbviewname,
            vf_viewwherefieldsselectfinal.viewname,
            vf_viewwherefieldsselectfinal.ordering,
            vf_viewwherefieldsselectfinal.logicaloperatorbefore,
            vf_viewwherefieldsselectfinal.finalrowwhere
           FROM vf_viewwherefieldsselectfinal
        UNION
         SELECT row_number() OVER (order by vf_viewwherevaluesselectfinal.fkview asc) AS id, vf_viewwherevaluesselectfinal.fkview,0 as fklng,
            vf_viewwherevaluesselectfinal.dbviewname,
            vf_viewwherevaluesselectfinal.viewname,
            vf_viewwherevaluesselectfinal.ordering,
            vf_viewwherevaluesselectfinal.logicaloperatorbefore,
            vf_viewwherevaluesselectfinal.finalrowwhere
           FROM vf_viewwherevaluesselectfinal;


        CREATE OR REPLACE VIEW vf_viewwherefinalunionaggr AS
        SELECT row_number() OVER (ORDER BY viewname, ordering) AS id,0 as fklng, fkview, dbviewname, viewname, ordering, logicaloperatorbefore, 
               finalrowwhere
          FROM vf_viewwherefinalunion;



        CREATE OR REPLACE VIEW vf_viewfieldsalias AS 
         select vf_viewfields.*,aliasname from vf_viewfields,core_view_select
        where vf_viewfields.fkviewtablefield=core_view_select.fkviewtablefield;





        CREATE OR REPLACE VIEW vf_menu AS 
         SELECT row_number() OVER (order by fksite asc,menutype asc,menusublevel asc,menuordering asc) AS id,row_number() OVER (order by fksite asc,menutype asc,menusublevel asc,menuordering asc) AS viewordering,id menuid, fkusercreated, dt_created, fkuserlastupdated, dt_updated, 
               blpublished, fkuserpublishup, dt_publishup, fkuserpublishdown, 
               dt_publishdown, fklng, fkparentlng, fkbelong, updatestatus, bldisabled, 
               fkuserdisabled, dt_disabled, bldeleted, fkuserdeleted, dt_deleted, 
               remarks, title, shorttitle, jobremarks, fksite, fkparentmenu, 
               menulink, menuparams, menuname, menualias, menutype, menusublevel, 
               menuordering, blmenuhome, menuliextraclass, menuextralispancss
          FROM core_menu
          where blpublished=1 and
            bldeleted=0
          order by fksite asc,menutype asc,menusublevel asc,menuordering asc ;


        CREATE OR REPLACE VIEW vf_translate AS 
        SELECT
        row_number() OVER (ORDER BY core_static_translate_key.id asc) AS id,
        core_static_translate_key."id" keyid,
        core_static_translate_key_values.mykatastima,
        core_static_translate_key.keyname,
        core_static_translate_key_values."id" keyvalueid,
        core_static_translate_key_values.keyvalue,
        core_static_translate_key_values.fklng,
        core_static_translate_key.fksite
        FROM
        core_static_translate_key,
        core_static_translate_key_values
        where  core_static_translate_key_values.fkstatictranslatekey = core_static_translate_key."id" and 
        core_static_translate_key_values.bldeleted=0 and
        core_static_translate_key.bldeleted=0 and 
        core_static_translate_key_values.blpublished=1 and
        core_static_translate_key.blpublished=1 ;

        CREATE OR REPLACE VIEW vf_translate_available_plugin AS 
        SELECT
        row_number() OVER (ORDER BY core_available_plugin_translate_key.id asc) AS id,
        core_available_plugin_translate_key."id" keyid,
        core_available_plugin_translate_key.mykatastima,
        core_available_plugin_translate_key.keyname,
        core_available_plugin_translate_key_values."id" keyvalueid,
        core_available_plugin_translate_key_values.keyvalue,
        core_available_plugin_translate_key_values.fklng,
        core_available_plugin_translate_key.fkavailableplugin,
        pluginaliasname,
        core_available_plugin_translate_key.blpublished*core_available_plugin_translate_key_values.blpublished*core_available_plugin.blpublished as blpublished,
        core_available_plugin_translate_key.bldeleted*core_available_plugin_translate_key_values.bldeleted*core_available_plugin.bldeleted as bldeleted
        FROM
        core_available_plugin_translate_key,
        core_available_plugin_translate_key_values,
        core_available_plugin
        where  core_available_plugin.id=fkavailableplugin and
        core_available_plugin_translate_key_values.fkavailableplugintranslatekey = core_available_plugin_translate_key."id"
        ORDER BY core_available_plugin_translate_key.id asc;









        CREATE OR REPLACE VIEW vf_route_page_plugin_translate_available_plugin AS 
        SELECT row_number() OVER (order by pagename asc) AS id,
        vf_translate_available_plugin.mykatastima,
        vf_route_page.fkpage,
        vf_route_page.fkroute,keyname,
        vf_translate_available_plugin.fklng,
        keyvalue,core_plugin.pluginname,
        core_available_plugin.pluginaliasname availablepluginaliasname,
        pagename,routename,
        routemodule,
        routecontroller,
        routeaction,
        vf_translate_available_plugin.blpublished*core_available_plugin.blpublished*core_plugin.blpublished*core_page_plugin.blpublished*vf_route_page.blpublished as blpublished,
        vf_translate_available_plugin.bldeleted*core_available_plugin.bldeleted*core_plugin.bldeleted*core_page_plugin.bldeleted*vf_route_page.bldeleted as bldeleted
        FROM
        vf_translate_available_plugin,
        core_available_plugin,
        core_plugin,
        core_page_plugin,
        vf_route_page
        where  vf_translate_available_plugin.fkavailableplugin=core_available_plugin.id
		and core_plugin.fkavailableplugin=core_available_plugin.id
		and core_page_plugin.fkplugin=core_plugin.id
		and vf_route_page.fkpage=core_page_plugin.fkpage;



            CREATE OR REPLACE VIEW vf_translate_available_plugin_json AS 
                SELECT row_number() OVER ()  AS id, 
                        vf_translate_available_plugin.fklng,
                        vf_translate_available_plugin.fkavailableplugin,
                        pluginaliasname,
                        blpublished, 
                        bldeleted,
                        paramjson
                FROM vf_translate_available_plugin,
                        (select 
                            fkavailableplugin,fklng,row_to_json(r)::text paramjson 
                        from  
                            (SELECT fkavailableplugin,fklng,array_agg(t.keyid) AS keyid
                                ,
                    array_agg(t.mykatastima) AS mykatastima, array_agg(t.keyname) AS keyname, array_agg(t.keyvalueid) AS keyvalueid, array_agg(t.keyvalue) AS keyvalue
                            FROM vf_translate_available_plugin t  
                            group by fkavailableplugin,fklng
                            ) r) rtj 
                where 
                        rtj.fkavailableplugin=vf_translate_available_plugin.fkavailableplugin 
                    and
                        rtj.fklng=vf_translate_available_plugin.fklng
                group by vf_translate_available_plugin.fklng,
                    vf_translate_available_plugin.fkavailableplugin,
                    pluginaliasname,
                    blpublished, 
                    bldeleted,
                    paramjson;











                CREATE OR REPLACE VIEW vf_route_page_plugin_translate_available_plugin_json AS 
                SELECT row_number() OVER () AS id, 
                         a.*,
    b.paramjson
   FROM (select fklng,
            fkpage,
            fkroute,
            pluginname,
            availablepluginaliasname,
            pagename,
            routename,
            routemodule,
            routecontroller,
            routeaction,
            blpublished,
            bldeleted
 from vf_route_page_plugin_translate_available_plugin
group by 
        fklng,
        fkpage,
        fkroute, 
        pluginname, 
        availablepluginaliasname, 
        pagename, 
        routename,
        routemodule,
        routecontroller,
        routeaction,
        blpublished,
        bldeleted ) a,
   (select * from ( SELECT r.fkpage,
            r.fklng,
            row_to_json(r.*)::text AS paramjson
           FROM ( SELECT t.fkpage,
                    t.fklng,
                    array_agg(t.mykatastima) AS mykatastima,
                    array_agg(t.keyname) AS keyname,
                    array_agg(t.keyvalue) AS keyvalue
                   FROM vf_route_page_plugin_translate_available_plugin t
                  GROUP BY t.fkpage, t.fklng) r) rtj group by fkpage,fklng,paramjson) b
  WHERE b.fkpage = a.fkpage AND b.fklng = a.fklng;

        