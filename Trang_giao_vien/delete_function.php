<?php
require "connect.php";
$id = $_GET["id"];
$sql = "DELETE FROM classes WHERE id=$id";
if ($connection->query($sql) === TRUE) {
	header("Location: TrangNguoiDung.php");
}
?>