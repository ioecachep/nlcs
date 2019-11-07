// Hiển thị danh sách hàng hóa
function loadDanhSachHangHoa() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "danhsachhanghoa.php", true);
    xhttp.send();
}
// Hiển thị loại hàng hóa
function loadLoaiHangHoa(loai) {
  console.log(loai);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "loaihanghoa.php?loai="+loai, true);
  xhttp.send();
}
// Hiển thị thêm sản phẩm
function loadThemSanPham() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "themhanghoa.php", true);
  xhttp.send();
}
function loadLoaiHangHoa(loai) {
  console.log(loai);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "loaihanghoa.php?loai="+loai, true);
  xhttp.send();
}
// Hiển thị thêm sản phẩm
function loadCapnhatsanpham() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "capnhatsanpham.php", true);
  xhttp.send();
}
// Load sửa trong cập nhật sản phẩm
function loadSuasanpham(mahang) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("reload").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "suasanpham.php?masp=" + mahang, true);
  xhttp.send();
}