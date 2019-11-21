<?php
session_start();
$user=$_SESSION['username'];
if (!isset($_SESSION['username'])){
    header('Location: /login/dangnhap.php');
}
?>