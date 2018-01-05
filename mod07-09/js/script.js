// $('p').hide(); /*targetting a tag name*/


// $('.para-to-hide').hide(); /*targetting a tag with a class*/

// $('#paraToHideWithId').hide(); 


// $('p').click(function() {
// 	$(this).hide();
// });

// or....

// function hideThisElement() {
// 	$(this).hide();

// }

// $('p').click(hideThisElement);

$("#paraToHideWithId").hover(function() {
	$(this).html("I am a changed paragraph.");
});

$("p").click(function () { 
	$(this).attr("align", "right");
	$(this).css("color", "red"); /*changing of style*/
} );
