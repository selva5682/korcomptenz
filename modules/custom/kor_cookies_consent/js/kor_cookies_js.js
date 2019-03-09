var pathname = window.location.href;
//alert(pathname);
var request = new XMLHttpRequest();
	request.open("POST", ""+pathname+"/?ip_exit=1", true);
	request.responseType = "document";
	request.send();
	request.onreadystatechange = function() {
		if (request.readyState == 4) {
		var doc = request.response;
		var elem = doc.getElementById("ip_checking");
		var get_value = [elem.innerHTML];
		//alert(get_value);
		if(get_value == '0') {
			document.getElementById('cookies_content_overlay').style.display = 'block';
			document.getElementById('block-ipcookiesconsentblock').style.display = 'block';
		} 	
	}
}
