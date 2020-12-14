<?php
require "connect.php";
$id = $_GET["id"];
$sql = "DELETE FROM posts WHERE id=$id";
if ($connection->query($sql) === TRUE) {
	header("Location: TrangMonHoc.php");
}
?>