<?php
    $host="localhost";
    $dbname="charity and donation";
    $dbuser="root";
    $dbpass="";

    function dbConnection(){
        global $host;
        global $dbname;
        global $dbuser;
        global $dbpass;

        $conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);
        return $conn;
    }
?>