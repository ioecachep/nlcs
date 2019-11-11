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
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  /* top: 23px;
  right: 28px; */
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: block;
  position: fixed;
  /* top: 23px;
  right: 28px; */
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
#del {
    height: 10px;
    width: 10px;
}
</style>
<html>
<body>
<div id="giohang">
<button class="open-button" onclick="openForm()">Giỏ hàng</button>
<div class="form-popup" id="myForm">
<form action="" class="form-container">
<button type="button" class="btn cancel" onclick="closeForm()">Giỏ hàng</button>
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
<button type="button" class="btn cancel" onclick="closeForm()">Thanh toán</button>
</form>
</div> <!-- class Popup -->
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</body>
</html>