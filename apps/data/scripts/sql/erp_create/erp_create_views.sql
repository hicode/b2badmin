CREATE OR REPLACE VIEW vf_erp_items_unique AS
SELECT row_number() OVER (ORDER BY mykatastima,fklng,mymasteritem, myhope, mybarcode, mydesc) AS id,
    mykatastima,
    fklng,
    mymasteritem, 
    myhope, 
    mybarcode,
    max(mydesc) mydesc
  FROM core_erp_items group by mykatastima,fklng,mymasteritem, myhope, mybarcode,mydesc
ORDER BY mykatastima,fklng,mymasteritem, myhope, mybarcode, mydesc;

CREATE OR REPLACE VIEW vf_erp_str AS
SELECT row_number() OVER (ORDER BY core_erp_str.mykatastima,core_erp_str.fklng) AS id,
    core_erp_str.fklng, 
    core_erp_str.mymd5, 
    core_erp_str.mykatastima, 
    core_erp_str.myyear::numeric,  
    core_erp_str.mydateoffpar, 
    to_date(core_erp_str.mydateoffpar, 'YYYYMMDD') mydateparalavis, 
    core_erp_str.mycustomercode, 
    core_erp_str.myitemcode, 
    core_erp_str.mydescription, 
    round((core_erp_str.myinvoiceqty::numeric/1000),3) myinvoiceqty, 
    round((core_erp_str.mynetvalue::numeric/100),2) mynetvalue, 
    round((core_erp_str.myvatvalue::numeric/100),2) myvatvalue, 
    core_erp_str.mydocumenttype,
    '('||core_erp_l_document_type.shorttitle||') '||core_erp_l_document_type.title titlemydocumenttype, 
    core_erp_str.mydocumentprefix, 
    core_erp_str.mydocumentnumber, 
    core_erp_str.myrefyear, 
    core_erp_str.myreftype, 
    core_erp_str.myrefprefix, 
    core_erp_str.myrefnumber myrefnumber, 
    rtrim(core_erp_str.myvatcode, '0'::text) AS myvatcode,
    core_erp_str.myunitofmeasure
  FROM core_erp_str,core_erp_l_document_type 
where core_erp_l_document_type.shorttitle=mydocumenttype
 ORDER BY core_erp_str.mykatastima,core_erp_str.fklng;


CREATE OR REPLACE VIEW vf_erp_l_my_unit_of_measure AS
SELECT row_number() OVER (ORDER BY mykatastima,fklng,myunitofmeasure) AS id,
 mykatastima,
 fklng,
 myunitofmeasure,
 1 blpublished,
 0 bldeleted,
 0 bldisabled
  FROM vf_erp_str group by mykatastima,fklng,myunitofmeasure ORDER BY mykatastima,fklng,myunitofmeasure;


CREATE OR REPLACE VIEW vf_erp_l_my_vatcode AS
SELECT row_number() OVER (ORDER BY mykatastima,fklng,myvatcode) AS id,
 mykatastima,
 fklng,
 myvatcode,
 1 blpublished,
 0 bldeleted,
 0 bldisabled
  FROM vf_erp_str group by mykatastima,fklng,myvatcode ORDER BY mykatastima,fklng,myvatcode;


CREATE OR REPLACE VIEW vf_erp_str_barcodes AS
SELECT row_number() OVER (ORDER BY vf_erp_str.mykatastima,vf_erp_str.fklng,a.mymasteritem, a.mybarcodes) AS id,
    vf_erp_str.fklng, 
    vf_erp_str.mymd5, 
    vf_erp_str.mykatastima, 
    vf_erp_str.myyear, 
    vf_erp_str.mydateoffpar,
    vf_erp_str.mydateparalavis, 
    vf_erp_str.mycustomercode, 
    vf_erp_str.myitemcode, 
    vf_erp_str.mydescription, 
    vf_erp_str.myinvoiceqty, 
    vf_erp_str.mynetvalue, 
    vf_erp_str.myvatvalue, 
    vf_erp_str.mydocumenttype, 
    vf_erp_str.titlemydocumenttype,
    vf_erp_str.mydocumentprefix, 
    vf_erp_str.mydocumentnumber, 
    vf_erp_str.myrefyear, 
    vf_erp_str.myreftype, 
    vf_erp_str.myrefprefix, 
    vf_erp_str.myrefnumber, 
    vf_erp_str.myvatcode, 
    vf_erp_str.myunitofmeasure,
    a.mymasteritem, 
    a.mybarcodes
  FROM vf_erp_str,
        (SELECT mykatastima,mymasteritem, replace(replace(string_agg(mybarcode, '-'),' ',''),'-',' - ') mybarcodes
            FROM core_erp_barcodes group by mykatastima,mymasteritem) a
 where vf_erp_str.myitemcode=a.mymasteritem
        and
        vf_erp_str.mykatastima=a.mykatastima
ORDER BY vf_erp_str.mykatastima,vf_erp_str.fklng,a.mymasteritem, a.mybarcodes;

CREATE OR REPLACE VIEW vf_erp_paralaves AS select * from vf_erp_str_barcodes;


CREATE OR REPLACE VIEW vf_erp_items AS 
 SELECT row_number() OVER (ORDER BY core_erp_items.mykatastima, core_erp_items.myyear, core_erp_items.id) AS id,
    core_erp_items.id AS fkcoreerpitemsid,
    core_erp_items.fklng,
    core_erp_items.mykatastima,
    core_erp_items.myyear::numeric,
    to_date(core_erp_items.mydateparalavis, 'YYYYMMDD') mydateparalavis,
    core_erp_items.mymd5 ,
    core_erp_items.mymasteritem,
    core_erp_items.myhope ,    
    core_erp_items.mydesc ,
    core_erp_items.myperiexkiv::numeric ,
    core_erp_items.mycategoryfpa ,
    core_erp_l_category_fpa.title as categoryfpatitle,
    round((core_erp_items.mytimikostous::numeric),2) mytimikostous,
    round((core_erp_items.mytimipolisis::numeric),2) mytimipolisis,
    core_erp_items.mytimipolisis::numeric-core_erp_items.mytimikostous::numeric kerdos,
    (100*(core_erp_items.mytimipolisis::numeric-core_erp_items.mytimikostous::numeric)/CASE
                                                                                        WHEN core_erp_items.mytimikostous::numeric=0 THEN core_erp_items.mytimipolisis::numeric
                                                                                        ELSE core_erp_items.mytimikostous::numeric
                                                                                      END ) 
                                                                                        kerdospercentage,
    core_erp_items.myentosektospoik ,
    core_erp_l_entos_ektos_poikilias.title as entosektospoikiliastitle,
    core_erp_items.mybarcode ,
    core_erp_items.mytmimaeidous::numeric ,
    core_erp_l_monada_polisis.title as monadapolisistitle,
    core_erp_items.mymonadapolisis ,
    core_erp_items.mystatus 
   FROM core_erp_items,core_erp_l_category_fpa,core_erp_l_monada_polisis,core_erp_l_entos_ektos_poikilias
  WHERE core_erp_items.mycategoryfpa::bigint = core_erp_l_category_fpa.myid and
    core_erp_l_monada_polisis.myid=core_erp_items.mymonadapolisis::bigint and
    core_erp_l_entos_ektos_poikilias.myid=core_erp_items.myentosektospoik::bigint
  ORDER BY core_erp_items.mykatastima, core_erp_items.myyear, core_erp_items.id;


CREATE OR REPLACE VIEW vf_erp_possales AS 
 SELECT row_number() OVER (ORDER BY core_erp_possales.mykatastima, core_erp_possales.myyear, core_erp_possales.id) AS id,
    core_erp_possales.id AS fkcoreerppossalesid,
    core_erp_possales.fklng,
    core_erp_possales.mykatastima,
    core_erp_possales.myyear::numeric,
    to_date(core_erp_possales.mydate, 'YYYYMMDD') mydate,
    core_erp_possales.mymd5 ,
    core_erp_possales.mymasteritem,
    core_erp_possales.mydesc ,
    core_erp_possales.mycategoryfpa ,
    core_erp_l_category_fpa.title as categoryfpatitle,
    core_erp_possales.mymonadametrisis,
    core_erp_possales.myaxiapolisismefpa, 
    core_erp_possales.myposotita, 
    core_erp_possales.mysintelestisfpa
   FROM core_erp_possales,core_erp_l_category_fpa
  WHERE core_erp_possales.mycategoryfpa::bigint = core_erp_l_category_fpa.myid 
  ORDER BY core_erp_possales.mykatastima, core_erp_possales.myyear, core_erp_possales.id;








CREATE OR REPLACE VIEW vf_erp_custs AS 
 SELECT row_number() OVER (ORDER BY core_erp_custs.mykatastima, core_erp_custs.myyear, core_erp_custs.id) AS id,
    core_erp_custs.id AS fkcoreerpcustsid,
    core_erp_custs.fklng as fklng,
    core_erp_custs.mymd5, 
    core_erp_custs.mykatastima, 
    core_erp_custs.myyear, 
    core_erp_custs.mykodikoskatastimatos, 
    core_erp_custs.mykodikospelati, 
    core_erp_custs.myeponimia, 
    core_erp_custs.myaddress, 
    core_erp_custs.myarithmos, 
    core_erp_custs.mytk, 
    core_erp_custs.myphone, 
    core_erp_custs.mymail, 
    core_erp_custs.myfax, 
    core_erp_custs.mydoy, 
    core_erp_custs.mydayspistosis, 
    core_erp_custs.mypistotikoorio, 
    core_erp_custs.myafm, 
    core_erp_custs.mypaymenttype, 
    core_erp_custs.myepaggelma, 
    core_erp_custs.myphone2, 
    core_erp_custs.mydatedimioyrgiaspelati, 
    core_erp_custs.mycategoryfpa,
    core_erp_l_category_fpa.title as categoryfpatitle, 
    core_erp_custs.mykodikosdoy, 
    core_erp_custs.mykodikoshoras, 
    core_erp_custs.mykartapelati, 
    core_erp_custs.myekptosipelati    
   FROM core_erp_custs,core_erp_l_category_fpa
  WHERE core_erp_custs.mycategoryfpa::bigint = core_erp_l_category_fpa.myid 
  ORDER BY core_erp_custs.mykatastima, core_erp_custs.myyear, core_erp_custs.id;


CREATE VIEW vf_erp_possales_tot as SELECT max(id) id, fklng, mykatastima, myyear, mydate, 
       sum(myaxiapolisismefpa::numeric) totalmyaxiapolisismefpa
  FROM vf_erp_possales group by fklng, mykatastima, myyear, mydate order by mydate desc;

CREATE VIEW vf_erp_my_barcodes_from_items as SELECT a.*
  FROM vf_erp_items a ,(
  SELECT max(id) id, mymasteritem, myhope,mybarcode
  FROM vf_erp_items group by mymasteritem,myhope,mybarcode) b where a.id=b.id;

CREATE VIEW vf_erp_barcodes as SELECT max(id) id,max(mymd5) mymd5,mykatastima, mymasteritem, mybarcode
  FROM core_erp_barcodes group by mykatastima,mymasteritem, mybarcode ;

CREATE VIEW vf_erp_my_items_metasiskevasia_antistixisi as SELECT a.id,
    a.fkusercreated,
    a.dt_created,
    a.fkuserlastupdated,
    a.dt_updated,
    a.blpublished,
    a.fkuserpublishup,
    a.dt_publishup,
    a.fkuserpublishdown,
    a.dt_publishdown,
    a.fklng,
    a.fkparentlng,
    a.fkbelong,
    a.updatestatus,
    a.fkuserupdatestatus,
    a.bldisabled,
    a.fkuserdisabled,
    a.dt_disabled,
    a.bldeleted,
    a.fkuserdeleted,
    a.dt_deleted,
    a.remarks,
    a.title,
    a.shorttitle,
    a.jobremarks,
    a.mykatastima,
    a.mybarcodefrom,
    a.mybarcodeto,
    b.mymasteritem mymasteritemfrom,
    a.mymasteritemto,
    b.myhope myhopefrom,
    a.myhopeto,
    a.myqtyfrom,
    a.myqtyto,
    b.mymonadapolisis mymonadapolisisfrom,
    d.title monadapolisistitlefrom,
    a.mymonadapolisisto,
    c.title monadapolisistitleto,
    a.mytimikostousto,
    a.mytimipolisisto,
    b.mydesc mydescfrom,
    a.mydescto
   FROM core_erp_my_items_metasiskevasia_antistixisi a,
        vf_erp_my_barcodes_from_items b,
        core_erp_l_monada_polisis c,
        core_erp_l_monada_polisis d 
    where 
            a.mybarcodefrom=b.mybarcode
        and
            a.mymonadapolisisto::numeric=c.myid
        and
            b.mymonadapolisis::numeric=d.myid
;

CREATE VIEW vf_erp_my_items_metasiskevasia_proionta as SELECT 
    a.*,
    e.username,
    a.myqtyfrom::numeric*c.myqtyto::numeric myqtyto,
    b.mymasteritem mymasteritemfrom, 
    b.myhope myhopefrom, 
    b.mydesc mydescfrom, 
    b.myperiexkiv myperiexkivfrom, 
    b.mycategoryfpa mycategoryfpafrom, 
    b.categoryfpatitle categoryfpatitlefrom,
    b.mytimikostous mytimikostousfrom, 
    b.mytimipolisis mytimipolisisfrom, 
    b.myentosektospoik myentosektospoikfrom, 
    b.entosektospoikiliastitle entosektospoikiliastitlefrom,
    b.mytmimaeidous mytmimaeidousfrom, 
    b.monadapolisistitle monadapolisistitlefrom, 
    b.mymonadapolisis mymonadapolisisfrom, 
    b.mystatus mystatusfrom,
    c.mymasteritemto,
    c.myhopeto,
    c.mymonadapolisisto,
    d.title as monadapolisistitleto,
    c.mytimikostousto,
    c.mytimipolisisto,
    c.mydescto

   FROM core_erp_my_items_metasiskevasia_proionta a,
        vf_erp_my_barcodes_from_items b,
        vf_erp_my_items_metasiskevasia_antistixisi c,
        core_erp_l_monada_polisis d,
        core_users e
    where 
        a.mybarcodefrom=b.mybarcode
    and
        a.mybarcodefrom=c.mybarcodefrom
    and
        c.mymonadapolisisto::numeric=d.myid
    and
        a.fkusercreated=e.id;

CREATE VIEW vf_erp_my_barcodes_items_antistixisi as SELECT fklng, mykatastima, mymasteritem, 
       myhope, mybarcode, mydesc,monadapolisistitle,mymonadapolisis
  FROM vf_erp_my_barcodes_from_items
  union
  SELECT fklng, mykatastima, mymasteritemto mymasteritem,
	myhopeto myhope, mybarcodeto mybarcode, mydescto mydesc,monadapolisistitleto monadapolisistitle, mymonadapolisisto mymonadapolisis
  FROM vf_erp_my_items_metasiskevasia_antistixisi;

CREATE VIEW vf_erp_my_items_apomiosi as SELECT a.*,b.mymasteritem,b.myhope,b.mydesc,b.monadapolisistitle,
    b.mymonadapolisis,c.title apomiosititle,d.username employeeusername
  FROM core_erp_my_items_apomiosi a,vf_erp_my_barcodes_items_antistixisi b,core_erp_l_category_apomiosi c,core_users d
where a.mybarcode=b.mybarcode
    and
        a.fkcategoryapomiosi=c.myid
    and
        a.fkemployee=d.id;

CREATE VIEW vf_erp_my_totals as 
    select a.*,
        b.mypossalesaxiapolisismefpa,
        b.mypossalesaxiapolisisxorisfpa,
        b.mypossalesfpa
    from 
        (SELECT mykatastima,myyear,
            sum(myperiexkiv::numeric*mytimikostous::numeric) totitemskostos, 
            sum(myperiexkiv::numeric*mytimipolisis::numeric) totitemspolisi,
            sum(myperiexkiv::numeric*mytimipolisis::numeric)-sum(myperiexkiv::numeric*mytimikostous::numeric) totitemskerdos,
            count(distinct(mybarcode)) totitemsmybarcodes,
            count(distinct(mymasteritem)) totitemsmymasteritem,
            count(distinct(myhope)) totitemsmyhope
              FROM core_erp_items group by mykatastima,myyear) a , 
        (SELECT mykatastima, myyear, 
        sum(myaxiapolisismefpa::numeric) mypossalesaxiapolisismefpa,
        sum(myaxiapolisismefpa::numeric/(1+(mysintelestisfpa::numeric/100))) mypossalesaxiapolisisxorisfpa,
        sum(myaxiapolisismefpa::numeric) - sum(myaxiapolisismefpa::numeric/(1+(mysintelestisfpa::numeric/100))) mypossalesfpa
          FROM core_erp_possales group by mykatastima, myyear) b 
where a.mykatastima=b.mykatastima
and
a.myyear=b.myyear;
