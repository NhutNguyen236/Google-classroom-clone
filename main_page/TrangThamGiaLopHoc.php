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
   
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
         <a class= "navbar-brand" href=""> Tham gia lớp học</a>
       
        <ul class="navbar-nav ml-auto">
            <button id="btn_Thamgia">Tham gia</button>
        </ul>
    </nav>
    <div class="form ">
        <div class="item_form1">
            <p>
                Bạn đăng nhập bằng tài khoản
            </p>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle account" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg>
            <span></span>
            <a class="btn btn-primary" href="logout.php" role="button">Chuyển đổi tài khoản</a>

        </div>
       
    </div>
    <div class="form">
        <div class="item_form2">
            <h5>Mã lớp</h5>
            <p>Đề nghị giáo viên của bạn cung cấp mã lớp rồi nhập mã
                vào đây
            </p>
                <form action="">
                    <input id="code_Class" type="text" placeholder="Mã lớp" name="code_Class" required>
                </form>
        </div>
    </div>
    <div class="form1">
        <div class="text_suggestions">
            <p><b>Cách đăng nhập bằng mã lớp học</b></p>
            <ul>
                
            </ul>
            <li>
                Sử dụng tài khoản được cấp phép
            </li>
            <li>
                Sử dụng mã lớp học gồm 5-7 chữ cái hoặc số, không có
                dấu hoặc ký hiệu
            </li>
            <p>Nếu bạn đang gặp vấn đề khi tham gia lớp học
                , hãy liên hệ giáo viên tạo lớp học
            </p>
        </div>

    </div>

</body>
</html>
