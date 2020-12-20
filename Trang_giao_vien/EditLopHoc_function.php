<?php
    $class_name = $_POST["class_name"];
    $class_title = $_POST["class_title"];
    $class_lecturer = $_POST["lecturer"];

    // Get class id 
    $class_id = $_GET['id'];

    require "connect.php";

    $message = "";

    // check if class name is here or not so we can add new user with no overlapping situation
    $sql = "UPDATE `CLASSES` SET `CLASS_NAME`='$class_name', `class_title`='$class_title', `lecturer`='$class_lecturer' where `id` = $class_id;";
    
    if($connection->query($sql) === true){
        require("TrangNguoiDung.php");
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }
?>