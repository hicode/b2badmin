delete from core_available_payment_type 
where mykatastima=:mykatastima;

INSERT INTO core_available_payment_type(myid,mykatastima,title,aliasname)
        VALUES 
    
    (
        1,:mykatastima,'Μετρητά','cash'
    ),
    (
        2,:mykatastima,'Πιστωτική','creditcard'
    ),
    (
        3,:mykatastima,'Διατραπεζικά','diatrapezika'
    );