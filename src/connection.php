<?php
    function OpenConnection(){
        $DB_HOST = "172.12.20.2:3306";
        $DB_USER = "root";
        $DB_PWD = "DJOPL838HSLV2K6";
        $DB = "mydb";

        $connection = mysqli_connect($DB_HOST, $DB_USER, $DB_PWD, $DB);;
        return $connection;
    }

    function CloseConnection( $connection ) {
        $connection -> close();
    }
?>