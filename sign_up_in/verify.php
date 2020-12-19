<?php
    require("connect.php");

    $username = $_GET['username'];

    $sql = "UPDATE `users` SET `status`= 1 where `username` = '$username'";
    if($connection->query($sql) === true){
        header("Location: Login.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();   
    }
?>