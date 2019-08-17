function addBall() {
	var ball = document.createElement("div");
	ball.setAttribute("class", "ball");
	var p1 = Math.floor(Math.random() * 500);
	var p2 = Math.floor(Math.random() * 400);
	var color = Math.floor(Math.random() * 999999);
	var size = Math.floor(Math.random() * 100);
	ball.setAttribute("style", "left:"+p1+"px;top:"+p2+"px;background-color:#"+color+"; height: "+size+"px; width: "+size+"px;");
	ball.setAttribute("onmouseover", "popping(this)");
	document.body.appendChild(ball);
}


function popping(element) {
	document.body.removeChild(element);
}


function open() {
	setInterval(addBall, 1000)

}





/*function pressmouse() {
	console.log("press the mouse!");
}

function releasemouse() {
	console.log("release the mouse!");
}

function overmouse() {
	console.log("mouse pass over the button");
}

function pressthekey(event) {
	console.log("press some key!"+event.keyCode);
}

function changeoption(object) {
	console.log("select: "+object.value);
}

function myFunction() {
	console.log("focus at the input tag");
}

function myFunction2() {
	console.log("unfocus")
}*/
