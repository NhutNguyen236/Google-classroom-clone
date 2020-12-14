<?php
   $class_name = $_POST["class_name"];
   $class_title = $_POST["class_title"];
   $class_code = $_POST["class_code"];

   require "connect.php";
   if (empty($_POST["id"])){
       $stmt = $connection->prepare("INSERT INTO classes(class_name,class_title,class_code) VALUES (?,?,?)");
   }else{
      $id = $_POST["id"];
      $stmt = $connection->prepare("UPDATE classes SET class_name=?, class_title=?, class_code=? WHERE id = $id");
   }
      $stmt->bind_param("sss", $class_name, $class_title, $class_code);

      if ($stmt->execute() === TRUE)
      {
         header("Location: TrangNguoiDung.php");

      } else{
         echo "Error: " .$sql . "<br>" . $connection->error;
      }
?>
