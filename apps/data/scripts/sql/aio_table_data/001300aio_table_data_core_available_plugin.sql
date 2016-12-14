INSERT INTO core_available_plugin(
            id,
            pluginname, 
            pluginversion,
            pluginaliasname)
    VALUES 
        (1,'datatables','v1.10.10','datatablesv11010'),
        (2,'pageheader','v1.0.0','pageheaderv100'),
        (3,'datatablesdetailstable','v1.0.0','datatablesdetailstablev100'),
        (4,'outersidebarmenu','v1.0.0','outersidebarmenuv100'),
        (5,'fullcalendar','v2.6.1','fullcalendarv261'),
        (6,'modalgeneral','v1.0.0','modalgeneralv100'),

        -- DSL20161015
        (7, 'newrecord', 'v1.0.0', 'newrecordv100'),
        (8, 'deleterecord', 'v1.0.0', 'deleterecordv100'),
        -- DLS20161107
        (9, 'pdfprint', 'v1.0.0', 'pdfprintv100');

update core_available_plugin set myid=id;

