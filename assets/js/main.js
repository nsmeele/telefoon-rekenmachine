$(document).ready(function() {

	// function changePrice() {
		$( "form input" ).keyup(function() {
		    var value = $( this ).val();
		    $( "input#totaalprijs" ).val( value*50 );
		}).keyup();
	// }




})