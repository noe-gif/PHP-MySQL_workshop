<?php
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* function that executes a SELECT query and display the resulting data */
    function selectResearcher($link)
    {
        /* fill the gaps to make the right query */
        $query = "
            SELECT zunite.XXXXXXX, XXXXXXX.Datedebut, XXXXXXX.XXXXXXX , zchercheur.XXXXXXX, XXXXXXX.Prenom 
            FROM XXXXXXX, XXXXXXX, XXXXXXX 
            WHERE XXXXXXX.XXXXXXX = XXXXXXX.XXXXXXX 
            AND zunite.XXXXXXX = XXXXXXX.Refunite
            AND XXXXXXX 
            AND XXXXXXX
            AND XXXXXXX 
            XXXXXXX XXXXXXX ASC 
            XXXXXXX
        ";

        /* if there's a problem with the query (wrong table, wrong data name,...) */
        if (!mysqli_query($link, $query))
            return false;

        /* function that you don't need to focus on (prints some HTML) */
        print_html();

        /* executing the query + checking if results dropped from the query */
        if ($result = $link->query($query)) {
            /* as long as you find data in rows */
            while ($row = $result->fetch_assoc()) {
                $Id = $row["Idunite"];
                $date = $row["Datedebut"];
                $Idche = $row["Idche"];
                $lastName = $row["Nom"];
                $Name = $row["Prenom"];
                echo "<tr>
                        <td>$Id</td>
                        <td>$date</td>
                        <td>$Idche</td>
                        <td>$lastName</td>
                        <td>$Name</td>
                    </tr>";
            }
        }
        echo "</table></div>";
        return true;
    }




    function print_html()
    {
        echo "<div class='tableStyle'>
            <table class='table table-dark table-striped'>
                <tr>
                    <td> <font face='Arial'>Id</font> </td>
                    <td> <font face='Arial'>Date début</font> </td>
                    <td> <font face='Arial'>Id du chercheur</font> </td>
                    <td> <font face='Arial'>Nom</font> </td>
                    <td> <font face='Arial'>Prénom</font> </td>
                </tr>";
    }

    error_reporting(0);
    ini_set('display_errors', 0);
?>