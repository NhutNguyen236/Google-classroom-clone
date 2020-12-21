<?php
    require "connect.php";
    
    // Assign userid
    $user_id = $_GET['userid'];
    
    // Get fullname from users table according to users table so we can assign it to class_lecturer
    $get_fullname = "SELECT `fullname` from `users` where `user_id`=$user_id;";
    $get_fullname_result = mysqli_query($connection, $get_fullname) or die(mysqli_error($connection));
    $row = mysqli_fetch_array($get_fullname_result);

    $class_name = $_POST["class_name"];
    $class_title = $_POST["class_title"];
    // Get fullname from users db to assign it to lecturer not post no more 
    $class_lecturer = $row[0];

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
        // Input created class in classes table
        $sql = "INSERT INTO `classes` (`id`, `class_name`, `class_title`,`lecturer`) 
        VALUES (NULL, '$class_name','$class_title', '$class_lecturer');";
                
        if($connection->query($sql) === true){
            /**
             * First, get that created class_id then assign it to class_id in class_list to record which class belongs to which user
             */
            // get created class_id with class_name was given
            $get_classid = "SELECT `id` FROM `classes` WHERE `class_name` = '$class_name'";
            $result = mysqli_query($connection, $get_classid) or die(mysqli_error($connection));
            $row = mysqli_fetch_array($result);
            $created_classid = $row[0];

            // connect class and user in class_list table 
            $sql1 = "INSERT into `class_list`(`class_id`,`user_id`) VALUES($created_classid, $user_id)";
            if($connection->query($sql1) === true){
                require("TrangNguoiDung.php");
            }
            
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }
?>