<?php
 session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
date_default_timezone_set("Asia/Bangkok");
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$tenkh=$_GET['tenkh'];
$sql="SELECT tenkh FROM khachhang WHERE idkh='$tenkh'";
$result = $con->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $tenkh = $row['tenkh'];}
    }
$ngay=date('Y-m-d');
$sql="INSERT INTO datmon (tendat,ngay) VALUE ('$tenkh','$ngay')";
$result = $con->query($sql);
$sql="SELECT MAX(iddm) as iddm FROM datmon";
$result = $con->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo $row['iddm']." ".$ngay;}
    }
$con->close();
?>