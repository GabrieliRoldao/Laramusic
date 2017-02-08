var menu = function(){
	var x = document.getElementById('menu');

	if (x.className == "menu") {
		x.className += " responsivo";
	} else {
		x.className = "menu";
	}
}