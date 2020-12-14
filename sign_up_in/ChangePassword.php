<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Quên mật khẩu</title>
</head>
<body class="background-color1">
    <div>
        <form class="modal-content animate" action="reset_function.php" method="post">
            <div class="container">
                <h2>Thay đổi mật khẩu</h2> 
                <label for="pw2"><b>Nhập username</b></label>
                <input type="text" placeholder="Username" name="username_reset" required>
                
                <label for="pw2"><b>Mật khẩu mới</b></label>
                <input type="password" placeholder="Nhập mật khẩu mới" name="pw2" required>
                
            <div class="clearfix">
                
                <button type="cancel"  class="btnCancel">Cancel</button>
                <button type="submit" class= "btnOnClick">Đổi mật khẩu</button>
                
            </div>
                
    
            </div>
        </form>

    </div>
    

</body>
</html>