var ok = true;
function kt(str){
	var xmlhttp;
	if ( window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function(){
	if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		document.getElementById("p1").innerHTML = xmlhttp.responseText;
		document.getElementById("p1").style.color="red";
		if (xmlhttp.responseText === "ok"){
			ok = true;
		}
		else {
		ok = false;
		}
		}
	}
	xmlhttp.open("GET","checkuser.php?q="+str,true);
	xmlhttp.send();
}				
function ktdangki()
	{
		var name = document.getElementById("name").value;
		var pass = document.getElementById("pass").value;
		var repass = document.getElementById("repass").value;
		// Kiểm tra tên đăng nhập
		if ( name == "")
			{
				//alert( "Bạn chưa nhập tên đăng nhập" );
				document.getElementById("p1").style.color = "red";
				document.getElementById("p1").innerHTML ="Username không được để trông!!!";
				ok = false;
			}
		//Kiểm tra password
		if ( pass == "")
			{
				//alert( "Vui lòng nhập pass" );
				document.getElementById("p2").innerHTML ="password không được để trống!!!";
				document.getElementById("p2").style.color = "red";
				ok= false;
		if (pass === repass){
			document.getElementById("repass").style.color  = "green";
			document.getElementById("p3").innerHTML = "";
			//ok=true;
		} 
		else {
			document.getElementById("p3").innerHTML="Nhập lại pass và repass không giống";
			document.getElementById("p3").style.color= "red";
			ok = false;
		}
		if (ok == false) {
			alert ("Đăng kí thất bại!!!");
			return false;
		}
		else {
			alert("đăng kí thành công!!!");
			return true;
		}
    }