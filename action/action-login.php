<?php
    $username = $_POST['user'];
    echo $username;
    $password = md5($_POST['password']);
    include './../connect.php';
    $sql = "SELECT * FROM taikhoan WHERE (tentk = '$username' AND matkhau = '$password')";
    $result =$con->query($sql);
    if($result->num_rows == 0) {
        echo $sql;
        echo "Đăng nhập thất bại!";
        // header ('Location: /login/dangnhap.php');
    } else {
        echo "Đăng nhập thành công!" ;
        $_SESSION['username']=$username;
        header ('Location: /quanlybanhang.php');
    }
?>