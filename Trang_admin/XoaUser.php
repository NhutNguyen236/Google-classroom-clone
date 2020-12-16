<?php
    require('connect.php');

    //assgin variables by using POST method
    $userid = $_GET['id_delete'];
    $username = $_GET['username'];

    $sql = "DELETE FROM users WHERE user_id = $userid;";
            
    if($connection->query($sql) === true){
        echo 
        "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>$username has beendeleted
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