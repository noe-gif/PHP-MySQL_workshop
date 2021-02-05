<?php 
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* function to connect the database */
    function ConnectDb() 
    {
        /* step 1: fill the gaps with your credits */
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "";
        $db = "workshop";

        /* new instance(object) of mysqli class(which links the mysql
        server(displayed in our phpMyAdmin) as well as getting all our required functions) */
        $mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $db);

        /* catch error */
        if ($mysqli->connect_errno)
            return 84;

        /* return of the new mysqli object */
        return $mysqli;
    }

    /* Hide php default errors messages to user */
    error_reporting(0);
    ini_set('display_errors', 0);
?>