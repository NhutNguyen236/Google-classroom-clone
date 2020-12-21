<?php
	/**
	 * We need to delete from both class_list and classes for classes not just classes
	 */
	require "connect.php";

	// Assign username and userid ready to give it a fold back in header
	$username = $_GET['username'];
	$userid = $_GET['userid'];

	$id = $_GET["id"];

	$sql1 = "DELETE FROM `posts` WHERE `class_id`=$id";
	// Add sql to remove class from class_list by using class_id  
	$sql3 = "DELETE FROM `class_list` WHERE `class_id`=$id";
	$sql2 = "DELETE FROM `classes` WHERE `id`=$id";

	if ($connection->query($sql1) === TRUE) {
		if ($connection->query($sql3) === TRUE) {
			if ($connection->query($sql2) === TRUE) {
				header("Location: TrangNguoiDung.php?username=$username&&userid=$userid");
			}
		}
	}
?>