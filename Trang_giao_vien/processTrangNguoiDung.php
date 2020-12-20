<?php
    $class_name = $_POST["class_name"];
    $class_title = $_POST["class_title"];
    $class_lecturer = $_POST["lecturer"];

    require "connect.php";

    $message = "";

    // check if class name is here or not so we can add new user with no overlapping situation
    $class_check_query = "SELECT * FROM `classes` WHERE `class_name`='$class_name' LIMIT 1";
    $result = mysqli_query($connection, $class_check_query);
    $class = mysqli_fetch_assoc($result);
    
    if (isset($class_name) && $class) { // if user exists
        if ($class['class_name'] === $class_name) {
            $message = "Class already exists" ;
            echo $message;
        }
    }

    else{
        $sql = "INSERT INTO `classes` (`id`, `class_name`, `class_title`,`lecturer`) 
        VALUES (NULL, '$class_name','$class_title', '$class_lecturer');";
                
        if($connection->query($sql) === true){
            require("TrangNguoiDung.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }
?>