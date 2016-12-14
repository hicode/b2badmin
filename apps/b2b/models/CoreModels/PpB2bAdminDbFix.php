<?php

namespace B2b\Models\CoreModels;

//This file was created by autogenerator php on 2016-02-07 17:51:14 
//Powered by Panagiotis Pantelakis 
//Email : panagiotis.pantelakis@gmail.com

class PpB2bAdminDbFix extends \Phalcon\Db\Dialect\PostgreSQL implements \Phalcon\Db\DialectInterface {

    /**
     * Generates SQL checking for the existence of a schema.view
     */
    public function viewExists($viewName, $schemaName = null) {
        if ($schemaName) {
            return "SELECT CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END FROM pg_class c INNER JOIN pg_namespace n ON c.relnamespace = n.oid WHERE relkind IN ('v', 'm') AND relname='" . $viewName . "' AND n.nspname = '" . $schemaName . "'";
        }
        return "SELECT CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END FROM pg_class c WHERE relkind IN ('v', 'm') AND relname='" . $viewName . "'";
    }

    /**
     * Generates the SQL to list all views of a schema or user
     *
     * @param string schemaName
     * @return string
     */
    public function listViews($schemaName = null) {
        if ($schemaName) {
            return "SELECT relname AS view_name FROM pg_class c INNER JOIN pg_namespace n ON c.relnamespace = n.oid WHERE relkind IN ('v', 'm') AND n.nspname = '" . $schemaName . "' ORDER BY view_name";
        }
        return "SELECT relname AS view_name FROM pg_class c INNER JOIN pg_namespace n ON c.relnamespace = n.oid WHERE relkind IN ('v', 'm') AND n.nspname = 'public' ORDER BY view_name";
    }

    /**
     * Generates SQL checking for the existence of a schema.table
     *
     * <code>
     *    echo $dialect->tableExists("posts", "blog");
     *    echo $dialect->tableExists("posts");
     * </code>
     */
    public function tableExists($tableName, $schemaName = null) {
        if ($schemaName) {
            return "SELECT CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END FROM pg_class c INNER JOIN pg_namespace n ON c.relnamespace = n.oid WHERE relkind IN ('v', 'm', 'r') AND relname='" . $tableName . "' AND n.nspname = '" . $schemaName . "'";
        }
        return "SELECT CASE WHEN COUNT(*) > 0 THEN 1 ELSE 0 END FROM pg_class c WHERE relkind IN ('v', 'm', 'r') AND relname='" . $tableName . "'";
    }

    public function describeColumns($table, $schema = 'public') {
        if ($schema) {
            return
                    "SELECT 
                a.attname AS Field,
                t.typname AS Type,
                (information_schema._pg_char_max_length(information_schema._pg_truetypid(a.*, t.*), 
                    information_schema._pg_truetypmod(a.*, t.*)))::information_schema.cardinal_number 
                    AS Size,
                (information_schema._pg_numeric_precision(information_schema._pg_truetypid(a.*, t.*), 
                    information_schema._pg_truetypmod(a.*, t.*)))::information_schema.cardinal_number 
                    AS NumericSize,
      (information_schema._pg_numeric_precision_radix(information_schema._pg_truetypid(a.*, t.*), 
                    information_schema._pg_truetypmod(a.*, t.*)))::information_schema.cardinal_number 
                    AS NumericScale,
                (CASE WHEN a.attnotnull=false THEN 'YES' ELSE 'NO' END) as Null, 
                (CASE WHEN con.contype IS NOT NULL THEN 'PRI' ELSE '' END)  as Key,
                CASE  WHEN t.typname LIKE '%int%' AND 
                    (pg_get_expr(ad.adbin, ad.adrelid))::information_schema.character_data LIKE '%nextval%' 
                    THEN 'auto_increment' 
                    ELSE '' END  as Extra,
                a.attnum as Position,
                ad.adsrc as Description
        FROM  
                pg_class c,
                pg_namespace nf,
                pg_type t,
                pg_attribute a
            LEFT JOIN pg_attrdef ad ON (((a.attrelid = ad.adrelid) AND (a.attnum = ad.adnum)))
            LEFT JOIN pg_description d ON d.objsubid = a.attnum AND a.attrelid = d.objoid
            LEFT JOIN pg_constraint con ON con.conrelid = a.attrelid AND con.conkey[1] = a.attnum
            WHERE nf.nspname = '$schema' 
                AND c.relname='$table' 
                AND a.attnum > 0 
                AND a.attrelid = c.oid 
                AND a.atttypid = t.oid 
                AND nf.oid = c.relnamespace 
            ORDER BY a.attnum";
        }
        return
                "SELECT 
            a.attname AS Field,
            t.typname AS Type,
            (information_schema._pg_char_max_length(information_schema._pg_truetypid(a.*, t.*), 
                information_schema._pg_truetypmod(a.*, t.*)))::information_schema.cardinal_number 
                AS Size,
            (information_schema._pg_numeric_precision(information_schema._pg_truetypid(a.*, t.*), 
                information_schema._pg_truetypmod(a.*, t.*)))::information_schema.cardinal_number 
                AS NumericSize,                (information_schema._pg_numeric_precision_radix(information_schema._pg_truetypid(a.*, t.*), 
                information_schema._pg_truetypmod(a.*, t.*)))::information_schema.cardinal_number 
                AS NumericScale,
            (CASE WHEN a.attnotnull=false THEN 'YES' ELSE 'NO' END) as Null, 
            (CASE WHEN con.contype IS NOT NULL THEN 'PRI' ELSE '' END)  as Key,
            CASE  WHEN t.typname LIKE '%int%' AND 
                (pg_get_expr(ad.adbin, ad.adrelid))::information_schema.character_data LIKE '%nextval%' 
                THEN 'auto_increment' 
                ELSE '' END  as Extra,
            a.attnum as Position,
            ad.adsrc as Description
        FROM  
            pg_class c,
            pg_namespace nf,
            pg_type t,
            pg_attribute a
        LEFT JOIN pg_attrdef ad ON (((a.attrelid = ad.adrelid) AND (a.attnum = ad.adnum)))
        LEFT JOIN pg_description d ON d.objsubid = a.attnum AND a.attrelid = d.objoid
        LEFT JOIN pg_constraint con ON con.conrelid = a.attrelid AND con.conkey[1] = a.attnum
        WHERE nf.nspname = 'public' 
            AND c.relname='$table' 
            AND a.attnum > 0 
            AND a.attrelid = c.oid 
            AND a.atttypid = t.oid 
            AND nf.oid = c.relnamespace 
        ORDER BY a.attnum";
    }

}
