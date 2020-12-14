<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style_request2.css">
    <link rel="stylesheet" href="style.css">
 
    
    <title>Tạo lớp học</title>
</head>
<body>
    <div class="">
        <form action="processTrangNguoiDung.php" method ="POST" enctype="multipart/form-data">
            <div class="container">
                <?php
                $id = "";
                $class_name="";
                $class_title="";
                $class_code="";

                if (isset($_GET["id"])){
                    $id = $_GET["id"];
                    require "connect.php";
                    $sql = "SELECT * FROM classes WHERE id =$id";
                    $result= $connection->query($sql);
                    
                    $row= $result->fetch_assoc();
                    $class_name= $row["class_name"];
                    $class_title= $row["class_title"];
                    $class_code= $row["class_code"];
                }
                ?>  
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <h1>Tạo lớp học</h1>
                    <div class="mb-3">
                        <label for="class_name"><b>Tên lớp học</b></label>
                        <div class="input-group">
                            <input value= "<?php echo $class_name ?>" type="text" class="form-control" id="class_name" placeholder="Tên lớp học (bắt buộc)" name="class_name" required>  
                        </div>                
                    </div>
                
                
                    <div class="mb-3">
                        <label for="class_title"><b>Chủ đề</b></label>
                        <div class="input-group">
                            <input value= "<?php echo $class_title ?>" type="text" class="form-control" id="class_title" placeholder="Chủ đề" name="class_title" required>
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="class_code"><b>Phòng</b></label>
                        <div class="input-group">
                        <input value= "<?php echo $class_code ?>" type="text" class="form-control" id="class_code" placeholder="Phòng" name="class_code" required>
                        </div>
                    </div>

                  
             

                    <button class="btn btn-success btn-lg btn-block" type="submit">Tạo</button>                 
             
            </div>
        </form>

    </div> 


    
</body>
</html>