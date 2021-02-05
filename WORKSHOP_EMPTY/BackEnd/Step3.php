<?php
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* function that adds a row in table with it's data taken in parameter */
    function AddContentTable($link, $name, $password, $table)
    {
        /* step 1: fill the gaps with the right query (sql syntax + php variables) */
        $query = "XXXXXX $table XXXXXXXXXXXX (XXXXXXX)";

        /* function that takes the mysqli object as first parameter and the name as it's second */
        if (mysqli_query(PARAM2, PARAM1))
            return true;
        return false;
    }


    /* function that shows the data in table with the table's name taken in parameter */
    function ShowContentTable($link, $table)
    {
        /* step 1: fill the gaps with the right query (sql syntax) */
        $query = "XXXXXXXXXXXXXXXXXXXXXXXX";

        /* execution of the query */
        if (!mysqli_query($link, $query))
            return false;

        /* function that you don't need to focus on (prints some HTML) */
        print_html();

        /* executes the query in the object oriented way */ 
        if ($result = $link->query($query)) {
            /* as long as you find data in rows */
            while ($row = $result->fetch_assoc()) {
                $Id = $row["id"];
                $Name = $row["name"];
                $Password = $row["password"];
                echo "<tr>
                        <td>$Id</td>
                        <td>$Name</td>
                        <td>$Password</td>
                    </tr>";
            }
        }
        echo "</table></div>";
        return true;
    }





    function print_html()
    {
        echo " <div class='tableStyle'>
        <table class='table table-dark table-striped'>
        <tr>
            <td> <font face='Arial'>Id</font> </td>
            <td> <font face='Arial'>Name</font> </td>
            <td> <font face='Arial'>Password</font> </td>
        </tr>";
    }

    /* Hide php default errors messages to user */
    error_reporting(0);
    ini_set('display_errors', 0);
?>
