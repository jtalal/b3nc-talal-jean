function changeBackgroundColor() {
	var newColor = document.getElementById("newBackgroundColor").value;
	var color = "";
	var fontColor = "white";
	console.log(newColor);

	document.getElementById("header1").style.color = "white";


	switch (newColor) { /*if "switch" is used, use case instead of "if"*/
		case "red":
			color = "red";
			break;
		case "blue":
			color = "blue";
			break;
		case "orange":
			color = "orange";
			break;
		case "green":
			color = "green";
			break;
		case "yellow":
			color = "yellow";
			fontColor = "black";
			break;
		case "indigo":
			color = "indigo";
			break;
		case "violet":
			color = "violet";
			break;
	}

	document.getElementById("mainWrapper").style.backgroundColor = color;
	document.getElementById("theMessage").innerHTML = "Your new background color is "+color+"!!!";
	document.getElementById("theMessage").style.color = fontColor;


}