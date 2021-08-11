<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Nøzama </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="./files/css/prodotti.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Kanit:wght@500&display=swap" rel="stylesheet">

    <!-- Barra laterale -->
    <link rel="stylesheet" href="../style2.css">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>

    <!-- Form spedizione-->
    <!-- Icons font CSS-->
    <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="../../css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="../../css/link.css">

</head>

<body>
    <?php
    session_start();
    include('../../database/config.php');
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!isset($_SESSION['connessione'])) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Ops...',
                text: 'Non sei autorizzato',
                allowEscape: false,
                allowOutsideClick: false,
                confirmButtonText: "<a href='../../../index.php'>Esci</a>"
            });
        </script>
    <?php
    } else {
    ?>
        <!-- ACCESSO AVVENUTO -->
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: 'Accesso avvenuto'
            })
        </script>
        <!-- FINE ACCESSO AVVENUTO  -->
    <?php
    }

    ?>

    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-3.jpg">
            <?php
            if (isset($_SESSION['connessione'])) {
                $nome = $_SESSION['nome'];
                echo "
                    <div class='logo'>
                    <a class='simple-text logo-normal'>
                    Benvenuta/o $nome
                    </a>
                    </div>";
            }
            ?>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="../../../index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Home page</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../categorie/categorie.php">
                            <i class="material-icons">library_books</i>
                            <p>Categorie</p>
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['connessione'])) {
                        echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='../../logout/logout.php'>
                            <i class='material-icons'>logout</i>
                            <p>Logout</p>
                            </a>
                            </li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="container">

                    <div class="collapse navbar-collapse" id="navbarText">
                        <!-- 
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
            </ul>
            -->
                    </div>
                </div>
            </nav>


            <!-- INIZIO INSERIMENTO INDIRIZZO NUOVO-->
            <link href="../../css/main.css" rel="stylesheet" media="all">
            <div class="row">
                <form action="./pagamento/pagamento.php" method="POST">
                    <div class="col-lg-6 col-md-12 ">
                        <div class="wrapper wrapper--w790">
                            <div class="card card-5">
                                <div class="card-heading">
                                    <h2 class="title">Dati di Spedizione</h2>
                                </div>
                                <div class="card-body">

                                    <div class="form-row">
                                        <div class="name">Via</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="via" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Numero Civico</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="nCiv" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">CAP</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="cap" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Comune</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="comune" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Provincia</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="provincia" required>
                                                        <option disabled="disabled" selected="selected">Provincia</option>
                                                        <option value="ag">Agrigento</option>
                                                        <option value="al">Alessandria</option>
                                                        <option value="an">Ancona</option>
                                                        <option value="ao">Aosta</option>
                                                        <option value="ar">Arezzo</option>
                                                        <option value="ap">Ascoli Piceno</option>
                                                        <option value="at">Asti</option>
                                                        <option value="av">Avellino</option>
                                                        <option value="ba">Bari</option>
                                                        <option value="bt">Barletta-Andria-Trani</option>
                                                        <option value="bl">Belluno</option>
                                                        <option value="bn">Benevento</option>
                                                        <option value="bg">Bergamo</option>
                                                        <option value="bi">Biella</option>
                                                        <option value="bo">Bologna</option>
                                                        <option value="bz">Bolzano</option>
                                                        <option value="bs">Brescia</option>
                                                        <option value="br">Brindisi</option>
                                                        <option value="ca">Cagliari</option>
                                                        <option value="cl">Caltanissetta</option>
                                                        <option value="cb">Campobasso</option>
                                                        <option value="ci">Carbonia-iglesias</option>
                                                        <option value="ce">Caserta</option>
                                                        <option value="ct">Catania</option>
                                                        <option value="cz">Catanzaro</option>
                                                        <option value="ch">Chieti</option>
                                                        <option value="co">Como</option>
                                                        <option value="cs">Cosenza</option>
                                                        <option value="cr">Cremona</option>
                                                        <option value="kr">Crotone</option>
                                                        <option value="cn">Cuneo</option>
                                                        <option value="en">Enna</option>
                                                        <option value="fm">Fermo</option>
                                                        <option value="fe">Ferrara</option>
                                                        <option value="fi">Firenze</option>
                                                        <option value="fg">Foggia</option>
                                                        <option value="fc">Forl&igrave;-Cesena</option>
                                                        <option value="fr">Frosinone</option>
                                                        <option value="ge">Genova</option>
                                                        <option value="go">Gorizia</option>
                                                        <option value="gr">Grosseto</option>
                                                        <option value="im">Imperia</option>
                                                        <option value="is">Isernia</option>
                                                        <option value="sp">La spezia</option>
                                                        <option value="aq">L'aquila</option>
                                                        <option value="lt">Latina</option>
                                                        <option value="le">Lecce</option>
                                                        <option value="lc">Lecco</option>
                                                        <option value="li">Livorno</option>
                                                        <option value="lo">Lodi</option>
                                                        <option value="lu">Lucca</option>
                                                        <option value="mc">Macerata</option>
                                                        <option value="mn">Mantova</option>
                                                        <option value="ms">Massa-Carrara</option>
                                                        <option value="mt">Matera</option>
                                                        <option value="vs">Medio Campidano</option>
                                                        <option value="me">Messina</option>
                                                        <option value="mi">Milano</option>
                                                        <option value="mo">Modena</option>
                                                        <option value="mb">Monza e della Brianza</option>
                                                        <option value="na">Napoli</option>
                                                        <option value="no">Novara</option>
                                                        <option value="nu">Nuoro</option>
                                                        <option value="og">Ogliastra</option>
                                                        <option value="ot">Olbia-Tempio</option>
                                                        <option value="or">Oristano</option>
                                                        <option value="pd">Padova</option>
                                                        <option value="pa">Palermo</option>
                                                        <option value="pr">Parma</option>
                                                        <option value="pv">Pavia</option>
                                                        <option value="pg">Perugia</option>
                                                        <option value="pu">Pesaro e Urbino</option>
                                                        <option value="pe">Pescara</option>
                                                        <option value="pc">Piacenza</option>
                                                        <option value="pi">Pisa</option>
                                                        <option value="pt">Pistoia</option>
                                                        <option value="pn">Pordenone</option>
                                                        <option value="pz">Potenza</option>
                                                        <option value="po">Prato</option>
                                                        <option value="rg">Ragusa</option>
                                                        <option value="ra">Ravenna</option>
                                                        <option value="rc">Reggio di Calabria</option>
                                                        <option value="re">Reggio nell'Emilia</option>
                                                        <option value="ri">Rieti</option>
                                                        <option value="rn">Rimini</option>
                                                        <option value="rm">Roma</option>
                                                        <option value="ro">Rovigo</option>
                                                        <option value="sa">Salerno</option>
                                                        <option value="ss">Sassari</option>
                                                        <option value="sv">Savona</option>
                                                        <option value="si">Siena</option>
                                                        <option value="sr">Siracusa</option>
                                                        <option value="so">Sondrio</option>
                                                        <option value="ta">Taranto</option>
                                                        <option value="te">Teramo</option>
                                                        <option value="tr">Terni</option>
                                                        <option value="to">Torino</option>
                                                        <option value="tp">Trapani</option>
                                                        <option value="tn">Trento</option>
                                                        <option value="tv">Treviso</option>
                                                        <option value="ts">Trieste</option>
                                                        <option value="ud">Udine</option>
                                                        <option value="va">Varese</option>
                                                        <option value="ve">Venezia</option>
                                                        <option value="vb">Verbano-Cusio-Ossola</option>
                                                        <option value="vc">Vercelli</option>
                                                        <option value="vr">Verona</option>
                                                        <option value="vv">Vibo valentia</option>
                                                        <option value="vi">Vicenza</option>
                                                        <option value="vt">Viterbo</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Informazioni</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <textarea class="input--style-6" rows="4" cols="50" name="info"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row m-b-55">
                                        <div>
                                            <button class="btn btn--radius-2 btn--blue" id="procedi1" type="submit">Procedi</button>
                                            <button class="btn btn--radius-2 btn--blue" type="button" id="fattura1" onclick="mostra()">Fattura</button>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" id="fattura">
                        <div class="wrapper wrapper--w790">
                            <div class="card card-5">
                                <div class="card-heading">
                                    <h2 class="title">Dati di Fatturazione</h2>
                                </div>
                                <div class="card-body">

                                    <div class="form-row">
                                        <div class="name">Ragione sociale</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="ragSociale">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Pec/Codice univoco</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="pecCod">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Partita IVA</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="partitaIva">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Codice fiscale</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="FcodFiscale">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Via</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="Fvia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Numero Civico</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="FnCiv">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">CAP</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="Fcap">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Comune</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <input class="input--style-5" type="text" name="Fcomune">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="name">Provincia</div>
                                        <div class="value">
                                            <div class="input-group">
                                                <div class="rs-select2 js-select-simple select--no-search">
                                                    <select name="Fprovincia">
                                                        <option selected="selected" value="null">Provincia</option>
                                                        <option value="ag">Agrigento</option>
                                                        <option value="al">Alessandria</option>
                                                        <option value="an">Ancona</option>
                                                        <option value="ao">Aosta</option>
                                                        <option value="ar">Arezzo</option>
                                                        <option value="ap">Ascoli Piceno</option>
                                                        <option value="at">Asti</option>
                                                        <option value="av">Avellino</option>
                                                        <option value="ba">Bari</option>
                                                        <option value="bt">Barletta-Andria-Trani</option>
                                                        <option value="bl">Belluno</option>
                                                        <option value="bn">Benevento</option>
                                                        <option value="bg">Bergamo</option>
                                                        <option value="bi">Biella</option>
                                                        <option value="bo">Bologna</option>
                                                        <option value="bz">Bolzano</option>
                                                        <option value="bs">Brescia</option>
                                                        <option value="br">Brindisi</option>
                                                        <option value="ca">Cagliari</option>
                                                        <option value="cl">Caltanissetta</option>
                                                        <option value="cb">Campobasso</option>
                                                        <option value="ci">Carbonia-iglesias</option>
                                                        <option value="ce">Caserta</option>
                                                        <option value="ct">Catania</option>
                                                        <option value="cz">Catanzaro</option>
                                                        <option value="ch">Chieti</option>
                                                        <option value="co">Como</option>
                                                        <option value="cs">Cosenza</option>
                                                        <option value="cr">Cremona</option>
                                                        <option value="kr">Crotone</option>
                                                        <option value="cn">Cuneo</option>
                                                        <option value="en">Enna</option>
                                                        <option value="fm">Fermo</option>
                                                        <option value="fe">Ferrara</option>
                                                        <option value="fi">Firenze</option>
                                                        <option value="fg">Foggia</option>
                                                        <option value="fc">Forl&igrave;-Cesena</option>
                                                        <option value="fr">Frosinone</option>
                                                        <option value="ge">Genova</option>
                                                        <option value="go">Gorizia</option>
                                                        <option value="gr">Grosseto</option>
                                                        <option value="im">Imperia</option>
                                                        <option value="is">Isernia</option>
                                                        <option value="sp">La spezia</option>
                                                        <option value="aq">L'aquila</option>
                                                        <option value="lt">Latina</option>
                                                        <option value="le">Lecce</option>
                                                        <option value="lc">Lecco</option>
                                                        <option value="li">Livorno</option>
                                                        <option value="lo">Lodi</option>
                                                        <option value="lu">Lucca</option>
                                                        <option value="mc">Macerata</option>
                                                        <option value="mn">Mantova</option>
                                                        <option value="ms">Massa-Carrara</option>
                                                        <option value="mt">Matera</option>
                                                        <option value="vs">Medio Campidano</option>
                                                        <option value="me">Messina</option>
                                                        <option value="mi">Milano</option>
                                                        <option value="mo">Modena</option>
                                                        <option value="mb">Monza e della Brianza</option>
                                                        <option value="na">Napoli</option>
                                                        <option value="no">Novara</option>
                                                        <option value="nu">Nuoro</option>
                                                        <option value="og">Ogliastra</option>
                                                        <option value="ot">Olbia-Tempio</option>
                                                        <option value="or">Oristano</option>
                                                        <option value="pd">Padova</option>
                                                        <option value="pa">Palermo</option>
                                                        <option value="pr">Parma</option>
                                                        <option value="pv">Pavia</option>
                                                        <option value="pg">Perugia</option>
                                                        <option value="pu">Pesaro e Urbino</option>
                                                        <option value="pe">Pescara</option>
                                                        <option value="pc">Piacenza</option>
                                                        <option value="pi">Pisa</option>
                                                        <option value="pt">Pistoia</option>
                                                        <option value="pn">Pordenone</option>
                                                        <option value="pz">Potenza</option>
                                                        <option value="po">Prato</option>
                                                        <option value="rg">Ragusa</option>
                                                        <option value="ra">Ravenna</option>
                                                        <option value="rc">Reggio di Calabria</option>
                                                        <option value="re">Reggio nell'Emilia</option>
                                                        <option value="ri">Rieti</option>
                                                        <option value="rn">Rimini</option>
                                                        <option value="rm">Roma</option>
                                                        <option value="ro">Rovigo</option>
                                                        <option value="sa">Salerno</option>
                                                        <option value="ss">Sassari</option>
                                                        <option value="sv">Savona</option>
                                                        <option value="si">Siena</option>
                                                        <option value="sr">Siracusa</option>
                                                        <option value="so">Sondrio</option>
                                                        <option value="ta">Taranto</option>
                                                        <option value="te">Teramo</option>
                                                        <option value="tr">Terni</option>
                                                        <option value="to">Torino</option>
                                                        <option value="tp">Trapani</option>
                                                        <option value="tn">Trento</option>
                                                        <option value="tv">Treviso</option>
                                                        <option value="ts">Trieste</option>
                                                        <option value="ud">Udine</option>
                                                        <option value="va">Varese</option>
                                                        <option value="ve">Venezia</option>
                                                        <option value="vb">Verbano-Cusio-Ossola</option>
                                                        <option value="vc">Vercelli</option>
                                                        <option value="vr">Verona</option>
                                                        <option value="vv">Vibo valentia</option>
                                                        <option value="vi">Vicenza</option>
                                                        <option value="vt">Viterbo</option>
                                                    </select>
                                                    <div class="select-dropdown"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div>
                                        <button class="btn btn--radius-2 btn--blue" type="submit">Procedi</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <!-- FINE INSERIMENTO INDIRIZZO NUOVO-->

            <script>
                function mostra() {
                    document.getElementById('fattura').style.display = 'block';
                    document.getElementById('procedi1').style.display = 'none';
                    document.getElementById('fattura1').style.display = 'none';

                }
                document.getElementById('fattura').style.display = 'none';
            </script>

        </div>
    </div>


    <!-- Jquery JS-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="./vendor/select2/select2.min.js"></script>
    <script src="./vendor/datepicker/moment.min.js"></script>
    <script src="./vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./js/global.js"></script>




    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>

    <script src="../script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/jquery.min.js"></script>
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../../../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../../../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../../../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../../../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../../../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../../../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../../../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../../../js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../../../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin fo the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../../../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../../assets/demo/demo.js"></script>
</body>

</html>