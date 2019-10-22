var a = setInterval(hoadon, 1000);
function checkbh(){
	tsp = document.getElementById("tensp").value;
	kt = document.getElementById("kichthuoc").value;
	var xmlhttp;
	if ( window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("hienthi").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","searchbanhangsanpham.php?q="+tsp+"&kt="+kt,true);
	xmlhttp.send();
}
function tinhtien(){
	dg = document.getElementById("dongia").innerHTML;
	sl = document.getElementById("soluong").value;
	tt = dg*sl;
	document.getElementById("thanhtien").innerHTML = tt;
}
function chonkhachhang(value){
	if (value == "Guest"){
		document.getElementById("chonkhachhang").style.visibility = "hidden";
	} else {
		document.getElementById("chonkhachhang").style.visibility = "visible";
	}
}
// TẠO HÓA ĐƠN
function themhoadon(){
	tenkh=document.getElementById("tenkh").value;
	document.getElementById("tenkh").disabled = "true";
	document.getElementById("themhd").onclick = "";
	document.getElementById("themhd").disabled = "true";
	document.getElementById("thongtinhoadon").style.visibility ="inherit";
	if (tenkh == "khachvanglai"){
		tenkh="122261555";
	}
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("mahoadon").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","themhoadon.php?tenkh="+tenkh,true);
	xmlhttp.send();
}
function hoadon(){
	tsp = document.getElementById("tensp").value;
	kt = document.getElementById("size").value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("hoadon").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","hoadon.php?q="+tsp+"&kt="+kt,true);
	xmlhttp.send();
}
function themvaohoadon(){
	nhanvien=document.getElementById("nhanvien").innerHTML;
	masp=document.getElementById("masp").innerHTML;
	sl = document.getElementById("soluong").value;
	var xmlhttp1 = new XMLHttpRequest();
	xmlhttp1.onreadystatechange = function(){
	if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
		document.getElementById("hoadon").innerHTML = xmlhttp1.responseText;
		}
	}
	xmlhttp1.open("GET","muasp.php?nv="+nhanvien+"&masp="+masp+"&sl="+sl,true);
	xmlhttp1.send();
}
function xoa(){
	ctdh = document.getElementById("ctdh").innerHTML;
	var xmlhttp;
	if ( window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		}
	}
	xmlhttp.open("GET","xoasp.php?ctdh="+ctdh,true);
	xmlhttp.send();
}