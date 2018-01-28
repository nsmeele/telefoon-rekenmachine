<!DOCTYPE html>
<html lang="en">
<head>
	<link id="bootstrap" rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link id="font-awesome" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/math.js"></script>
</head>
<body>

<header class="page-header">
	<div class="container">
		<div class="row">
			<h1>Reken en vergelijk!</h1>
			<h2>Kostenvrij telefoonabonnementen vergelijken.</h2>
			<p>Altijd het gevoel dat Sim Only aanzienlijk goedkoper is dan een telefoon met abonnement? Vind het hier uit! Vul de gegevens in en wij rekenen het <strong>kostenloos</strong> voor u uit. Gegevens worden niet opgeslagen, dat interesseert me namelijk niets. Of dit in de toekomst zo blijft is nog onzeker.</p>
		</div>
	</div>
</header>

<div id="content">
	<div class="container">
		<div class="row">

			<form method="post" action="" onsubmit="return false;">
				<h2>Basis instellingen</h2>
				<p>Zorgvuldig invullen zorgt voor het beste resultaat</p>


				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<label for="abonnementsduur">Abonnementsduur in maanden	</label>
							<input type="number" class="form-control" step="6" id="abonnementsduur" onblur="bereken()">
						</div>
						<div class="col-md-4">
							<label>Soort telefoonabonnement</label>
							<div class="clr"></div>
							<label class="radio-inline"><input type="radio" name="soort_abonnement" checked="">Abonnement met telefoon</label>
							<label class="radio-inline"><input type="radio" name="soort_abonnement">Sim Only</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-4">
							<label for="aanbieder">Aanbieder</label>
							<a href="#" onclick="return false;" title="Meer uitleg" data-toggle="popover" data-placement="right" data-content="Vul hier de aanbieder van het abonnement wat u wil vergelijken">
							  <i class="fa fa-question-circle" aria-hidden="true"></i>
							</a>
							<input type="text" class="form-control" id="aanbieder">
						</div>
						<div class="col-md-4">				
							<label for="telefoon">Telefoon type</label>
							<a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right" data-content="Een korte omschrijving van de telefoon die je wil aanschaffen">
							  <i class="fa fa-question-circle" aria-hidden="true"></i>
							</a>							
							<input type="text" class="form-control" id="telefoon">
						</div>
						<div class="col-md-4">					
							<label for="abonnement_omschrijving">Abonnement</label>
							<a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right" data-content="Een korte omschrijving van het abonnement">
							  <i class="fa fa-question-circle" aria-hidden="true"></i>
							</a>							
							<input type="text" class="form-control" id="abonnement_omschrijving">
						</div>
					</div>						
				</div>

				<h2>Kosten</h2>
				<div class="alert alert-info">
					<strong>Let op!</strong> Abonnementsprijs per maand invullen <strong>zonder</strong> kortingen. Deze kun je later alsnog invullen
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-md-6">
							<label for="toestelprijs">Toestelprijs</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number" class="form-control" id="toestelprijs" max="1500" step="5" class="form-control currency" onblur="bereken()"/>
						    </div>
						</div>
						<div class="col-md-6">
							<label for="eenmalige_kosten">Eenmalige extra kosten</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number" class="form-control" id="eenmalige_kosten" max="1500" step="5" class="form-control currency" onblur="bereken()"/>
						    </div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<label for="abonnement_p_m">Abonnement p/m</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number" class="form-control" id="abonnement_p_m" max="100" step="5" class="form-control currency" onblur="bereken()"/>
						    </div>
						</div>
						<div class="col-md-3">
							<label for="abonnementprijs_totaal">Abonnementprijs totaal</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number"  class="form-control" readonly id="abonnementprijs_totaal" value="">
						    </div>
					    </div>
						<div class="col-md-3">
							<label for="extra_p_m">Extra optie p/m</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number" class="form-control" id="extra_p_m" max="100" step="5" class="form-control currency" onblur="bereken()"/>
						    </div>
						</div>
						<div class="col-md-3">
							<label for="extra_optie_totaal">Extra optie totaal</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number"  class="form-control" readonly="" id="extra_optie_totaal" value="">
						    </div>
						</div>						
					</div>

				</div>

				<h2>Totaal</h2>
				<p>Als je alles goed ingevuld komt hier een bedrag tussen de 500 en 2000 euro. Klopt het niet? Controleer goed of je de prijs met of zonder korting heb berekend en loop iedere stap nog eens na.</p>

				<div class="form-group">
					<div class="row">
						<div class="col-md-3">
							<label for="totaalprijs">Totaalprijs</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number"  class="form-control" readonly="" id="totaalprijs" value="">
						    </div>
						</div>
						<div class="col-md-3">
							<label for="gem_p_m">Gemiddeld per maand</label>
						    <div class="input-group"> 
						        <span class="input-group-addon">&euro;</span>
						        <input type="number"  class="form-control" readonly="" id="gem_p_m" value="">
						    </div>
						</div>
					</div>
				</div>

				<input type="submit" class="btn btn-primary" value="Toevoegen aan mijn lijstje">

			</form>

		</div>
	</div>
</div>

</body>

</html> 