<?php
include('configlogin.php');
session_start(); 
if (!isset($_SESSION['username'])) 
{
 echo "<script>alert('Anda belum Log In. Silahkan Log In');window.location='loginnew.php';</script>";
 exit; 
}
if(!isset($_COOKIE['username'])) 
{ 
    session_destroy();
    echo "<script>alert('Anda sudah 5 menit lebih tidak aktif pada web ini. Silahkan Login Lagi');window.location='loginnew.php';</script>"; 
}else{
    $username = $_COOKIE['username'];
    setcookie('username', $username, time() + 300);
}

?> 