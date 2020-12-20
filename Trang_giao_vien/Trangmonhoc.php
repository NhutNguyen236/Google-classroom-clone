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
    <script src="./js/post.js"></script> 
    <link rel="stylesheet" href="./css/TrangThamGiaLopHoc.css">
    <link rel="stylesheet" href="./css/Trangmonhoc.css">
    <link rel="stylesheet" href="./css/post.css">
    <title>Tôn Đức Thắng University</title>
</head>
  <body>
     <!--Thanh navbar-->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
           <div id="mySidebar" class="sidebar">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
              <a href="#">About</a>
              <a href="#">Services</a>
              <a href="#">Clients</a>
              <a href="#">Contact</a>
           </div>
           
           <a class="navbar-brand" href="TrangNguoiDung.php">
              <img src="./image/TDT_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
              Tôn Đức Thắng University
           </a>
              <div class="topnav">
                <a class="nav-item " href="#news">Bài tập trên lớp</a>
                <a href="#contact">Hoạt động</a>
              </div>
        
           <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                 <a class="nav-link avatar "
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

        
        <!--Form comment-->
      <div class="container">
            <div class = "row"> 
                        <div class="card mb-3">
                           <img class="card-img" src="./image/a3.jpg" alt="">
                           <div class="card-img-overlay">
                              <h2 class="card-title text-light"></h2>
                              <p class="card-text text-light">
                               
                              </p>
                              <?php
                                 // TRang người dùng chưa pas ID vi nó ko hiểu cái $_GET['id']; lấy từ đâu?
                                 $class_id = $_GET['id'];
                                 require('connect.php');

                                 $sql = "SELECT `id`, `class_name` from classes where `id` = '$class_id'";
      
                                 $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
                                 $row = mysqli_fetch_array($result);

                                 echo "<p class=\"card-text text-light\">$row[1]</p>";
                                 echo "<p class=\"card-text text-light\">Mã lớp học: $row[0]</p>";
                              ?>
                           </div>
                        </div>
            </div>
            <form class="" action="processTrangMonHoc.php?class_id=<?php echo $_GET['id']?>&&username=<?php echo $_GET['username']?>" method="POST" enctype="multipart/form-data">
                  <?php
                  $id="";
                  $post_content="";

                  if (isset($_GET["id"])){
                     $id = $_GET["id"];
                     require "connect.php";
                     $sql = "SELECT * FROM `posts` WHERE id = '$id';";
                     $result = $connection->query($sql) or die($connection->error);

                     //$row= $result->fetch_assoc();
                     $row= $result->fetch_assoc();
                     $post_content = $row["post_content"];
                  }
                  ?>      
                     <div class="shadow-lg p-3 mb-5 bg-white rounded">
                           <div class="form-group shadow-textarea">
                              <label for="exampleFormControlTextarea1"></label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" 
                              value="<?php echo $post_content ?>" name="post_content" id="post_content" placeholder="Thông báo nội dung nào đó cho lớp học của bạn" ></textarea> 
                              <input class="form-control-sm"  type="file"/> 
                              <button type="submit" class="btn_Post"> Đăng bài</button>
                           </div>
                     </div> 

            </form>    
                     <?php
                        require "connect.php";
                        $sql = "SELECT * FROM `posts` WHERE `class_id` = $id";
                        $result = $connection->query($sql);
                        /*while ($row = $result->fetch_assoc())
                        {*/
                           
                        // Add a if there is no posts related to the class so bring out there is nothing else While
                        while($row = $result->fetch_assoc())
                        {
                     ?>     
                        <div class="shadow-lg p-3 mb-5 bg-light rounded p1">
                              <div class="form-group shadow-textarea">
                                
                                 <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                 </svg>
                                 <?php
                                    /** Generally focusing on that getting fullname and passing stuffs*/
                                    // Get username related to the post
                                    
                                    $username = $_GET["username"];
                                    // get fullname from username to display on post
                                    $get_fullname = "SELECT `fullname`, `user_id` from `users` where `username` = '$username';";
                                    $get_fullname_result = mysqli_query($connection, $get_fullname) or die(mysqli_error($connection));
                                    $get_fullname_fetch = mysqli_fetch_array($get_fullname_result);

                                    // Assign fullname here
                                    $fullname = $get_fullname_fetch[0];
                                    echo "<p class = \"d-inline\">$fullname</p>";
                                 ?>
                                 <p class="p1">
                                    <?php echo $row["post_content"] ?>
                                    <a class="btn btn-warning" role="button" href="delete_posts.php?id=<?php echo $row["id"];?> && class_id=<?php echo $_GET['id']?>&&username=<?php echo $_GET['username'];?>" class="delete">Xóa bài</a>
                                 </p>
                                <hr>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                 </svg>

                                 <div class="textarea-container">
                                    <textarea class="auto_height"  oninput="auto_height(this)" row ="2" placeholder="Thêm nhận xét của lớp học..."></textarea>
                                    <button type="submit" class="btn btn-primary">Gửi</button>
                                 </div>
                                 
                              </div>

                              
                        </div>    
                     <?php
                     }
                     ?>     
      </div>
</body>
</html>
