<?php
 session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php 
    $con = new mysqli("localhost","root","","thecoffee");
    $con->set_charset("utf8");
    $nv=$_GET['nv'];
    $masp=$_GET['masp'];
    $soluong=$_GET['sl'];
    $km=1;
    $sql="SELECT MAX(iddm) as iddm FROM datmon";
    $result = $con->query($sql);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
            $iddm = $row['iddm'];}
        }
    $sql="INSERT INTO chitietdathang (iddm,idsp,soluong,user,idkm) VALUE ('$iddm','$masp','$soluong','$nv','$km')";
    $result = $con->query($sql);
    $con->close();
?>