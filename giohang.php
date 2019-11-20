<style>
    #giohang {
        text-align: left;
    }
    #giohang table,#giohang  th,#giohang td{
        border-top:1px solid #ccc;
        border-bottom:1px solid #ccc;
    }
    #giohang table{
        border-collapse:collapse;
    }
    #giohang  td,#giohang  th {
        padding: 6px;
    }

#giohang body {font-family: Arial, Helvetica, sans-serif;}
#giohang * {box-sizing: border-box;} 
.open-button {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  /* top: 23px;
  right: 28px; */
  width: 300px;
}

/* The popup form - hidden by default */
.form-popup {
  display: block;
  position: fixed;
  /* top: 23px;
  right: 28px; */
  /* border: 3px solid #f1f1f1;  */
  z-index: 9;
}
.form-container {
  width: 300px;
  /* padding: 10px; */
  background-color: white;
}
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: red;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
#del {
    height: 10px;
    width: 10px;
}
#cart{
  height: 30px;
  width: 30px;
}
</style>
<html>
<body>
<div id="giohang">
<button id="tat" class="open-button" onclick="openForm()"><img id='cart' src="./img/cart_product.png"></button>
<div class="form-popup" id="myForm">
<form action="" class="form-container">
<button type="button" class="btn cancel" onclick="closeForm()"><img id='cart' src="./img/cart_product.png"></button>
<table>
<?php
include 'connect.php';
$sql = "SELECT a.mahang, a.tenhang, a.giaban, b.soluongmua FROM hanghoa a, giohang b WHERE a.mahang=b.mahang;";
$result = $con->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "
        <tr>
            <!--<td>".$row['mahang']."</td>-->
            <td>".$row['tenhang']."</td>
            <td>".$row['giaban']."</td>
            <td>".$row['soluongmua']."</td>
            <td><a href='/action/action-delete-product.php?mahang=".$row['mahang']."'><img id='del' src='./img/delete_product.png' alt='x'></a></td>
        </tr>
        ";
    }
}
?>
</td>
</tr>
</table>
<a href="#"><button onclick="loadThanhToan()" type="button" class="btn cancel">Thanh toán</button></a>
</form>
</div> <!-- class Popup -->
</div>
<script language="javascript" src="./ajax/quanlybanhang.js">
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("tat").style.display = "none";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  document.getElementById("tat").style.display = "block";
}
</script>
</body>
</html>