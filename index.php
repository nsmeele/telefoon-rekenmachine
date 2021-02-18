<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="dist/css/main.min.css">
</head>
<body>

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

                        <div class="form-row">
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

                        <h2>Aanvullende instellingen (optioneel)</h2>
                        <p class="text-muted">Onderstaande instellingen zijn niet verplicht om in te vullen maar helpen voor jezelf om straks een goed overzicht te krijgen.</p>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label class="d-block">
                                    Aanbieder<br>
                                    <span class="text-muted font-italic">Bijvoorbeeld: T-Mobile</span><br>
                                    <input type="text" class="form-control" id="aanbieder">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label class="d-block">
                                    Telefoonnaam<br>
                                    <span class="text-muted font-italic">Bijvoorbeeld: OnePlus 5T</span><br>
                                    <input type="text" class="form-control" id="telefoon">
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label class="d-block">
                                    Abonnement beschrijving<br>
                                    <span class="text-muted font-italic">Bijvoorbeeld: 2GB + 100 minuten bellen</span><br>
                                    <input type="text" class="form-control" id="abonnement_omschrijving">
                                </label>
                            </div>
                        </div>

                        <h2>Kosten</h2>
                        <div class="form-row">
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
                        <div class="form-row">
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
                                <label>
                                    Abonnementprijs totaal<br>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&euro;</span>
                                        </div>
                                        <input type="number" class="form-control" readonly id="abonnementprijs_totaal" value="">
                                    </div>
                                </label>
                            </div>
                            <div class="col-md col-12">

                                <label>
                                    Extra optie p/m<br>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&euro;</span>
                                        </div>
                                        <input type="number" id="extra_p_m" max="100" step="5" class="form-control"
                                               onblur="bereken()"/>
                                    </div>
                                </label>

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

                        <div class="form-row">

                            <div class="col-md col-12">

                                <label class="d-block">
                                    Totaalprijs<br>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&euro;</span>
                                        </div>
                                        <input type="number" class="form-control" readonly="" id="totaalprijs" value="">
                                    </div>
                                </label>
                            </div>
                            <div class="col-md col-12">
                                <label class="d-block">
                                    Gemiddeld per maand<br>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">&euro;</span>
                                        </div>
                                        <input type="number" class="form-control" readonly="" id="gem_p_m" value="">
                                    </div>
                                </label>
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
                                    <td>&euro; 1000,00</td>
                                    <td>Aanbieder</td>
                                    <td>2GB + 150 minuten</td>
                                </tr>
                                <tr>
                                    <td>&euro; 41,67</td>
                                    <td>24</td>
                                    <td>&euro; 1000,00</td>
                                    <td>Aanbieder</td>
                                    <td>2GB + 150 minuten</td>
                                </tr>
                                <tr>
                                    <td>&euro; 41,67</td>
                                    <td>24</td>
                                    <td>&euro; 1000,00</td>
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

    <script type="text/javascript" src="assets/js/math.js"></script>

</body>

</html>