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
function tangsoluong(a){
    a+=1;
}
function giamsoluong(a){
    a-=1;
}