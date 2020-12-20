<?php
    require('connect.php');

    //assgin variables by using POST method
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $password = $_POST['psw1'];
    $fullname = $_POST['name'];
    $birth = $_POST['birthdate'];
    $email = $_POST['email'];
    $phone = $_POST['PhoneNumber'];
    $role = $_POST['role'];
    $status = $_POST['status'];

    // get id and username using GET
    $id = $_GET['id'];
    $user = $_GET['username'];

    // Query to update infor
    // Remeber to use '' OK...


    
    $sql = "UPDATE `users` SET `user_id`=$userid, `username`='$username', `password`='$password', `fullname`='$fullname', `birthdate`='$birth', `email`='$email', `phone`=$phone, `role`=$role, `status` = $status WHERE `user_id`=$id;";
            
    if($connection->query($sql) === true){
        echo 
        "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>$user has been updated
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>";
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }

    require_once('TrangAdmin.php');

?>