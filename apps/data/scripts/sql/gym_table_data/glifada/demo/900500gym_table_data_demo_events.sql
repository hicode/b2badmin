set mykatastima.txt to :mykatastima;
DO $$
DECLARE 
i integer;
k integer;
str text;
myminutes integer;
myschemaname text;
mykatastima1 text;
BEGIN

execute 'select schemaname from aab2badmin_basesettings' into myschemaname;
    FOR k in 1..4
    LOOP
	    FOR i in 10..30
	    LOOP 
		myminutes:=50*k*i;
		str := 'INSERT INTO '||myschemaname||'.core_crm_event(mykatastima,title,fkplugincalendarresource,blallday,dtstart,dtend,url,bleditable,bloverlap,color,backgroundcolor,bordercolor,textcolor) 
		VALUES ('''||current_setting('mykatastima.txt')||''',''Event'||floor(random() * 1000)::text||''',(select id from '||myschemaname||'.core_crm_plugincalendar_resource where mykatastima='''||current_setting('mykatastima.txt')||''' and id='||k||'),0,now()- ('||myminutes::text||' * interval ''1 minute''),null,'''',0,0,'''',''#'||(floor(random() * 100000))::text||'F'',''#000000'','''');';
		--raise notice '%',str;
		perform baseexec(str);
	    END LOOP;
    END LOOP;

    
END$$;

