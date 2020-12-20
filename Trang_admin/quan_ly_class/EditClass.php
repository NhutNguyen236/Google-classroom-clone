<?php
    //Connect to Db
    require("../connect.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--custom css-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_request2.css">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    <title>Update Class</title>
  </head>
  <body>

    <!--Form for admin to insert into sql table-->
    <div class = "item_form1">
        <form method="post" action = "EditClass_function.php?id=<?php echo $_GET['id']?>&&class_name=<?php echo $_GET['class_name']?>">
            <div class="container item_form1">
                <h2>
                    Update for 
                    <?php
                        $class_name =  $_GET['class_name'];
                        echo "<p class = \"text-success d-inline\">$class_name</p>";
                    ?>
                </h2> 
                <div>
                    <label for="userid"><b>Class ID</b></label>
                    <input type="text" name="userid" value = "<?php echo $_GET['id']?>" required>
                </div>

                <div>
                    <label for="email"><b>Class Name</b></label>
                    <input type="text" name="email" value = "<?php echo $_GET['class_name']?>" required>
                </div>                
                
                <div>
                    <label for="username"><b>Class Title</b></label>
                    <input type="text" name="username" value = "<?php echo $_GET['class_title']?>" required>
                </div>
                
                <div>
                    <label for="psw1"><b>Lecturer Name</b></label>
                    <input type="text" name="psw1" value = "<?php echo $_GET['lecturer']?>" required>
                </div>
                
                <!--Khi nhấn nút cancel thì đóng form đăng ký lại-->
            <div class="clearfix">
                
                <button type="submit" class= "btnOnClick btn btn-primary btn-lg btn-block">Update</button>
                
            </div>
                
    
            </div>
        </form>
    </div>
    
  </body>
</html>