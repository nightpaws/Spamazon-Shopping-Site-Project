function setTheme(){
	var x = document.cookie;
	if (x=="theme=css/dark.css") {
		var ss = document.createElement("link");
		ss.type = "text/css";
		ss.rel = "stylesheet";
		ss.href = "css/dark.css";
		document.getElementsByTagName("head")[0].appendChild(ss);
	} else {
		var ss = document.createElement("link");
		ss.type = "text/css";
		ss.rel = "stylesheet";
		ss.href = "css/light.css";
		document.getElementsByTagName("head")[0].appendChild(ss);
	}
}

function setDark() {
	document.cookie="theme=css/dark.css";
	location.reload();
}

function setLight(){
	document.cookie="theme=css/light.css";
	location.reload();
}

setTheme();