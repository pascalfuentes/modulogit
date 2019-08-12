function verify() {
	var n1 = document.getElementById("n1").innerHTML;
	var n2 = document.getElementById("n2").value;

	if(n1 == n2) {
		alert("CONGRATULATIONS!!! YOU TYPE THE RIGHT NUMBER!!!")
	} else {
		if (n1<n2) {
			alert("You type a number above the right number")
		} else{
			alert("You type a number below the right number")
		}
		
	}
}

function reset() {
	document.getElementById("n2").value = "";

	var r = Math.floor(Math.random()*100);
	document.getElementById("n1").innerHTML = r;
}

