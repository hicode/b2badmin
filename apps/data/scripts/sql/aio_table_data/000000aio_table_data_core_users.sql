INSERT INTO core_users(
            id, username, userpassword, 
            fname, lname, email, fkuserprefferlanguage, displayname)
    VALUES 
        (1,'root',crypt('toor', gen_salt('bf',13)),'Panos','Pantelakis','panagiotis.pantelakis@gmail.com',2,'Panagiotis Pantelakis'),
        (2,'admin',crypt('telecon12345', gen_salt('bf',13)),'Admin','Admin','support@b2badmin.org',2,'B2B Admin');

update core_users set myid=id;