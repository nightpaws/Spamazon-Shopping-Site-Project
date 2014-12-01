function setTheme(){
	var x = document.cookie;
	var ss = document.createElement("link");
	ss.type = "text/css";
	ss.rel = "stylesheet";
	if (x=="theme=css/dark.css") {
		ss.href = "css/dark.css";
	} else {
		ss.href = "css/light.css";
	}
	document.getElementsByTagName("head")[0].appendChild(ss);
}

function switchTheme(){
	var x = document.cookie;
	if (x=="theme=css/dark.css") {
		setLight();
	}
	else{
		setDark();
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