<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <script type="text/javascript" src="assets/js/math.js"></script>
</head>
<body>

<div id="page-wrapper">
    <header class="page-header bg-light py-4 border-bottom">
        <div class="container-fluid">
            <h1>Reken en vergelijk!</h1>
            <p class="lead">Nu kostenloos de tarieven van verschillende telefoonabonnementen met elkaar vergelijken.</p>
        </div>
    </header>

    <article class="py-4">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-7 col-12">

                    <form method="post" action="" onsubmit="return false;">
                        <h2>Basis instellingen</h2>
                        <p class="text-muted">Zorgvuldig invullen zorgt voor het beste resultaat</p>

                        <div class="form-group row">
                            <div class="col-md-4 col-12">
                                <label for="abonnementsduur">Abonnementsduur in maanden </label>
                                <input type="number" class="form-control" step="6" id="abonnementsduur" onblur="bereken()">
                            </div>
                            <div class="col-md col-12">
                                <label>Soort telefoonabonnement</label>
                                <div class="clr"></div>
                                <label class="radio-inline"><input type="radio" name="soort_abonnement" checked="">Abonnement
                                    met telefoon</label>
                                <label class="radio-inline"><input type="radio" name="soort_abonnement">Sim Only</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="aanbieder">Aanbieder</label>
                                <a href="#" onclick="return false;" title="Meer uitleg" data-toggle="popover"
                                   data-placement="right"
                                   data-content="Vul hier de aanbieder van het abonnement wat u wil vergelijken">
                                    <i class="fas fa-question-circle"></i>
                                </a>
                                <input type="text" class="form-control" id="aanbieder">
                            </div>
                            <div class="col-md-4">
                                <label for="telefoon">Telefoon type</label>
                                <a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right"
                                   data-content="Een korte omschrijving van de telefoon die je wil aanschaffen">
                                    <i class="fas fa-question-circle"></i>
                                </a>
                                <input type="text" class="form-control" id="telefoon">
                            </div>
                            <div class="col-md-4">
                                <label for="abonnement_omschrijving">Abonnement beschrijving</label>
                                <p>Bijvoorbeeld: 2GB + 100 minuten bellen</p>
                                <a href="#" title="Meer uitleg" data-toggle="popover" data-placement="right"
                                   data-content="Een korte omschrijving van het abonnement">
                                    <i class="fas fa-question-circle"></i>
                                </a>
                                <input type="text" class="form-control" id="abonnement_omschrijving">
                            </div>
                        </div>

                        <h2>Kosten</h2>
                        <div class="alert alert-info">
                            <strong>Let op!</strong> Abonnementsprijs per maand invullen <strong>zonder</strong> kortingen. Deze
                            kun je later alsnog invullen
                        </div>

                        <div class="form-group row">
                            <div class="col-md col-12">
                                <label for="toestelprijs">Toestelprijs</label>

                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" id="toestelprijs" max="1500" step="5" class="form-control"
                                           onblur="bereken()"/>
                                </div>
                            </div>
                            <div class="col-md col-12">
                                <label for="eenmalige_kosten">Eenmalige extra kosten</label>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" id="eenmalige_kosten" max="1500" step="5" class="form-control"
                                           onblur="bereken()"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-md col-12">
                                <label for="abonnement_p_m">Abonnement p/m</label>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" id="abonnement_p_m" max="100" step="5" class="form-control"
                                           onblur="bereken()"/>
                                </div>
                            </div>
                            <div class="col-md col-12">
                                <label for="abonnementprijs_totaal">Abonnementprijs totaal</label>

                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" class="form-control" readonly id="abonnementprijs_totaal" value="">
                                </div>
                            </div>
                            <div class="col-md col-12">
                                <label for="extra_p_m">Extra optie p/m</label>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" id="extra_p_m" max="100" step="5" class="form-control"
                                           onblur="bereken()"/>
                                </div>
                            </div>
                            <div class="col-md col-12">
                                <label for="extra_optie_totaal">Extra optie totaal</label>
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" class="form-control" readonly id="extra_optie_totaal" value="">
                                </div>
                            </div>


                        </div>

                        <h2>Totaal</h2>
                        <p class="text-muted">Als je alles goed ingevuld komt hier een bedrag tussen de 500 en 2000 euro. Klopt
                            het niet?
                            Controleer goed of je de prijs met of zonder korting heb berekend en loop iedere stap nog eens
                            na.</p>

                        <div class="form-group row">

                            <div class="col-md col-12">
                                <label for="totaalprijs">Totaalprijs</label>

                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" class="form-control" readonly="" id="totaalprijs" value="">
                                </div>

                            </div>
                            <div class="col-md col-12">
                                <label for="gem_p_m">Gemiddeld per maand</label>

                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">&euro;</span>
                                    </div>
                                    <input type="number" class="form-control" readonly="" id="gem_p_m" value="">
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary"><span class="mr-2"><i class="fas fa-plus-circle"></i></span>Toevoegen</button>

                    </form>


                </div>
                <div class="col-md col-12">

                    <div class="inner">

                        <div class="list-header">
                            <h2>Mijn lijst</h2>
                            <p class="text-muted">Voer de gegevens links in en druk op de knop toevoegen.</p>
                        </div>
                        <div class="list-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Gemiddeld p/m</th>
                                    <th>Aantal maanden</th>
                                    <th>Totaalprijs</th>
                                    <th>Aanbieder</th>
                                    <th>Abonnement beschrijving</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>&euro; 41,67</td>
                                    <td>24</td>
                                    <td>&euro; 1000,000</td>
                                    <td>Aanbieder</td>
                                    <td>2GB + 150 minuten</td>
                                </tr>
                                <tr>
                                    <td>&euro; 41,67</td>
                                    <td>24</td>
                                    <td>&euro; 1000,000</td>
                                    <td>Aanbieder</td>
                                    <td>2GB + 150 minuten</td>
                                </tr>
                                <tr>
                                    <td>&euro; 41,67</td>
                                    <td>24</td>
                                    <td>&euro; 1000,000</td>
                                    <td>Aanbieder</td>
                                    <td>2GB + 150 minuten</td>
                                </tr>
                                </tbody>
                            </table>

                            <button class="btn btn-outline-secondary">Bekijk uitgebreid overzicht<span class="icon ml-2"><i class="fas fa-chevron-right"></i></span></button>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </article>

</div>


</body>

</html> 