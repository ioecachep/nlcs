function loadThongKeDonHang() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("ajax").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "thongke.php", true);
    xhttp.send();
}
function loadChitietThongKe(a){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("chitiet").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "chitietdonhang.php?madh="+ a, true);
    xhttp.send();
}
function loadThongKeDate(a){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("chitiet").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "thongkedate.php?ngay="+ a, true);
    xhttp.send();
}
function loadLog(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("ajax").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "log.php", true);
  xhttp.send();
}