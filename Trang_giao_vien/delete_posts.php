<?php
	require "connect.php";
	$id = $_GET["id"];
	$class_id = $_GET["class_id"];
	$sql = "DELETE FROM posts WHERE id=$id";
	if ($connection->query($sql) === TRUE) {
		header("Location: TrangMonHoc.php?id=$class_id");
	}
?>