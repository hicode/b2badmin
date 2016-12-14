INSERT INTO core_table_trigger(
            dbtablename, phpbeforeupdate)
    VALUES ('core_table','$this->setDbtablename(\AGCHParams::$Settings_Db_tbl_prefix_2.$this->getId());');

