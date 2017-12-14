function IdentifyThis() {
	var num = parseInt(document.getElementById("numberInput").value);
	console.log(num);
	if (num % 2 == 0) {
		document.getElementById("theMessage").innerHTML = "This is an even number!";
		document.getElementById("mainWrapper").style.backgroundColor = "gray";
	} else {
		document.getElementById("theMessage").innerHTML = "This is an odd number!";
		document.getElementById("mainWrapper").style.backgroundColor = "salmon";
	}

	if (num == 0) {
		document.getElementById("theMessage").innerHTML = "This is a Zero, Dumb-ass"
	}


	document.getElementById("header1").style.color = "white";

}