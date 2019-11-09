// Hiển thị danh sách khách hàng
function loadDanhSachKhachHang() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "danhsachkhachhang.php", true);
    xhttp.send();
}
// Hiển thị phân loại khách hàng
function loadPLKH(loaikh) {
  console.log(loaikh);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "loaikh.php?loaikh="+loaikh, true);
  xhttp.send();
}
// Hiển thị thêm khách hàng
function loadThemKH() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "themkhachhang.php", true);
    xhttp.send();
  }
// Load sửa trong cập nhật sản phẩm
function loadSuaKH(makh) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("reload").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "suakhachhang.php?makh=" + makh, true);
    xhttp.send();
  }