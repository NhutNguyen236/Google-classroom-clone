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

            //Send mail to verify the account
            $to       = $email;
            $subject  = "Mail verification for $username";
            $message  = "
            <html>
            <body>
                <div>
                    <h1>
                        Google classroom Clone with love
                    </h1>
                </div>
                <div>
                    <p>Please click the link below to reset your password</p>
                </div>
                <div>
                    <a href = \"http://localhost:88/Google-classroom-clone-1/sign_up_in/verify.php?username=$username\">Click here to verify that you are $username</a>
                </div>
            </body>
            </html>
            ";
            $headers  = 'From: nhutnguyenf330@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';

            if(mail($to, $subject, $message, $headers))
                echo "User added, please check " . $email . " for verification";
            else
                echo "Fail to send email to $email :(";
        }
        else{
            echo "Error: " . $sql . "<br>" . $connection->error;
            $connection->close();
        }
    }

?>