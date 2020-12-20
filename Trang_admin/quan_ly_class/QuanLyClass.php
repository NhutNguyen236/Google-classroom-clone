<?php
    session_start();

    if($_SESSION["email"]){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <link rel="stylesheet" href="../css/style_request2.css"/>
    <link rel="stylesheet" href="../css/table.css"/>
    <link rel="stylesheet" href="../css/TrangThamGiaLopHoc.css"/>
    <script src="../js/Collapse_sidebar.js"></script>

    <title>Quan Ly lop hoc</title>
    
</head>
<body>
   <!--Modal Tham gia lớp học bằng mã code-->
    <div class="modal fade right" id="ModalJoinClass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
        <div class="modal-content-full-width modal-content ">
           <div class=" modal-header-full-width">
               <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                 <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                     <span style="font-size: 1.8em;" aria-hidden="true">&times;</span>
                 </button>
                 <a class= "navbar-brand" href=""> Thêm user vào hệ thống</a>
               
            </nav>
           </div>
           <div class="modal-body">
             
            <div class="form">
                <div class="item_form1">
                    
                    <form method="post" action = "ThemUser.php">
                        <div class="container">
                            <h2>Be wise when you invite someone in</h2> 
                            <div>
                                <label for="username"><b>Username</b></label>
                                <input type="text" name="username" required>
                            </div>                
                            
                            <div>
                                <label for="uname1"><b>Email</b></label>
                                <input type="text" name="uname1" required>
                            </div>
                            
                            <div>
                                <label for="psw1"><b>Mật khẩu</b></label>
                                <input type="password" placeholder="Hãy nhập mật khẩu" name="psw1" required>
                            </div>
                            
                            <div>
                                <label for="name"><b>Họ và tên</b></label>
                                <input value= "<?php echo $fullname ?>" type="text" placeholder="Nhập họ và tên" id="fullname" name="fullname" required>
                            </div>    
                            
                            <div>
                                <label for="birthdate"><b>Ngày sinh</b></label><br>
                                <input type="date" name = "birthday">
                            </div>
                            
                            <div>
                                <label for="PhoneNumber"><b>Số điện thoại</b></label>
                                <input type="text" placeholder="Nhập số điện thoại" name="PhoneNumber" required>
                            </div>
                            
                            <div>
                                <label for="role"><b>Vai trò của bạn là</b></label>
                            </div>                    

                            <div class="form-check form-check-inline">
                                <input type="radio" name="role" value = "1"> Học sinh
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" name="role" value = "2"> Giáo viên
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="radio" name="role" value = "3"> Ủy quyền Admin
                            </div>
                            
                            <!--Khi nhấn nút cancel thì đóng form đăng ký lại-->
                        <div class="clearfix">
                            
                            <button type="submit" class= "btnOnClick btn btn-primary btn-lg btn-block">Add</button>
                            
                        </div>
                            
                
                        </div>
                    </form>
        
                </div>
               
            </div>
           </div>
       </div>
    </div>
    </div>


    <!-- Modal Tạo lớp học bởi giáo viên-->
    <!-- Form đăng ký sử dụng javascript-->
    <div id = "id01" class= "modal_FormCreateClass">
        <form class="modal-content1 animate" action="" method="post">
            <div class="container">
                <h1>Tạo lớp học</h1>
                <label for="name1"><b>Tên lớp học</b></label>
                <input type="text" placeholder="Tên lớp học (bắt buộc)" name="name1" required>

                <label for="name2"><b>Chủ đề</b></label>
                <input type="text" placeholder="Chủ đề" name="name2" required>

                <label for="name3"><b>Phòng</b></label>
                <input type="text" placeholder="Phòng" name="name" required>

                
                <!--Khi nhấn nút cancel thì đóng form đăng ký lại-->
            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class= "btn_CreateClass">Tạo</button>
                
            </div>
                

            </div>
        </form>

    </div>
    
    <!-- Trang chính-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-info">
            <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="../TrangAdmin.php">Quản lý Users</a>
                <a href="QuanLyClass.php">Quản lý Classes</a>
                <a href="QuanLyPost.php">Quản lý Posts</a>
            </div>
            <div id="main">
                <button class="openbtn" onclick="openNav()">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                </svg> </button>  
            </div>
            <a class="navbar-brand" href="#">
                <img src="../image/cap-1.png" width="60" height="35" class="d-inline-block align-top" alt="">
                Admin Panel
            </a>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                <a class="nav-link Join"href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" title="Tạo hoặc tham gia vào lớp học"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg></a>
                    <div class="dropdown-menu dropdown-menu-right" >
                        <a id="modalActivate"  data-toggle="modal" data-target="#ModalJoinClass" href="" class="dropdown-item" href="#">Thêm lớp học</a>
                        
                        <a onclick= "document.getElementById('id01').style.display='block'"
                        style="width:100%;" class="dropdown-item" href="PhanQuyenuser.php">---</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                <a class="nav-link avatar "
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-right" >
                <a class="dropdown-item" href="#">Tài khoản của tôi</a>
                <a class="dropdown-item" href="#">Đăng nhập bằng tài khoản khác</a>
                <a class="dropdown-item" href="../logout.php">Đăng xuất</a>
                </div>
                </li>
            </ul>
        </nav>

    <?php require_once("../connect.php");?>

    <?php
        $sql = 'SELECT * FROM `classes`';
        $result = $connection->query($sql) or die(mysqli_error($connection));
    ?>

    <!--SQL Table read-->
    <section>
        <table>
            <tr>
                <th>Class ID</th>
                <th>Class name</th>
                <th>Class title</th>
                <th>Lecturer name</th>
                <th>Admin Action</th>
            </tr>

            <?php
                while($row = $result->fetch_assoc()){
            ?>        
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['class_name'];?></td>
                <td><?php echo $row['class_title'];?></td>
                <td><?php echo $row['lecturer'];?></td>
                <td>
                    <a href="EditClass.php?id=<?php echo $row['id'];?> && class_name=<?php echo $row['class_name'];?> && class_title=<?php echo $row['class_title'];?> && lecturer=<?php echo $row['lecturer'];?>">Update</a>
                    <a href="XoaUser.php?id_delete=<?php echo $row['user_id'];?> && username=<?php echo $row['username'];?>">Delete</a>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </section>
    


</body>
</html>

<?php
    }
    else{
        header("Location: ../sign_up_in/Login.php");
    }
?>
