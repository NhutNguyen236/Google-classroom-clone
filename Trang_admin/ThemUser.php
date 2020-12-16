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

    // Message to inform what error should be
    $message = "";

    // check if user is here or not so we can add new user with no overlapping situation
    $user_check_query = "SELECT * FROM users WHERE `username`='$username' OR `email`='$email' LIMIT 1";
    $result = mysqli_query($connection, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
            $message = "Username already exists" ;
            echo $message;
        }

        else if ($user['email'] === $email) {
            $message = "Email already exists";
            echo $message;
        }
    }

    else{
        $sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `birthdate`, `email`, `phone`, `role`) 
        VALUES (NULL, '$username', '$password', '$fullname', '$birth', '$email', '$phone', '$role');";
                
        if($connection->query($sql) === true){
            echo 
            "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                <strong>User added
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
    }

?>