<!--Check if the session is written or not-->
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
    <link rel="stylesheet" href="./css/style_request2.css">
    <!--<link rel="stylesheet" href="./css/TrangThamGiaLopHoc.css">-->
    <!--Merging from front end update 1-->
    <link rel="stylesheet" href="./css/dropdownAccount.css">
    <link rel="stylesheet" href="./css/post.css">
    

    <title>Tôn Đức Thắng University</title>
    
</head>

<style>
    @media screen and (min-width:768px){
    .col-3item{
        -ms-flex:0 0 33.3%;
        flex:0 0 33.3%;
        max-width:33.3%;
    }
    }

    @media screen and (min-width:992px){
    .col-4item{
        -ms-flex:0 0 25%;
        flex:0 0 25%;
        max-width:25%;
    }
    }

    @media screen and (min-width:1200px){
    .col-xl-5item{
        -ms-flex:0 0 20%;
        flex:0 0 20%;
        max-width:20%;
    }
    }
</style>

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


</div>
 
 <!-- Trang chính-->
    <?php
        require("connect.php");

        // get user_id
        $user_id = $_GET['userid'];
    ?>

        <nav class="navbar navbar-expand-sm navbar-dark bg-info">

         <a class="navbar-brand" href="#">
            <img src="./image/TDT_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Tôn Đức Thắng University
         </a>

         <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
               <a class="nav-link Join"href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" title="Tạo hoặc tham gia vào lớp học"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg></a>
                  <div class="dropdown-menu dropdown-menu-right" >
                    <!--Hide Tham gia Lop hoc away cause teacherdoes not need that one-->
                    <!--<a id="modalActivate"  data-toggle="modal" data-target="#ModalJoinClass" href="" class="dropdown-item" href="#">Tham gia lớp học</a>-->
                     
                    <a 
                    style="width:100%;" class="dropdown-item" href="TaoLopHoc.php?userid=<?php echo $user_id?>">Tạo lớp học</a>
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

               <!--Updated account dropdown list-->
               <div class="dropdown-menu dropdown-menu-right dropdown-menu1" >
                    <svg width="30px" height="50px" viewBox="0 0 16 16" class="bi bi-person-circle iconAccount" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg>
                    <p class="textAccount"><b>Kính chào quý thầy/cô</b></p>
                    <p class="textAccount">
                        <?php
                            /**
                             * Get full name then display it in that account box
                             */
                            // get fullname from id
                            $sql = " SELECT `fullname` from `users` where `user_id` = '$user_id';";
                            $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                            $row = mysqli_fetch_array($result);

                            echo "<p class=\"textAccount text-success\"><b>$row[0]</b></p>";
                        ?>
                    </p>
                    <hr>
                    <a class="dropdown-item textAccount textLogout " href="logout.php">Đăng xuất khỏi tài khoản</a>
                </div>
            </li>
         </ul>
      </nav>

    <!--View Class card source code-->
    <div class="container-fluid">
        <div class="content">
        <div class="row">
            <?php
                // get class_id from class_list to view them according to user
                $get_classid = "SELECT `class_id` FROM `class_list` WHERE `class_list`.`user_id` = $user_id;";
                $result = $connection->query($get_classid);
                while ($row = $result->fetch_assoc())
            {
            ?>
            <div class= "col-xl-5item col-4item col-3item col-sm-6 cel">
                    <div class="ccard cardColor_shadow">
                    <div class="card-header border-secondary">
                        <h4 class="card-title">
                            
                        <!--Passing username to get id from it in the next page-->
                        <a href="Trangmonhoc.php?id=<?php echo $row['class_id'];?>&&userid=<?php $user_id = $_GET['userid']; echo $user_id;?>">
                            <h5 class="card-title text-info">
                                <?php 
                                    // get all data from table classes
                                    $sql = "SELECT * from `classes` where `id` = $row[class_id];";
                                    $result1 = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                    $row1 = mysqli_fetch_array($result1);
                                    if (strlen($row1["class_name"]) >= 20) {
                                        echo mb_substr($row1["class_name"], 0, 15,'UTF-8'). " ... ";
                                    }
                                    else {
                                        echo $row1["class_name"];
                                    }                                
                                ?>
                            </h5>
                        </a>                               
                        </h4>
                    </div>                 
                    <div class="card-body">
                        <h5 class="card-title p1" style="font-size:15px">Chủ đề: <?php echo $row1["class_title"]?></h5>
                        <p class="card-text text-dark " style="font-size:15px">
                            <b> <?php echo $row1["lecturer"]; ?></b>
                        </p>
                    </div>
                    
                    <div class= "card-footer border-secondary">
                    <a class="btn btn-secondary"  role="button" href="EditLopHoc.php?id=<?php echo $row1['id']?> && class_name=<?php echo $row1['class_name']?> && class_title=<?php echo $row1['class_title']?> && lecturer=<?php echo $row1['lecturer']?>" >Sửa</a> |
                    <!--Adding username and userid to pass it to delete_function-->
                    <?php
                        // Re-assign username and userid
                        $username = $_GET['username'];
                    ?>
                    <a class="btn btn-danger" role="button" href="delete_function.php?id=<?php echo $row1["id"]?>&&username=<?php echo $username?>&&userid=<?php echo $user_id?>" class="delete">Xóa</a>                       
                    
                    
                    </div>
                    </div>
            </div>
            <?php
            }
            ?>              
        </div>
        </div>
    </div>
</body>
</html>

<?php
    }
    else{
        header("Location: ../sign_up_in/Login.php");
    }
?>
