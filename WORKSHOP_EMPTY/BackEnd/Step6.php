<?php
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* function that empties a table (table taken in parameter) */
    function deleteContentTable($link, $table)
    {
        /* fill the gap to execute the right query */
        $queryDelete = "XXXXXXX";

        /* query to reset id row of the table */
        $queryResetId = "ALTER TABLE $table AUTO_INCREMENT = 1;";

        /* fill the gaps so that both queries are executed */
        if (!mysqli_query($link, $XXXXXXX) || !mysqli_query($link, $XXXXXXX))
            return false;
        return true;   
    }

    /* function that empties a table (table taken in parameter) BUT with a condition taken in parameter */
    function deleteConditionTable($link, $table, $condition)
    {
        /* fill the gap to execute the right query */
        $queryDelete = "DELETE FROM $table WHERE  $condition;";

        if (!mysqli_query($link, $queryDelete))
            return false;
        return true;   
    }
?>