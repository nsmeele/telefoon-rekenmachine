<h2>Basis instellingen</h2>
<p>Zorgvuldig invullen zorgt voor het mooiste resultaat</p>
<div class="form-group">
	<div class="col-md-3">
		<label for="abonnementsduur">Abonnementsduur in maanden	</label>
		<input type="number" class="form-control" ng-model="abonnementsduur" id="abonnementsduur">
	</div>
	<div class="col-md-4">
		<label>Soort telefoonabonnement</label>						
		<label class="radio-inline"><input type="radio" name="soort_abonnement" checked="">Abonnement met telefoon</label>
		<label class="radio-inline"><input type="radio" name="soort_abonnement">Sim Only</label>
	</div>
	<div class="clr"></div>
</div>

<div class="form-group">
	<div class="col-md-3">
		<label for="aanbieder">Aanbieder</label>
		<a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right" data-content="Vul hier de aanbieder van het abonnement wat u wil vergelijken">
		  <i class="fa fa-question-circle" aria-hidden="true"></i>
		</a>
		<input type="text" class="form-control" id="aanbieder">
	</div>
	<div class="col-md-3">				
		<label for="telefoon">Telefoon</label>
		<a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right" data-content="De telefoon die je wil aanschaffen">
		  <i class="fa fa-question-circle" aria-hidden="true"></i>
		</a>							
		<input type="text" class="form-control" id="telefoon">
	</div>
	<div class="col-md-3">					
		<label for="abonnement_omschrijving">Abonnement</label>
		<a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right" data-content="Een korte omschrijving van het abonnement">
		  <i class="fa fa-question-circle" aria-hidden="true"></i>
		</a>							
		<input type="text" class="form-control" id="abonnement_omschrijving">
	</div>
</div>

<h2>Kosten</h2>
<div class="alert alert-warning">
	<strong>Let op!</strong> Abonnementsprijs per maand invullen <strong>zonder</strong> kortingen. Deze kun je later alsnog invullen
</div>

<div class="form-group">
	<div class="col-md-2">
		<label for="toestelprijs">Toestelprijs</label>
	    <div class="input-group"> 
	        <span class="input-group-addon"></span>
	        <input type="number" class="form-control" id="toestelprijs" max="1500" step="5" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
	    </div>
	</div>
	<div class="col-md-2">
		<label for="abonnement_p_m">Abonnement p/m</label>
	    <div class="input-group"> 
	        <span class="input-group-addon"></span>
	        <input type="number" class="form-control" id="abonnement_p_m" ng-model="abonnement_p_m" max="100" step="5" class="form-control currency" />
	    </div>
	</div>						
	<div class="col-md-2">
		<label for="abonnementprijs_totaal">Abonnementprijs totaal</label>
	    <div class="input-group"> 
	        <span class="input-group-addon"></span>
	        <input type="text"  class="form-control" disabled="" ng-model="abonnementprijs_totaal" id="abonnementprijs_totaal" value="{{ abonnement_p_m * abonnementsduur }}">
	    </div>
	</div>
	<div class="col-md-2">
		<label for="extra_p_m">Extra optie per maand</label>
	    <div class="input-group"> 
	        <span class="input-group-addon"></span>
	        <input type="text"  class="form-control" disabled="" ng-model="extra_p_m" id="extra_p_m" value="">
	    </div>
	</div>						
	<div class="clr"></div>
</div>

<h2>Totaal</h2>
<p>Als je alles goed ingevuld komt hier een bedrag tussen de 500 en 2000 euro. Klopt het niet? Controleer goed of je de prijs met of zonder korting heb berekend en loop iedere stap nog eens na.</p>

<div class="form-group">
	<div class="col-md-3">
		<label for="totaalprijs">Totaalprijs</label>
	    <div class="input-group"> 
	        <span class="input-group-addon"></span>
	        <input type="text"  class="form-control" disabled="" id="totaalprijs" value="">
	    </div>
	</div>
	<div class="col-md-3">
		<label for="gem_p_m">Gemiddeld per maand</label>
	    <div class="input-group"> 
	        <span class="input-group-addon"></span>
	        <input type="text"  class="form-control" disabled="" id="gem_p_m" value="">
	    </div>
	</div>
	<div class="clr"></div>
</div>

<button type="button" class="btn btn-primary">Toevoegen aan mijn lijstje</button>