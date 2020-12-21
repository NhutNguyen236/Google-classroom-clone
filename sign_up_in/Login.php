<?php
    //Session to refuse if login was already performed
    session_start();
    if(!isset($_SESSION['email'])){
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset = "utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Google Classroom Clone</title>
    <!-- add icon link -->
    <link rel = "icon" href = "https://www.pinclipart.com/picdir/middle/388-3886129_google-classroom-logo-google-classroom-icon-clipart.png" type = "image/x-icon">
</head>
<body>

    <video autoplay muted loop id="myVideo">
        <source src="blue_plate.mp4" type="video/mp4">
    </video>
    
<div class="content" > <!--Lớp CONTENT GIÚP CĂN GIỮA FORM TRONG BACKGROUND-->
    <div>
        <form class="modal-content " method="post" action = "login_function.php">
            <div class="imgcontainer">
                <img src="./image/icon.png" alt="Avatar" class="avatar">
            </div>  
            <div class="container">
                <label for="uname"><b>Email hoặc số điện thoại</b></label>
                <input type="text" name="uname" required>
        
                <label for="psw"><b>Mật khẩu</b></label>
                <input type="password" name="psw" required>
                    
                <button type="submit">Đăng nhập</button>

                <!-- Khi click vào nút đăng ký thì sẽ hiện ra form đăng ký <=> display='block'-->
                <button  type="submit" onclick= "document.getElementById('id01').style.display='block'"
                style="width:100%;"> Đăng ký tài khoản </button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
    
            <div class="container" >
                <span class="psw"> <a href="ForgotPassword.php">Quên mật khẩu!</a></span>
            </div>
        </form>


        <!-- Form đăng ký sử dụng javascript-->
        <div id = "id01" class= "modal">
            <form class="modal-content animate" method="post" action = "signup_function.php">
                <div class="container">
                    <h2>Đăng ký tài khoản </h2> 
                    <p class="colortext">Vui lòng điền vào biểu mẫu này để tạo tài khoản</p>
                    
                    <label for="username"><b>Username</b></label>
                    <input type="text" name="username" required>

                    <label for="uname1"><b>Email</b></label>
                    <input type="text" name="uname1" required>
        
                    <label for="psw1"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Hãy nhập mật khẩu" name="psw1" required>
        
                    <label for="name"><b>Họ và tên</b></label>
                    <input value= "<?php echo $fullname ?>" type="text" placeholder="Nhập họ và tên" id="fullname" name="fullname" required>
                    
                    <div>
                        <label for="birthdate"><b>Ngày sinh</b></label><br>
                        <input type="date" name = "birthday">
                    </div>
                    
                    <br>

                    <label for="PhoneNumber"><b>Số điện thoại</b></label>
                    <input type="text" placeholder="Nhập số điện thoại" name="PhoneNumber" required>

                    <label for="role"><b>Vai trò của bạn là</b></label>
                    <div>
                        <input type="radio" name="role" value = "1"> Học sinh
                        <input type="radio" name="role" value = "2" style = "margin-left: 10px;"> Giáo viên
                    </div>
                    
                    <!--Khi nhấn nút cancel thì đóng form đăng ký lại-->
                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btnCancel">Cancel</button>
                    <button type="submit" class= "btnOnClick">Đăng ký</button>
                    
                </div>
                    
        
                </div>
            </form>
    
        </div>
        
    
    </div>
</div>  

<?php
    // Else session is set so move on
    }
    else if($_SESSION["role"] == 1 && isset($_SESSION["email"])){
        header("Location: ../main_page/TrangNguoiDung.php");
    }

    else if($_SESSION["role"] == 2 && isset($_SESSION["email"])){
        header("Location: ../Trang_giao_vien/TrangNguoiDung.php");
    }

    else if($_SESSION["role"] == 3 && isset($_SESSION["email"])){
        header("Location: ../Trang_admin/TrangAdmin.php");
    }
?>
</body>
</html>
