function check(){
	t = document.getElementById("timsp").value;
	var xmlhttp;
	if ( window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("danhsachsp").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","searchKM.php?q="+t,true);
	xmlhttp.send();
}