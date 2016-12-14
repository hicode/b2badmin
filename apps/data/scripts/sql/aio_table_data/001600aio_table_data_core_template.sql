INSERT INTO core_template(
            fkavailabletemplate, 
            fksite, blenabled,aliasname)
    VALUES (
(SELECT id FROM core_available_template where aliasname='metronic362'),
(SELECT id FROM core_site where maincontrollername='b2b'),
1,
'metronic362b2b'),
(
(SELECT id FROM core_available_template where aliasname='metronic454'),
(SELECT id FROM core_site where maincontrollername='b2b'),
1,
'metronic454b2b');

