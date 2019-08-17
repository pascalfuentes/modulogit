function validate() {

	var valor = document.getElementById("numero").value;

	if(valor.length > 2) {
		alert("You type a number with more than two digits")
		return false;
	} else {
		document.getElementById("warning").innerHTML = "SEND WITH SUCESS!"
		return false;
	}
}