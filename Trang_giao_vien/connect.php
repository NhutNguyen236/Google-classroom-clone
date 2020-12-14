<?php
    //assign db variables
    $host = "localhost";
    $dbuser = "root";
    $dbpassword = "123";
    $dbname = "google-classroom";

    //connect to db
    $connection = new mysqli($host, $dbuser, $dbpassword, $dbname);

    //check if the connection to the DB is not OK so end the process
    if($connection->connect_error){
        die('Connection lost: ' . $connection->connect_error);
    } 
?>