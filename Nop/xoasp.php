<?php
 session_start();
$user=$_SESSION['user'];
if (!isset($_SESSION['user'])){
    header('Location: Trangdangnhap.html');
}
?>
<?php
$ctdh = $_GET['ctdh'];
$con = new mysqli("localhost","root","","thecoffee");
$con->set_charset("utf8");
$sql = "DELETE FROM chitietdathang WHERE ctdh='$ctdh'";
$result = $con->query($sql);
?>