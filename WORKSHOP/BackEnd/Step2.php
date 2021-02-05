<?php
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* function to create the table with it's name (taken in parameter) */
    function CreateTableStep2($link, $name) 
    {
        /* step 1: fill the gaps with the right query (sql syntax + php variables) */
        $query = "
            CREATE TABLE IF NOT EXISTS ".$name." (
                id INT AUTO_INCREMENT,
                name VARCHAR(20) NOT NULL,
                password VARCHAR(20) NOT NULL,
                primary key (id)
            )";

        /* execution of the query */
        if (mysqli_query($link, $query))
            return true;
        return false;
   }

    /* Hide php default errors messages to user */
    error_reporting(0);
    ini_set('display_errors', 0);
?>