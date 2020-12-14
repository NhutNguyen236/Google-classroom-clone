<?php
    require('connect.php');
    
    $email = $_POST['uname1'];
    
    // Get username for email from db
    if (!empty($email)){
        // CHECK FOR THE RECORD FROM TABLE

        $sql = "SELECT `username` FROM `users` WHERE `email`='$email'";
        
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);

        if ($count == 1){
            //echo "Login Credentials verified";
            $to       = $email;
            $subject  = "Reset password for $row[0]";
            $message  = "
            <html>
            <body>
                <div>
                    <p>Please click the link below to reset your password</p>
                </div>
                <div>
                    <a href = \"http://localhost:88/Google-classroom-clone-1/sign_up_in/ChangePassword.php\">Click here to reset your password</a>
                </div>
            </body>
            </html>
            ";
            $headers  = 'From: nhutnguyenf330@gmail.com' . "\r\n" .
                        'MIME-Version: 1.0' . "\r\n" .
                        'Content-type: text/html; charset=utf-8';

            if(mail($to, $subject, $message, $headers))
                echo "Email sent";
            else
                echo "Email sending failed";
        }

        else{
            echo "<div class = \"alert alert-danger\">Wrong infor</div>";
            echo "<img class = 'align-items-center' src = \"data:image/jpeg;base64,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\"/>";
        }
    }
    else{
        echo "Something is not right or you have not fill all of the fields";
        die();
    }
?>