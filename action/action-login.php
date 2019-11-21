<?php
    session_start();
    date_default_timezone_set("Asia/Bangkok");
    $username = $_POST['user'];
    $ngay = date('Y-m-d H:i:s');
    $noidung = "Đăng Nhập";
    $password = md5($_POST['password']);
    include './../connect.php';
    $sql = "SELECT * FROM taikhoan WHERE (tentk = '$username' AND matkhau = '$password')";
    $result =$con->query($sql);
    if($result->num_rows == 0) {
        echo $sql;
        echo "Đăng nhập thất bại!";
        header ('Location: /login/dangnhap.php');
    } else {
        echo "Đăng nhập thành công!" ;
        while ($row = $result->fetch_assoc()){
            $_SESSION['username']=$username;
            $_SESSION['manv'] = $row['manv'];
            $manv=$row['manv'];
            $sqlLog = 'INSERT INTO nhatki (ngaynhatki,manv,noidung,lenhsql) VALUES ("'.$ngay.'","'.$manv.'","'.$noidung.'","'.$sql.'")';
            echo $sqlLog;
            $result1 =$con->query($sqlLog);
        }
        header ('Location: /index.php');
    }
?>