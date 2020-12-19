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
   <!--Modal Tham gia lớp học bằng mã code-->
   <div class="modal fade right" id="ModalJoinClass" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
       <div class="modal-content-full-width modal-content ">
           <div class=" modal-header-full-width">
               <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                 <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                     <span style="font-size: 1.8em;" aria-hidden="true">&times;</span>
                 </button>
                 <a class= "navbar-brand" href=""> Tham gia lớp học</a>
               
                <ul class="navbar-nav ml-auto">
                    <button id="btn_Thamgia">Tham gia</button>
                </ul>
            </nav>
           </div>
           <div class="modal-body">
             
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
                    <span><b>Thành Dương</b></span>
                    <button id="btn_changeAcc" ><b>Chuyển đổi tài khoản</b> </button>
        
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
           </div>
       </div>
   </div>
 </div>


<!-- Modal Tạo lớp học bởi giáo viên-->
<!-- Form đăng ký sử dụng javascript-->
<div id = "id01" class= "modal_FormCreateClass">
   <form class="modal-content1 animate" action="" method="=post">
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
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
         <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#">Lớp học</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
         </div>
         <div id="main">
            <button class="openbtn" onclick="openNav()">
               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
             </svg> </button>  
         </div>
         <a class="navbar-brand" href="#">
            <img src="TDT_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Tôn Đức Thắng University
         </a>

         <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
               <a class="nav-link Join"href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" title="Tạo hoặc tham gia vào lớp học"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg></a>
                  <div class="dropdown-menu dropdown-menu-right" >
                    <a id="modalActivate"  data-toggle="modal" data-target="#ModalJoinClass" href="" class="dropdown-item" href="#">Tham gia lớp học</a>
                     
                    <a onclick= "document.getElementById('id01').style.display='block'"
                    style="width:100%;" class="dropdown-item" href="#">Tạo lớp học</a>
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
               <a class="dropdown-item" href="#">Đăng xuất</a>
             </div>
            </li>
         </ul>
      </nav>

</body>
</html>
