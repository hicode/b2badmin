INSERT INTO core_crm_customer_health(mykatastima,
            fkcustomer)
    (select mykatastima,id from core_crm_customer);

