<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> Nøzama </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="../css/prodotti.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Kanit:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../carrello/style2.css">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-3.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <?php
            session_start();
            if (isset($_SESSION['connessione'])) {
                $nome = $_SESSION['nome'];
                echo "
                    <div class='logo'>
                    <a class='simple-text logo-normal'>Benvenuta/o $nome</a>
                    </div>";
            }
            ?>

            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="../../index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Home page</p>
                        </a>
                    </li>
                    <?php
                    if (!isset($_SESSION['connessione'])) {
                        echo "
                            <li class='nav-item '>
                            <a class='nav-link' href='../login/login.php'>
                            <i class='material-icons'>person</i>
                            <p>Accedi/Registrati</p>
                            </a>
                            </li>";
                    }
                    ?>

                    <li class="nav-item ">
                        <a class="nav-link" href="./categorie.php">
                            <i class="material-icons">library_books</i>
                            <p>Categorie</p>
                        </a>
                    </li>
                    <?php
                    if (isset($_SESSION['connessione'])) {
                        echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='../carrello/carrello.php'>
                            <i class='material-icons'>shopping_cart</i>
                            <p>Carrello</p>
                            </a>
                            </li>";
                        if (isset($_SESSION['admin'])) {
                            echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='../areaRis/admin/admin.php'>
                            <i class='material-icons'>admin_panel_settings</i>
                            <p>Amministrazione</p>
                            </a>
                            </li>";
                        }
                        echo "
                            <li class='nav-item'>
                            <a class='nav-link' href='../logout/logout.php'>
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
                    <!-- Prodotti -->
                    <table class="Ptabella">
                        <?php
                        include('../database/config.php');
                        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

                        $idCategoria = $_POST['idCat'];

                        $select = "SELECT * FROM prodotto where idCategoria=$idCategoria order by 'id'";

                        $ris = mysqli_query($conn, $select);
                        if (!$ris) {
                        ?>
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ops...',
                                    text: 'Cè stato un problema in fase di visualizzazione',
                                    allowEscape: false,
                                    allowOutsideClick: false,
                                    confirmButtonText: "<a href='./index.php'>Riprova</a>"
                                })
                            </script>
                        <?php
                            exit();
                        }

                        $riga = mysqli_fetch_array($ris, MYSQLI_ASSOC); // array che conterrà queste informazioni
                        if (!$riga) {
                        ?>
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Ops...',
                                    text: 'Cè stato un problema in fase di visualizzazione',
                                    allowEscape: false,
                                    allowOutsideClick: false,
                                    confirmButtonText: "<a href='./index.php'>Riprova</a>"
                                })
                            </script>
                        <?php
                            exit();
                        }

                        $i = 1;
                        while ($riga) {
                            $id = $riga['idProdotto'];
                            $nome = $riga['nome'];
                            $prezzo = $riga['prezzo'];
                            $descrizione = $riga['descrizione'];
                            $path = $riga['immagine'];
                            $immagine = "../.";
                            $immagine = $immagine . $path;


                            $riga = mysqli_fetch_array($ris, MYSQLI_ASSOC);

                            if (($i % 4 == 0)) {
                                echo "<tr>";
                            }

                            echo "
                <td>
                <form action='./files/carrello/insCarrello.php' method='POST'>
                  <div class='Pcontainer'>
                    <div class='Pimg'>
                      <img src='$immagine'>
                      <input type='hidden' name='idProdotto' value='$id' >
                    </div>
      
                    <div class='Player-Pcontainer'>
                      <div class='Ptext-Pcontent'>
                        <div>
                          <p id='Pname'>$nome</p>
                          <p class='Pcollection'>$descrizione</p>
                        </div>
                        <h3 id='Pprice'>€ $prezzo</h3>
                        <input type='submit' class='Pcart-Pbtn' name='submitButton' value='compra'>
                        </a>
                      </div>
                    </div>
                  </div>
                </form>
                </td>			          
              ";

                            if (($i % 4 == 0)) {
                                echo "</tr>";
                            }
                            $i++;
                        };
                        mysqli_close($conn);
                        ?>

                    </table>
                    <!-- Fine Podotti -->

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
    <script src="../../assets/js/core/jquery.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
</body>

</html>