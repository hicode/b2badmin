--set search_path=phalconphpschema;

delete from core_crm_customer where mykatastima=:mykatastima;
    
INSERT INTO core_crm_customer(
            myid, mykatastima, blpublished,fkusercreated,jobremarks, fkgender, 
            fksalutation, fname, lname, email,telland,telmobile)
   (SELECT contactid,:mykatastima,1,1, contact_no, 
	CASE 
		WHEN salutation='Mrs.' THEN 3
		WHEN salutation='Mr' THEN 2
		ELSE 1
	END,
	CASE 
		WHEN salutation='Mrs.' THEN 3
		WHEN salutation='Mr' THEN 2
		ELSE 1
	END,
	firstname, lastname, 
       email, phone, mobile
  FROM vt2b2bkinaesthesis.vtiger_contactdetails 
    where 
    contactid in 
        (
            select crmid from vt2b2bkinaesthesis.vtiger_crmentity
            where deleted=0
        )
order by lastname asc);

  update core_crm_customer set fkparentlng=id where fkparentlng is null;

  UPDATE core_crm_customer
SET birthday = vt2b2bkinaesthesis.vtiger_contactsubdetails.birthday,
	telland=homephone
FROM vt2b2bkinaesthesis.vtiger_contactsubdetails
WHERE core_crm_customer.myid = vt2b2bkinaesthesis.vtiger_contactsubdetails.contactsubscriptionid
and mykatastima=:mykatastima;


UPDATE core_crm_customer
SET
    countryname1=mailingcountry,
            prefecture1=mailingstate,
            townname1=mailingcity,
            pocname1=mailingpobox,
            addressname1=mailingstreet
    from     vt2b2bkinaesthesis.vtiger_contactaddress
    where 
        vtiger_contactaddress.contactaddressid=core_crm_customer.myid
and mykatastima=:mykatastima;

UPDATE core_crm_customer
SET
    fkcountry1=1
    where 
        core_crm_customer.mykatastima=:mykatastima;

UPDATE core_crm_customer
SET
    fkprefecture1=core_prefecture.id
    from     core_prefecture
    where 
        replace(core_crm_customer.prefecture1,' ','')=replace(core_prefecture.title,' ','')
and core_crm_customer.mykatastima=:mykatastima;

UPDATE core_crm_customer
SET
    fktown1=core_town.id
    from     core_town
    where 
        replace(core_crm_customer.townname1,' ','')=replace(core_town.title,' ','')
and core_crm_customer.mykatastima=:mykatastima;








delete from core_crm_addresstype where mykatastima=:mykatastima;


 INSERT INTO core_crm_addresstype(myid,mykatastima,title) values 
(1,:mykatastima,'Δνση Αλληλογραφίας'),
(2,:mykatastima,'Δνση Κατοικίας'),
(3,:mykatastima,'Δνση Τιμολόγησης');

update core_crm_addresstype set fkparentlng=id where fkparentlng is null;

delete from core_crm_customer_address where mykatastima=:mykatastima;

INSERT INTO core_crm_customer_address(
            fkcustomer,mykatastima,blpublished, fkaddresstype,addressname, countryname, prefecturename, townname,pocname)
  (  SELECT id, :mykatastima,1,2,mailingstreet,mailingcountry,mailingstate,mailingcity,mailingpobox
  FROM vt2b2bkinaesthesis.vtiger_contactaddress,core_crm_customer
  where myid=contactaddressid);

  update core_crm_customer_address set fkparentlng=id where fkparentlng is null;
  update core_crm_customer_address set myid=id where myid is null;


delete from core_crm_available_service where mykatastima=:mykatastima;



INSERT INTO core_crm_available_service(
            myid, mykatastima, title, aliasname)
    (SELECT lblcustomcategoryid,:mykatastima, lblcustomcategory_tks_lblcateg,lblcustomcategory_tks_lblcateg
  FROM vt2b2bkinaesthesis.vtiger_lblcustomcategory);


update core_crm_available_service set fkparentlng=id where fkparentlng is null;

delete from core_crm_available_packet_category where mykatastima=:mykatastima;



INSERT INTO core_crm_available_packet_category(
            myid, mykatastima, title)

(SELECT servicecategoryid, :mykatastima,servicecategory
  FROM vt2b2bkinaesthesis.vtiger_servicecategory);

delete from core_crm_available_packet where mykatastima=:mykatastima;



INSERT INTO core_crm_available_packet(
            myid, mykatastima, title,remarks, recprice)
    
(SELECT serviceid, :mykatastima, servicename, servicecategory, unit_price
  FROM vt2b2bkinaesthesis.vtiger_service);


UPDATE core_crm_available_packet
   SET fkavailablepacketcategory=core_crm_available_packet_category.id
FROM core_crm_available_packet_category
WHERE core_crm_available_packet_category.title = core_crm_available_packet.remarks
and core_crm_available_packet_category.mykatastima=core_crm_available_packet.mykatastima;



UPDATE core_crm_available_packet
   SET fkavailableservice=core_crm_available_service.id
FROM core_crm_available_service
WHERE core_crm_available_packet.title like  '%' || core_crm_available_service.title || '%'
and core_crm_available_packet.mykatastima=core_crm_available_packet.mykatastima;


UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totaldays=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUPD/IN','PILATESPRS-M','PILATESPRS-T')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;

UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totalmonths=2
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP16/2','PILATESGROUP24/2')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;

UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totalmonths=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP4/1','PILATESGROUP8/1','PILATESGROUP12/1','PILATESGROUP16/2','YOGA1/1','YOGA2/1')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;

UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totalweeks=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESMAT1/1','PILATESMAT2/1')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;


UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totalminutes=30
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE5/30','MASSAGE1/2H')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;

UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totalminutes=55
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE5/55''')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;

UPDATE core_crm_available_packet
   SET fkavailableduration=core_crm_available_duration.id
FROM core_crm_available_duration
WHERE core_crm_available_duration.totalminutes=60
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE1H')
and core_crm_available_packet.mykatastima=core_crm_available_duration.mykatastima;




UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=5
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE5/30')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE1/2H')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=5
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE5/55''')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('MASSAGE1H')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;


UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=4
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP4/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=8
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP8/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=12
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP12/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=16
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP16/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=24
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUP24/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESGROUPD/IN')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESMAT1/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=2
and replace(core_crm_available_packet.title,' ','') in ('PILATESMAT2/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESPRS-M')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('PILATESPRS-T')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=1
and replace(core_crm_available_packet.title,' ','') in ('YOGA1/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=core_crm_available_total_times.id
FROM core_crm_available_total_times
WHERE core_crm_available_total_times.totaltimes=2
and replace(core_crm_available_packet.title,' ','') in ('YOGA2/1')
and core_crm_available_packet.mykatastima=core_crm_available_total_times.mykatastima;

UPDATE core_crm_available_packet
   SET fktotaltimes=(select id FROM core_crm_available_total_times 
                            where 
                                mykatastima=:mykatastima 
                            and 
                                core_crm_available_total_times.totaltimes=0)
WHERE fktotaltimes is null
and mykatastima=:mykatastima;


delete from core_crm_customer_contract where mykatastima=:mykatastima;

INSERT INTO core_crm_customer_contract(
            myid, mykatastima, fkcustomer, 
            dtstart, dtend, totaldays,remarks,fkavailablepacket,fkavailabletaxes,price,totaltimes,donetimes,prevtimes)
    
(SELECT crmid,
        mykatastima,
        core_crm_customer.id,
        start_date,
        due_date,
        case when planned_duration='' then 0 else planned_duration::numeric end,
        contract_no,
        yphresies,
        (select id from core_available_taxes where myid=1 and mykatastima=:mykatastima),
        cf_761,
        cf_921,
        cf_923,
        cf_925
  FROM vt2b2bkinaesthesis.vtiger_crmentity,
    vt2b2bkinaesthesis.vtiger_servicecontracts,
    core_crm_customer,
    vt2b2bkinaesthesis.vtiger_servicecontractscf
    where 
        vtiger_crmentity.crmid=vtiger_servicecontracts.servicecontractsid 
    and 
        vtiger_servicecontractscf.servicecontractsid=crmid
    and
        deleted=0 
    and 
        mykatastima=:mykatastima 
    and 
        myid=sc_related_to);


UPDATE core_crm_customer_contract
   SET fkavailablepacket=core_crm_available_packet.id
FROM core_crm_available_packet
WHERE core_crm_available_packet.myid=core_crm_customer_contract.fkavailablepacket
and core_crm_customer_contract.mykatastima=:mykatastima
and core_crm_available_packet.mykatastima=:mykatastima;



UPDATE core_crm_customer_contract
   SET fkavailableservice=core_crm_available_packet.fkavailableservice,
        title=core_crm_available_packet.title
FROM core_crm_available_packet
WHERE core_crm_available_packet.id=core_crm_customer_contract.fkavailablepacket
and core_crm_customer_contract.mykatastima=:mykatastima;

INSERT INTO core_crm_customer_contract_payment(
            mykatastima, fkcustomercontract,  
            actualpaymenttotal, fkavailabletaxes, fkpaymentreason,fkpaymenttype)
    (SELECT mykatastima, 
            id,
            cf_883,
            fkavailabletaxes,
            (select id from core_available_payment_reason where myid=1 and mykatastima=:mykatastima),
            (select id from core_available_payment_type where myid=1 and mykatastima=:mykatastima)
  FROM core_crm_customer_contract,vt2b2bkinaesthesis.vtiger_servicecontractscf
    where myid=servicecontractsid and mykatastima=:mykatastima);


INSERT INTO core_crm_customer_contract_payment(
            myid,
            mykatastima, 
            fkcustomercontract,  
            actualpaymenttotal, 
            actualpaymentwithouttaxis,
            actualpaymenttaxis,
            actualdtpayment,
            fkavailabletaxes, 
            fkpaymentreason,
            fkpaymenttype,
            remarks)
(SELECT its4you_cashflow4you.cashflow4youid,
        core_crm_customer.mykatastima, 
        b.fkcustomercontract,
        cf_969::numeric,
        cf_973::numeric,
        cf_971::numeric,
        paymentdate,
        (select id from core_available_taxes where myid=1 and mykatastima=:mykatastima),
        (select id from core_available_payment_reason where myid=2 and mykatastima=:mykatastima),
        (select id from core_available_payment_type where myid=1 and mykatastima=:mykatastima),
        cashflow4youname ||' '|| cashflow4you_no||' '||cashflow4you_paymethod
  FROM vt2b2bkinaesthesis.its4you_cashflow4you , vt2b2bkinaesthesis.its4you_cashflow4youcf,
(select min(id) fkcustomercontract,fkcustomer from core_crm_customer_contract group by fkcustomer) b,
core_crm_customer
	where its4you_cashflow4you.cashflow4youid in (select crmid from vt2b2bkinaesthesis.vtiger_crmentity where deleted=0)
		and cashflow4you_paytype='Incoming'
			and its4you_cashflow4you.cashflow4youid=its4you_cashflow4youcf.cashflow4youid
                and contactid =core_crm_customer.myid
                and core_crm_customer.mykatastima=:mykatastima
                and b.fkcustomer=core_crm_customer.id);

update core_crm_customer_contract_payment set 
    fkavailabletaxes=(select id from core_available_taxes where myid=0 and mykatastima=(select mykatastimadefault from aab2badmin_basesettings)),
    blppdlbw=1 
    where 
        id=id 
    and 
        actualpaymenttaxis=0 
    and         
        mykatastima=:mykatastima;