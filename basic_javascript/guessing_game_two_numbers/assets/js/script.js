function verify() {

	var n1 = document.getElementById("n1").innerHTML;
	var n2 = document.getElementById("n2").innerHTML;
	var n3 = document.getElementById("n3").value;
	var n4 = document.getElementById("n4").value;

	if (n1 == n3 && n2 == n4) {
		alert("CONGRATULATIONS!!! YOU TYPE THE BOTH NUMBERS CORRECT!!!")
	} else {
		if (n1 == n3 && n2 > n4) {
			alert("CONGRATULATIONS!!! YOU TYPE THE LEFT NUMBER CORRECT!!! but the right number is too low, so you are WRONG!!!")
		} else {
			if (n1 == n3 && n2 < n4) {
				alert("CONGRATULATIONS!!! YOU TYPE THE LEFT NUMBER CORRECT!!! but the right number is too high, so you are WRONG!!!")
			} else {
				if (n1 > n3 && n2 == n4) {
					alert("CONGRATULATIONS!!! YOU TYPE THE RIGHT NUMBER CORRECT!!! but the left number is too low, so you are WRONG!!!")
				} else {
					if (n1 < n3 && n2 == n4) {
						alert("CONGRATULATIONS!!! YOU TYPE THE RIGHT NUMBER CORRECT!!! but the left number is too high, so you are WRONG!!!")
					} else {
						if (n1 < n3 && n2 < n4) {
							alert("SORRY, none of the numbers are correct. The left one is too high, the right one is too high")
						} else {
							if (n1 < n3 && n2 > n4) {
								alert("SORRY, none of the numbers are correct. The left one is too high, the right one is too low")
							} else {
								if (n1 > n3 && n2 < n4) {
									alert("SORRY, none of the numbers are correct. The left one is too low, the right one is too high")
								} else {
									alert("SORRY, none of the numbers are correct. The left one is too low, the right one is too low")
								}
							}
						}
					}
				}
			}
		}
	}



}

function reset() {
	document.getElementById("n3").value = "";
	document.getElementById("n4").value = "";

	var r = Math.floor(Math.random()*10);
	var r2 = Math.floor(Math.random()*10);
	document.getElementById("n1").innerHTML = r;
	document.getElementById("n2").innerHTML = r2;
}

