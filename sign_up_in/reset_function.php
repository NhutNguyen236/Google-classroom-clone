<?php
    require('connect.php');

    $username = $_POST['username_reset'];

    // Update old password with new one
    $new_password = $_POST['pw2'];

    // Check if username is in db or not
    $sql_check_username = "select `username` from users where `username` = '$username'";
        
    $result = mysqli_query($connection, $sql_check_username) or die(mysqli_error($connection));
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        if(!empty($new_password)){
            $sql = "UPDATE `users` SET `password` = '$new_password' where `username` = '$username' ";
            
            if($connection->query($sql) === true){
                echo "Your password has changed";
            }
            else{
                echo "Update failed";
                die();
            }
        }
    }
    else{
        echo "This username is not real, please fold back";
        die();
    }
?>