<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["role"]);
    header("Location: ../sign_up_in/Login.php");
?>