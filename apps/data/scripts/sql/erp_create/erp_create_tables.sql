CREATE TABLE core_erp_my_md5_filename (
    mymd5 text not null,
    myfilename text not null
        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_erp_my_md5_filename ADD CONSTRAINT mycon'||md5('core_erp_my_md5_filename'||'mymd5,myfilename')||' UNIQUE (mymd5,myfilename)');



CREATE TABLE core_erp_my_suppliers (
    mysuppliernum text not null,
    mysupplier text not null
        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_erp_my_suppliers ADD CONSTRAINT mycon'||md5('core_erp_my_suppliers'||'mysuppliernum')||' UNIQUE (mysuppliernum)');
select baseexec('ALTER TABLE core_erp_my_suppliers ADD CONSTRAINT mycon'||md5('core_erp_my_suppliers'||'mysupplier')||' UNIQUE (mysupplier)');

CREATE TABLE core_erp_my_items_metasiskevasia_antistixisi (
    
    mybarcodefrom text not null,
    mybarcodeto text not null,  
    mymasteritemto text not null,
    myhopeto text not null,
    myqtyfrom numeric not null default 1,
    myqtyto numeric not null default 1,
    mymonadapolisisto text not null,
    mytimikostousto numeric not null,
    mytimipolisisto numeric not null,
    mydescto text not null
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_erp_my_items_metasiskevasia_antistixisi ADD CONSTRAINT mycon'||md5('core_erp_my_items_metasiskevasia_antistixisi'||'mykatastima,mybarcodefrom,mybarcodeto')||' UNIQUE (mykatastima,mybarcodefrom,mybarcodeto)');

CREATE TABLE core_erp_my_items_metasiskevasia_proionta (
    
    mybarcodefrom text not null,
    mybarcodeto text not null,    
    myqtyfrom numeric not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_my_items_apomiosi (
    
    myyear text not null,
    mybarcode text not null,
    fkcategoryapomiosi bigint not null,    
    fkemployee bigint not null,
    myqty numeric not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_l_category_apomiosi (
    myid bigserial NOT NULL
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_erp_l_category_apomiosi ADD CONSTRAINT mycon'||md5('core_erp_l_category_apomiosi'||'mykatastima,shorttitle')||' UNIQUE (mykatastima,shorttitle)');


CREATE TABLE core_erp_l_document_type (
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_erp_l_document_type ADD CONSTRAINT mycon'||md5('core_erp_l_document_type'||'mykatastima,shorttitle')||' UNIQUE (mykatastima,shorttitle)');

CREATE TABLE core_erp_l_category_fpa (
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_erp_l_category_fpa ADD CONSTRAINT mycon'||md5('core_erp_l_category_fpa'||'mykatastima,shorttitle')||' UNIQUE (mykatastima,title)');



CREATE TABLE core_erp_l_entos_ektos_poikilias (
        )
        INHERITS (mitra_mitrapk);


select baseexec('ALTER TABLE core_erp_l_entos_ektos_poikilias ADD CONSTRAINT mycon'||md5('core_erp_l_entos_ektos_poikilias'||'mykatastima,shorttitle')||' UNIQUE (mykatastima,title)');


CREATE TABLE core_erp_l_monada_polisis (
        )
        INHERITS (mitra_mitrapk);

select baseexec('ALTER TABLE core_erp_l_monada_polisis ADD CONSTRAINT mycon'||md5('core_erp_l_monada_polisis'||'mykatastima,title')||' UNIQUE (mykatastima,title)');
CREATE TABLE core_erp_possales (
    mymd5 text not null,
    
    myyear text not null,
    mydate text not null,
    mymasteritem text not null,
    mydesc text not null,
    mycategoryfpa text not null,
    mymonadametrisis text not null,
    myaxiapolisismefpa text not null,
    myposotita text not null,
    mysintelestisfpa text not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_possales_tmp (
    mymd5 text not null,
    
    myyear text not null,
    mydate text not null,
    mymasteritem text not null,
    mydesc text not null,
    mycategoryfpa text not null,
    mymonadametrisis text not null,
    myaxiapolisismefpa text not null,
    myposotita text not null,
    mysintelestisfpa text not null
        )
        INHERITS (mitra_mitrapk);






CREATE TABLE core_erp_retsales (
    mymd5 text not null,
    
    myyear text not null,
    mydate text not null,
    mymasteritem text not null,
    mydesc text not null,
    mycategoryfpa text not null,
    mymonadametrisis text not null,
    myaxiapolisismefpa text not null,
    myposotita text not null,
    mysintelestisfpa text not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_retsales_tmp (
    mymd5 text not null,
    
    myyear text not null,
    mydate text not null,
    mymasteritem text not null,
    mydesc text not null,
    mycategoryfpa text not null,
    mymonadametrisis text not null,
    myaxiapolisismefpa text not null,
    myposotita text not null,
    mysintelestisfpa text not null
        )
        INHERITS (mitra_mitrapk);







CREATE TABLE core_erp_items (
    mymd5 text not null,
    
    myyear text not null,
    mydateparalavis text not null,
    mymasteritem text not null,
    myhope text not null,    
    mydesc text not null,
    myperiexkiv text not null,
    mycategoryfpa text not null,
    mytimikostous text not null,
    mytimipolisis text not null,
    myentosektospoik text not null,
    mybarcode text not null,
    mytmimaeidous text not null,
    mymonadapolisis text not null,
    mystatus text not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_str (
    mymd5 text not null,
    
    myyear text not null,
    mydateoffpar  text not null,
  mycustomercode  text not null,
  myitemcode text not null,
  mydescription  text not null,
  myinvoiceqty  text not null,
  mynetvalue  text not null,
  myvatvalue  text not null,
  mydocumenttype text not null,
  mydocumentprefix text not null,
  mydocumentnumber text not null,
  myrefyear   text not null,
  myreftype   text not null,
  myrefprefix  text not null,
  myrefnumber   text not null,
  myvatcode   text not null,
  myunitofmeasure text not null
        )
        INHERITS (mitra_mitrapk);














CREATE OR REPLACE FUNCTION
tr_erp_str_function()
RETURNS TRIGGER AS 
$BODY$
DECLARE
_new_year text;
_new_month text;
_new_katastima text;
_table_name text;
_result record;
BEGIN

_new_year := left(new.mydateoffpar, 4);
_new_month := substr(new.mydateoffpar, 5,2);
_new_katastima := new.mykatastima;
_table_name :='core_erp_str_'||_new_katastima||'_'||_new_year||'_'||_new_month;
RAISE NOTICE '%', _table_name;
PERFORM 1
FROM   pg_catalog.pg_class c
JOIN   pg_catalog.pg_namespace n ON n.oid = c.relnamespace
WHERE  c.relkind = 'r'
AND    c.relname = _table_name
AND    n.nspname = TG_TABLE_SCHEMA ;

IF NOT FOUND THEN
EXECUTE 'CREATE TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' (
	CHECK ( 
                mykatastima = ' || quote_literal(_new_katastima) || ' 
		AND left(mydateoffpar, 4) =  ' || quote_literal(_new_year) || '
		AND substr(mydateoffpar, 5,2) = ' || quote_literal(_new_month) || '
)

) INHERITS ('||TG_TABLE_SCHEMA ||'.core_erp_str)' USING NEW;


EXECUTE 'ALTER TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' OWNER TO postgres';
EXECUTE 'GRANT ALL ON TABLE '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' TO '||(SELECT dbusername FROM aab2badmin_basesettings);


END IF;


EXECUTE 'INSERT INTO '||TG_TABLE_SCHEMA ||'.' || quote_ident(_table_name) || ' VALUES ($1.*)' USING NEW;
RETURN NULL;
END;
$BODY$
LANGUAGE plpgsql;





CREATE TRIGGER tr_erp_str_tr
BEFORE INSERT ON core_erp_str
FOR EACH ROW EXECUTE PROCEDURE tr_erp_str_function();



















CREATE TABLE core_erp_str_tmp (
    mymd5 text not null,
    
    myyear text not null,
    mydateoffpar  text not null,
  mycustomercode  text not null,
  myitemcode text not null,
  mydescription  text not null,
  myinvoiceqty  text not null,
  mynetvalue  text not null,
  myvatvalue  text not null,
  mydocumenttype text not null,
  mydocumentprefix text not null,
  mydocumentnumber text not null,
  myrefyear   text not null,
  myreftype   text not null,
  myrefprefix  text not null,
  myrefnumber   text not null,
  myvatcode   text not null,
  myunitofmeasure text not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_items_tmp (
    mymd5 text not null,
    
    myyear text not null,
    mydateparalavis text not null,
    mymasteritem text not null,
    myhope text not null,    
    mydesc text not null,
    myperiexkiv text not null,
    mycategoryfpa text not null,
    mytimikostous text not null,
    mytimipolisis text not null,
    myentosektospoik text not null,
    mybarcode text not null,
    mytmimaeidous text not null,
    mymonadapolisis text not null,
    mystatus text not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_custs (
    mymd5 text not null,
    myyear text not null,
    mykodikoskatastimatos text not null,
    mykodikospelati text not null,    
    myeponimia text not null,
    myaddress text not null,
    myarithmos text not null,
    mytk text not null,
    myphone text not null,
    mymail text not null,
    myfax text not null,
    mydoy text not null,
    mydayspistosis text not null,
    mypistotikoorio text not null,
    myafm text not null,
    mypaymenttype text not null,
    myepaggelma text not null,
    myphone2 text not null,
    mydatedimioyrgiaspelati text not null,
    mycategoryfpa text not null,
    mykodikosdoy text not null,
    mykodikoshoras text not null,
    mykartapelati text not null,
    myekptosipelati text not null
        )
        INHERITS (mitra_mitrapk);

CREATE TABLE core_erp_custs_tmp (
    mymd5 text not null,
    myyear text not null,
    mykodikoskatastimatos text not null,
    mykodikospelati text not null,    
    myeponimia text not null,
    myaddress text not null,
    myarithmos text not null,
    mytk text not null,
    myphone text not null,
    mymail text not null,
    myfax text not null,
    mydoy text not null,
    mydayspistosis text not null,
    mypistotikoorio text not null,
    myafm text not null,
    mypaymenttype text not null,
    myepaggelma text not null,
    myphone2 text not null,
    mydatedimioyrgiaspelati text not null,
    mycategoryfpa text not null,
    mykodikosdoy text not null,
    mykodikoshoras text not null,
    mykartapelati text not null,
    myekptosipelati text not null
        )
        INHERITS (mitra_mitrapk);



CREATE TABLE core_erp_barcodes (
    mymd5 text not null,
    
    myyear text not null,
    mymasteritem text not null,
    mybarcode text not null
        )
        INHERITS (mitra_mitrapk);

--select baseexec('ALTER TABLE core_erp_barcodes ADD CONSTRAINT mycon'||md5('core_erp_barcodes'||'mykatastima,mymasteritem,mybarcode')||' UNIQUE (mykatastima,mymasteritem,mybarcode)');

CREATE TABLE core_erp_barcodes_tmp (
    mymd5 text not null,
    
    myyear text not null,
    mymasteritem text not null,
    mybarcode text not null
        )
        INHERITS (mitra_mitrapk);

