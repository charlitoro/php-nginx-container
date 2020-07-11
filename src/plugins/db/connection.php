<?php
    function OpenConnection(){
        $DB_HOST = "172.12.20.2:3306";
        $DB_USER = "collect";
        $DB_PWD = "AU49DK01KMR399S";
        $DB = "collectdb";

        $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PWD, $DB);
        mysqli_set_charset($connection,"utf8");
        return $connection;
    }

    function Close( $connection ) {
        $connection -> close();
    }
?>