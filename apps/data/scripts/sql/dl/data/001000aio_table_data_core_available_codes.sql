INSERT INTO core_available_codes(
    myowner, mycode, mytype, mypage, mymethod,remarks ) VALUES 
('dl',1000,'custom','Js-dl.phtml','Dl.Gen.getAjaxData(url, data, cb, options)','Url was not specified in the function while calling ajax requetst.'),
('dl',1005,'native','Js-dl.phtml','Dl.Gen.getAjaxData(url, data, cb, options)','Error when calling ajax. The error was returned at natvie ajax error callback, either the file trying to call do not exists or some parser error. Error native function returns a,b,c variables. Log those vars to see the error.');
