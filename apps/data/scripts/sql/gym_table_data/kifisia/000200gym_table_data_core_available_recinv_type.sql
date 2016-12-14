delete from core_available_recinv_type 
where mykatastima=:mykatastima;

-- DLS20161107
INSERT INTO core_available_recinv_type (myid, mykatastima, title, aliasname) VALUES
(1, :mykatastima, 'Απόδειξη', 'receipt'),
(2, :mykatastima, 'Τιμολόγιο', 'invoice');