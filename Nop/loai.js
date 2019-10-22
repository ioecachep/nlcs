function danhsachLoai(){  
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET", "danhsachloai.php", true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("danhsachloai").innerHTML=xmlhttp.responseText;
            }
    }
}
function timkiemLoai(value) {
    if (value.length==0) { 
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET", "danhsachloai.php", true);
        xmlhttp.send();
        xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("danhsachloai").innerHTML=xmlhttp.responseText;
            }
    }
      } else {
      xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("danhsachloai").innerHTML=this.responseText;
          }
        }
        xmlhttp.open("GET","searchLoai.php?value="+value,true);
        xmlhttp.send();
    }
}