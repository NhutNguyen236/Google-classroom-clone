<?php
    require('connect.php');

    //assgin variables by using POST method
    $username = $_POST['username'];
    $password = $_POST['psw1'];
    $fullname = $_POST['fullname'];
    $birth = $_POST['birthday'];
    $email = $_POST['uname1'];
    $phone = $_POST['PhoneNumber'];
    $role = $_POST['role'];

    $sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `birthdate`, `email`, `phone`, `role`) 
    VALUES (NULL, '$username', '$password', '$fullname', '$birth', '$email', '$phone', '$role');";
			
    if($connection->query($sql) === true){
        echo "User added";
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }
?>