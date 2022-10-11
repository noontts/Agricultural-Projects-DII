<?php
    /* 
     * Define variable to link to the local server for @PHPmyadmin.
     * WARNING!! don't edit value of these variables. 
     */
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "agriDB";
    $connect = mysqli_connect($server, $user, $password, $dbname);

    /*
     * If it can't connect to the database will die the system
     * and display text to alert to developer.
     */
    if (!$connect) {
        die("ERROR\: Cannot connect to the database $dbname on server $server using username $user (" 
        .mysqli_connect_errno(). ", ".mysqli_connect_error(). ")");
    }

    //Connect to database "$connect" and set encoding to UTF8 
    mysqli_query($connect, "SET NAMES utf8");
?>