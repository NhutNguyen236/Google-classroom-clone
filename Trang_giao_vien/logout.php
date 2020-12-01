<?php
    session_start();
    unset($_SESSION["email"]);
    header("Location: ../sign_up_in/Login.php");
?>