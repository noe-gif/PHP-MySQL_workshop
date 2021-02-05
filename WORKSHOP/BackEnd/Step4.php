<?php
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* function that adds a singe row in one table (taken in parameter), executes a binded query and hashs a password before adding it */
    function addBindedNhashed($link, $username, $password, $table)
    {
        /* step 1: fill the gaps with the right query (binded sql syntax + php variables) */
        $query = "INSERT INTO $table (id, name, password) VALUES (?, ?, ?)";

        /* fill the gap to prepare the querry  */
        if ($result = $link->prepare($query)) {
            /* fill the gap to bind the data */
            $result->bind_param('sss', $id, $param_username, $param_password);
            /* fill the gaps to create the added data taken in parameter */
            $id = '';
            $param_username = $username;
            /* fill the gap to create a hashed password (you can use the default provided algorithms from php : PASSWORD_ARGON2I or PASSWORD_DEFAULT)*/
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            /* fill the gap to execute the query */
            if($result->execute())
                return true;
            $result->close();
            return false;
        }
        $link->close();
        return false;
    }

    error_reporting(0);
    ini_set('display_errors', 0);
?>
