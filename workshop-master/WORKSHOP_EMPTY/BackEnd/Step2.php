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
            QUERY ".$name."(
                ROW1,
                ROW2,
                ROW3,
                RULE1
            )";
        /* function that takes the mysqli object as first parameter and the name as it's second */
        if (mysqli_query(PARAM1, PARAM2))
            echo $name." created successfully";  
        else
           echo "There was a problem when creating ".$name;
        mysqli_close($link);
   }

    /* Hide php default errors messages to user */
    error_reporting(0);
    ini_set('display_errors', 0);
?>