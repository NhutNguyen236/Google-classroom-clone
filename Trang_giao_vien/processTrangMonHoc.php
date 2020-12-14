<?php
   $post_content = $_POST["post_content"];

   require "connect.php";

   if (empty($_POST["id"])){
       $stmt = $connection->prepare("INSERT INTO posts(post_content) VALUES (?)");
   }else{
      $id = $_POST["id"];
      $stmt = $connection->prepare("UPDATE posts SET post_content=? WHERE id = $id");
   }
      $stmt->bind_param("s", $post_content);

      if ($stmt->execute() === TRUE)
      {
         header("Location: TrangMonHoc.php");

      } else{
         echo "Error: " .$sql . "<br>" . $connection->error;
      }
?>
