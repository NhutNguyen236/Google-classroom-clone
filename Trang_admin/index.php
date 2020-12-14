<?php
	session_start(); 
?>

<?php require_once("connect.php");?>

<?php
	$sql = "SELECT * FROM users";
	$query = mysqli_query($connection,$sql);
?>

<!-- Xóa người dùng -->
<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM users WHERE id = ".$_GET["id_delete"];
        mysqli_query($connection,$sql);
        header('Location: quan-ly-thanh-vien.php');
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link  rel="stylesheet"  href="./style.css">
    <title>Document</title>
</head>
<body class="body_control">
    <table class="member_table" >
	<thead>
		<tr >
			<td>ID</td>
			<td>Username</td>
			<td>Phone</td>
			<td>Email</td>
			<td>Khóa tài khoản</td>
			<td>Quyền</td>
			<td>Pass</td>
			<td>Hành động</td>
			
		<tr>
	</thead>
	<tbody>
	<?php 
		while ( $data = mysqli_fetch_array($query) ) {
			$i = 1;
			$id = $data['id'];
	?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['phone']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo ($data['is_block'] == 1) ? "Bị khóa" : "Không bị khóa"; ?></td>
			<td><?php echo ($data['permision'] == 0) ? "Thành viên thường" : "Admin"; ?></td>
			<td><?php echo $data['password']; ?></td>
			
			<td>
				<a href="chinh-sua-thanh-vien.php?id=<?php echo $id;?> " >Sửa</a>
				<a href="index.php?id_delete=<?php echo $id;?>">Xóa</a>
			</td>
		</tr>
	<?php 
			$i++;
		}
	?>
	</tbody>
</table>

<a href="./them-thanh-vien.php">Them thanh vien</a>
<a href="./index.php">Quay về trang chủ</a>

</body>
</html>

