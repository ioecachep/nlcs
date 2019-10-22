function hienthiKichThuoc(value) {
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET", "select.php?value=" + value, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("kichthuoc").innerHTML=xmlhttp.responseText;
            }
    }
}
function danhsachSP(){  
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET", "danhsachsanpham.php", true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("danhsachsp").innerHTML=xmlhttp.responseText;
            }
    }
}
function timkiemSP(value) {
    if (value.length==0) { 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET", "danhsachsanpham.php", true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("danhsachsp").innerHTML=xmlhttp.responseText;
            }
    }
      } else {
      xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("danhsachsp").innerHTML=this.responseText;
          }
        }
        xmlhttp.open("GET","searchSP.php?value="+value,true);
        xmlhttp.send();
    }
}
function suaSP(value){
    alert(value);
    /*window.open('suasp.php?masp='+value, 'Sửa Sản Phẩm', 'width=500,height=600');*/
}