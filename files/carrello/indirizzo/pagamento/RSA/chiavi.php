<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Nøzama </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../../../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Kanit:wght@500&display=swap" rel="stylesheet">

    <link href="../../../../css/prodotti.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../../style2.css">

</head>

<body>
    <?php
    session_start();
    include('../../../../database/config.php');
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
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
                        <a class="nav-link" href="../../../../../index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Home page</p>
                        </a>
                    </li>

                    <?php
                    if (isset($_SESSION['connessione'])) {
                        echo "<li class='nav-item'>
                        <a class='nav-link' href='../../../../logout/logout.php'>
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
            <!-- Navbar -->
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


            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <!-- INIZIO RSA -->
                    <?php
                    include 'phpseclib/Crypt/RSA.php';

                    $numero = $_POST['numero'];
                    $nome = $_POST['nome'];
                    $mese = $_POST['mese'];
                    $anno = $_POST['anno'];
                    $cvc = $_POST['cvc'];


                    $rsa = new Crypt_RSA();
                    extract($rsa->createKey());

                    $plaintext = "$numero-$nome-$mese-$anno-$cvc";

                    //da rivedere con che chiave cripto
                    $rsa->loadKey($privatekey);
                    $ciphertext = $rsa->encrypt($plaintext);
                    $rsa->loadKey($publickey);
                    $decriptato = $rsa->decrypt($ciphertext);
                    ?>
                    <!-- FINE RSA -->



                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-success">
                                    <h4 class="card-title">Chiavi</h4>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">

                                        <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <strong>Chiave Privata </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $privatekey; ?></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <strong>Chiave Pubblica </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $publickey; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header card-header-danger">
                                    <h4 class="card-title">Risultati</h4>
                                </div>
                                <div class="card-body table-responsive">
                                    <table class="table table-hover">

                                        <tbody>
                                            <tr class="text-center">
                                                <td>
                                                    <strong>Testo in chiaro </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $plaintext; ?></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <strong>Testo criptato </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $ciphertext; ?></td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    <strong>Testo decriptato </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo $decriptato; ?></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="#">
                                    About Me
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        by <strong> Riccardo Delfrate</strong>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--   Core JS Files   -->
    <script src="../../../../../assets/js/core/jquery.min.js"></script>
    <script src="../../../../../assets/js/core/popper.min.js"></script>
    <script src="../../../../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../../../../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../../../../../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../../../../../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../../../../../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../../../../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../../../../../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../../../../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../../../../../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../../../../../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../../../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../../..//js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../../../../../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../../../../../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../../../../../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../../../../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../../../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>


</body>

</html>