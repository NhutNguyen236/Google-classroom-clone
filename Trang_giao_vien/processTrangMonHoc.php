<?php   
    /** 
     * The mission is that we must get user_id and post_id to assign them to post_user table
     * Then crawl data from post_user to get post and post owner out of that one
    */

    $post_content = $_POST["post_content"];
    $username = $_GET['username'];
    // Fix that single quote by adding slashes to the post_content
    $new_post_content = addslashes($post_content);

    $class_id = $_GET["class_id"];

    require "connect.php";

    $message = "";

    $sql = "INSERT INTO `posts` (`id`, `post_content`, `class_id`) VALUES (NULL, '$new_post_content', $class_id);";
    
    if($connection->query($sql) === true){
        header("Location: TrangmonHoc.php?id=$class_id && username=$username");
    }
    else{
        echo "Error: " . $sql . "<br>" . $connection->error;
        $connection->close();
    }
?>
