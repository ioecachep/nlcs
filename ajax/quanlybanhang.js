// Hiển thị danh sách bán hàng
function loadDanhSachSanPham() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "danhsachmuahang.php", true);
    xhttp.send();
}
// Hiển thị theo loại hàng hóa
function loadTheoLoaiHang(loai) {
  console.log(loai);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "hienthitheoloai.php?loai="+loai, true);
  xhttp.send();
}
function tangsoluong(a){
  a.value=new Number(a.value)+1;
  console.log(a.value);
}
function giamsoluong(a){
  if (a.value > 1){
    a.value=a.value-1;
  console.log(a.value);
  }
}
// Load trang thanh toán
function loadThanhToan() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "thanhtoan.php", true);
  xhttp.send();
}