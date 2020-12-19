<?php
	require "connect.php";

	$id = $_GET["id"];

	$sql1 = "DELETE FROM `posts` WHERE `class_id`=$id";
	$sql2 = "DELETE FROM `classes` WHERE `id`=$id";
	if ($connection->query($sql1) === TRUE) {
		if ($connection->query($sql2) === TRUE) {
			header("Location: TrangNguoiDung.php");
		}
	}
?>