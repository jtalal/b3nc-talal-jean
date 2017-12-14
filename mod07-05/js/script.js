// function changeBackgroundColor() {
// 	var newColor = document.getElementById("newBackgroundColor").value;
// 	var color = "";
// 	var fontColor = "white";
// 	console.log(newColor);


function generateTable() {
	/*maximum # to be generated*/
	var num = parseInt(document.inputForm.num.value);
	// console.log(num);
	/*increment*/
	var step = parseInt(document.inputForm.step.value);
	// console.log(step);

	/*expected # of rows to be generated*/
	var row = num / step;

	/*placeholders*/
	var element = "";
	var boxClass = "";
	var classBox = "";


	/*calculation of cell height rel to the # of rows*/
	var boxHeight = row / 4; /*responsive height rel to rows*/
	boxHeight = Math.round(boxHeight); /*removes decimal place*/
	boxHeight = 100 / boxHeight;

	var z = step; /*counter to*/
	for (var x = 0; x <= (row / 4); x++) {
		for(var y = 0; y < 4; y++) {
			if (z <= num) {
				if (((x % 2 == 0) && (y % 2 == 0) || (x % 2 == 1) && (y % 2 == 1))) { /*y % 2 == 0 is divisible by 2 meaning non*/
					boxClass = "black";
				}

				if (((x % 2 == 0) && (y % 2 == 1)) || ((x % 2 == 1) && (y % 2 == 0))) {
					boxClass = "white";
				}

				element += "<div class='box " + boxClass + "'><h2>"+ z +"</h2></div>"; 

				z = z + step;
			}
		}
	}


	document.getElementById("mainWrapper").innerHTML = element;
	classBox = document.getElementsByClassName("box"); /*array of elements*/

	for (var i = 0; i < classBox.length; i++) {
		classBox[i].style.height = boxHeight + "vh";
		classBox[i].style.lineHeight = boxHeight + "vh";
	}

}