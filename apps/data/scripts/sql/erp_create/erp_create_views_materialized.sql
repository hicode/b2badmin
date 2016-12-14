CREATE MATERIALIZED VIEW vf_erp_items_m as select * from vf_erp_items;


CREATE INDEX vf_erp_items_m_id_idx
  ON vf_erp_items_m
  USING btree
  (id);

CREATE MATERIALIZED VIEW vf_erp_paralaves_m as select * from vf_erp_paralaves;


CREATE MATERIALIZED VIEW vf_erp_possales_m as select * from vf_erp_possales;


CREATE INDEX vf_erp_possales_m_id_idx
  ON vf_erp_possales_m
  USING btree
  (id);



CREATE MATERIALIZED VIEW vf_erp_possales_tot_m as SELECT * from vf_erp_possales_tot;




CREATE MATERIALIZED VIEW vf_erp_my_barcodes_from_items_m as SELECT * from vf_erp_my_barcodes_from_items;



CREATE INDEX vf_erp_my_barcodes_from_items_m_mybarcode_idx
  ON vf_erp_my_barcodes_from_items_m
  USING btree
  (mybarcode);

CREATE INDEX vf_erp_my_barcodes_from_items_m_myhope_idx
  ON vf_erp_my_barcodes_from_items_m
  USING btree
  (myhope);


CREATE MATERIALIZED VIEW vf_erp_custs_m as select * from vf_erp_custs;


CREATE INDEX vf_erp_custs_m_id_idx
  ON vf_erp_custs_m
  USING btree
  (id);




CREATE MATERIALIZED VIEW vf_erp_barcodes_m as SELECT * from vf_erp_barcodes ;



CREATE INDEX vf_erp_barcodes_m_id_mymasteritemx
  ON vf_erp_barcodes_m
  USING btree
  (mymasteritem);

CREATE INDEX vf_erp_barcodes_m_id_mybarcodex
  ON vf_erp_barcodes_m
  USING btree
  (mybarcode);


CREATE MATERIALIZED VIEW vf_erp_my_items_metasiskevasia_antistixisi_m as SELECT * from vf_erp_my_items_metasiskevasia_antistixisi;


CREATE MATERIALIZED VIEW vf_erp_my_items_metasiskevasia_proionta_m as SELECT * from vf_erp_my_items_metasiskevasia_proionta;


CREATE MATERIALIZED VIEW vf_erp_my_barcodes_items_antistixisi_m as SELECT * from vf_erp_my_barcodes_items_antistixisi;



CREATE MATERIALIZED VIEW vf_erp_my_items_apomiosi_m as SELECT * from vf_erp_my_items_apomiosi;


CREATE MATERIALIZED VIEW vf_erp_my_totals_m as select * from vf_erp_my_totals;