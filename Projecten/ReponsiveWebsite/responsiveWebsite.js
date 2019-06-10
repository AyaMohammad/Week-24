var head = document.getElementById("down_head");
var nav = document.getElementById("down_nav");

function ClickHead() {
	document.getElementsByClassName('nav')[0].style.padding = "0em 0em 7em 0em";
	if (head.classList.contains("none")){
		head.classList.replace("none", "block");	
	}
	else {
		head.classList.replace("block", "none");
		document.getElementsByClassName('nav')[0].style.padding = "0em 0em 0em 0em";
	}
}
function ClickNav() {
	if (nav.classList.contains("none")){
		nav.classList.replace("none", "block");
	}
	else {
		nav.classList.replace("block", "none");
	}
}