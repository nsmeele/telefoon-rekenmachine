function bereken() {


	var abonnementsduur = Number(document.getElementById('abonnementsduur').value);
	var toestelprijs = Number(document.getElementById('toestelprijs').value);
	var eenmalige_kosten =  Number(document.getElementById('eenmalige_kosten').value);
	var abonnement_p_m = Number(document.getElementById('abonnement_p_m').value);
	var extra_p_m = Number(document.getElementById('extra_p_m').value);

	var abonnementprijs_totaal = abonnementsduur * abonnement_p_m;
	if ( abonnementprijs_totaal >= 0 ) {
		document.getElementById('abonnementprijs_totaal').value = abonnementprijs_totaal;
	}
	var extra_optie_totaal = abonnementsduur * extra_p_m;
	if ( extra_optie_totaal >= 0 ) {
		document.getElementById('extra_optie_totaal').value = extra_optie_totaal;
	}

	var totaalprijs = toestelprijs + abonnementprijs_totaal + extra_optie_totaal + eenmalige_kosten;
	if ( totaalprijs >= 0 ) {
		document.getElementById('totaalprijs').value = totaalprijs;
	}

	var gem_p_m = totaalprijs / abonnementsduur;
	if ( gem_p_m >= 0 ) {
		document.getElementById('gem_p_m').value = gem_p_m;
	}

	return;
}