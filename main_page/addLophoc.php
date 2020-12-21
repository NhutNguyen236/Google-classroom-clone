<?php
    require "connect.php";

    $class_id = $_POST['code_Class'];
    $userid = $_GET['userid'];
    $username = $_GET['username'];

    // check if class is here or not so we can add new user with no overlapping situation
    $class_check_query = "SELECT * FROM `classes` WHERE `id`='$class_id' LIMIT 1";
    $result = mysqli_query($connection, $class_check_query);
    $class = mysqli_fetch_assoc($result);
    
    if ($class['id'] === $class_id) {
        // connect class and user in class_list table 
        $sql1 = "INSERT into `class_list`(`class_id`,`user_id`) VALUES($class_id, $userid)";
        if($connection->query($sql1) === true){
            header("Location: TrangNguoiDung.php?username=$username&&userid=$userid");
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }
?>