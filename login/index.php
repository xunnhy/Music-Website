<?php
    session_start();
    if(isset($_SESSION['user']))
        echo "Tài khoản đang đăng nhập: ".$_SESSION['user'];
    else
        header("Location: login.php");
?>