function changeMeToNumber() {
	var x = 101;
	document.getElementId("firstVar").innerHTML = x;
}

function getNewname() {
	var name = "Jean Ashley Talal";
	document.getElementId("secondVar").innerHTML = name;
}

function {
	var message = "welcome to JavaScript Programming!"
}

/*Expressions*/

var var1 = 10;
var var2 = 3;
var result = 0;

// document.getElementById("var1").innerHTML = var1;
document.getElementById("var1").value = var1;

// document.getElementById("var2").innerHTML = var2;
document.getElementById("var2").value = var2;

document.getElementById("result").innerHTML = result;



function addThem() {
	var var1 = parseInt(document.getElementById("var1").value);
	var var2 = parseInt(document.getElementById("var2").value);
	var result = var1 + var2;
	document.getElementById("result").innerHTML = result;
}

function subtractThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result = var1 - var2;
	document.getElementById("result").innerHTML = result;
}

function multiplyThem() {
	var result = var1 * var2;
	document.getElementById("result").innerHTML = result;
}

function divideThem() {
	var result = var1 / var2;
	document.getElementById("result").innerHTML = result;
}

function modulateThem() {
	var result = var1 % var2;
	document.getElementById("result").innerHTML = result;
}