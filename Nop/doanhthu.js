function danhsachDoanhThu(){  
    ngay = document.getElementById("ngay").value;
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET", "danhsachdoanhthu.php?ngay="+ngay, true);
    xmlhttp.send();
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById("dsdh").innerHTML=xmlhttp.responseText;
            }
    }
}