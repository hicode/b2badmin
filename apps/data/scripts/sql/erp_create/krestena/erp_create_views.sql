CREATE OR REPLACE VIEW vf_erp_paralaves_krestena AS select * from vf_erp_paralaves where mykatastima='krestena';
CREATE OR REPLACE VIEW vf_erp_items_krestena AS select * from vf_erp_items where mykatastima='krestena';
CREATE OR REPLACE VIEW vf_erp_my_barcodes_from_items_krestena as select * from vf_erp_my_barcodes_from_items where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_custs_krestena as select * from vf_erp_custs where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_my_items_metasiskevasia_antistixisi_krestena as select * from vf_erp_my_items_metasiskevasia_antistixisi where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_my_items_metasiskevasia_proionta_krestena as select * from vf_erp_my_items_metasiskevasia_proionta where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_barcodes_krestena as select * from vf_erp_barcodes where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_possales_krestena as select * from vf_erp_possales where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_my_barcodes_items_antistixisi_krestena as select * from vf_erp_my_barcodes_items_antistixisi where mykatastima='krestena';
CREATE OR REPLACE VIEW vf_erp_my_items_apomiosi_krestena as select * from vf_erp_my_items_apomiosi where mykatastima='krestena';
CREATE OR REPLACE VIEW vf_erp_my_totals_krestena as select * from vf_erp_my_totals where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_possales_tot_krestena as select * from vf_erp_possales_tot where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_l_my_unit_of_measure_krestena as select * from vf_erp_l_my_unit_of_measure where mykatastima='krestena'; 
CREATE OR REPLACE VIEW vf_erp_l_my_vatcode_krestena as select * from vf_erp_l_my_vatcode where mykatastima='krestena'; 


