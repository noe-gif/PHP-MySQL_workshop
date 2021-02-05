<?php 
    /*
    ** Workshop
    ** EPITECH 2021
    */

    /* including the mysql server connexion */
    include 'Step1.php';

    $link = ConnectDb();

    /* getting the data sent from Step7.js */
    $var =  $_POST['dropList'];
    /* fill the gaps to get the right data that will be sent later */
    $result = $link -> query("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");
    $credits = array();
    /* as long as you get result you put it on the array */
    while ($row = mysqli_fetch_object($result))
        array_push($credits, $row);
    /* sending all this data in JSON to Step7.js that will display it */
    echo json_encode($credits);
    /* exiting the file */
    exit();
?>