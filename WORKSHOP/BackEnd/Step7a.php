<?php 
    /*
    ** Workshop
    ** EPITECH 2021
    */


    /* function to create a droplist where each option to select is the ID of a researcher */
    function createDroplist($link)
    {
        /* fill the gaps to make the right query and getting the same 15 IDs as option */
        if ($result = $link->query("SELECT Idche FROM zchercheur LIMIT 15")) {

            /* some HTML you don't need to worry about */
            $html1 = getHtml(1);
            $html2 = getHtml(2);
            $html3 = getHtml(3);
            echo $html1, $html2;

            /* as long as you get results from the query */
            while($line = mysqli_fetch_array($result))
            {
                echo "<option value=" . $line['Idche'] . ">";
                echo $line['Idche'];
                echo "</option>";
            }
            /* some HTML you don't need to worry about */
            echo "</select>";
            echo $html3;
            return true;
        } else
            return false;
    }


    /* function that prints some HTML, don't need to focus on that */
    function getHtml($index)
    {
        if ($index == 1)
            return ("<select class='list_1' id='idDroplist' onchange='displayDataFromId()' onfocus='this.selectedIndex = -1;'>");
        else if ($index == 2)
            return ("<option value=''>--- Select Unité ---  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;</option>");
        else if ($index == 3)
            return ("<table><tbody id='credits'></tbody></table>");
        return ("");
    }

    /* Hide php default errors messages to user */
    error_reporting(0);
    ini_set('display_errors', 0);
?>