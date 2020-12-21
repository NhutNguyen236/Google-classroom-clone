<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style_request2.css">
    <script src="./js/Collapse_sidebar.js"></script> 
    <link rel="stylesheet" href="./css/TrangThamGiaLopHoc.css">
    <link rel="stylesheet" href="./css/Trangmonhoc.css">
    <title>Danh sach lop</title>
</head>
<body>
    <!--Thanh navbar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="class.php?userid=<?php echo $_GET['userid']?>">
                <img src="./image/TDT_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Tôn Đức Thắng University
            </a>
                <div class="topnav">
                    <?php
                        // Get class id and userid
                        $id = $_GET['id'];
                        $userid = $_GET['userid'];
                    ?>
                    <a href="Trangmonhoc.php?id=<?php echo $id?>&&userid=<?php echo $userid;?>">Trang lớp học</a>
                    <a class="nav-item" href="assignment.php?id=<?php echo $_GET['id'];?>&&userid=<?php echo $_GET['userid'];?>">Bài tập trên lớp</a>
                </div>
                <ul></ul>
    </nav>
    
    <!--Teacher section-->
    <h2 class="m-auto text-warning">Teachers</h2>
    <?php require_once("connect.php");?>

    <?php
        $class_id = $_GET['id'];
        $sql = "SELECT user_id from class_list where class_id = $class_id;";
        $result = $connection->query($sql) or die(mysqli_error($connection));
    ?>

    <!--SQL Table read-->
    <section>
        <table>
            <tr>
                <th>Full name</th>
            </tr>

            <?php
                while($row = $result->fetch_assoc()){
            ?>        
            <tr>
                <td>
                    <?php
                        $user_id = $row['user_id'];
                        $get_fullname = "SELECT `fullname`,`role` from `users` where `user_id` = $user_id";
                        $result_fullname = mysqli_query($connection, $get_fullname) or die(mysqli_error($connection));
                        $row_fullname = mysqli_fetch_array($result_fullname);
                        if($row_fullname[1] == 2){
                            echo $row_fullname[0];
                        }
                    ?>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </section>

    <!--Student section-->
    <h2 class="mt-5 text-success">Students</h2>
    <!--SQL Table read-->
    <?php
        $class_id = $_GET['id'];
        $sql = "SELECT user_id from class_list where class_id = $class_id;";
        $result = $connection->query($sql) or die(mysqli_error($connection));
    ?>
    <section>
        <table>
            <tr>
                <th>Fullname</th>
            </tr>

            <?php
                while($row = $result->fetch_assoc()){
            ?>        
            <tr>
                <td>
                    <?php
                        $user_id = $row['user_id'];
                        $get_fullname = "SELECT `fullname`,`role` from `users` where `user_id` = $user_id";
                        $result_fullname = mysqli_query($connection, $get_fullname) or die(mysqli_error($connection));
                        $row_fullname = mysqli_fetch_array($result_fullname);
                        if($row_fullname[1] == 1){
                            echo $row_fullname[0];
                        }
                    ?>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>
