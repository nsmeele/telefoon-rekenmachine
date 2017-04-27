$(document).ready(function() {

	// function changePrice() {
		$( "form input" ).keyup(function() {
		    // var value = $( this ).val();

		    var abonnementsduur = $('input#abonnementsduur').val();
		    var abonnement_p_m = $('input#abonnement_p_m').val();
		    var toestelprijs = $('input#toestelprijs').val();
		    var eenmalige_kosten = $('input#eenmalige_kosten').val();
		    var extra_p_m = $('input#extra_p_m').val();
		    var totaalprijs = $('input#totaalprijs').val();
		    var gem_p_m = $('input#gem_p_m').val();
		    var abonnementprijs_totaal = $('input#abonnementprijs_totaal').val();
		    var extra_optie_totaal =  $('input#extra_optie_totaal').val();

		    var bereken_abonnementprijs_totaal = abonnementsduur*abonnement_p_m;
		    var bereken_extra_optie_totaal = abonnementsduur*extra_p_m;
		    var bereken_totaalprijs = bereken_abonnementprijs_totaal+bereken_extra_optie_totaal;


		    $( "input#abonnementprijs_totaal" ).val( bereken_abonnementprijs_totaal );
		    $( "input#extra_optie_totaal" ).val( bereken_extra_optie_totaal );
			$( "input#totaalprijs" ).val( bereken_totaalprijs );

			// console.log( toestelprijs );

		    // $( "form h3.totaalprijs" ).text( prijs1 );
		}).keyup();
	// }




})