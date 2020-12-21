<?php
    require('connect.php');

    //assgin variables by using POST method
    $id = $_GET['id'];
    $userid = $_GET['userid'];
    $student_id = $_GET['student_id'];
    $fullname = $_GET['fullname'];

    $sql = "DELETE FROM `class_list` WHERE `user_id` = $student_id;";
            
    if($connection->query($sql) === true){
        echo 
        "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
            <strong>$fullname has been deleted
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>";
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }

    require('classlist.php');

?>