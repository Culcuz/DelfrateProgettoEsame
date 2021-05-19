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

  <link rel="stylesheet" href="../../carrello/style2.css">

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
    <!-- FINE ACCESSO AVVENUTO -->
  <?php
  }

  ?>

  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-3.jpg">
      <?php
      if (isset($_SESSION['connessione'])) {
        $nome = $_SESSION['nome'];
        echo "<div class='logo'>
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
            <a class="nav-link" href="./files/login/login.php">
              <i class="material-icons">person</i>
              <p>Accedi/Registrati</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">library_books</i>
              <p>Categorie</p>
            </a>
          </li>
          <?php
          if (isset($_SESSION['connessione'])) {
            echo "<li class='nav-item'>
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
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">inventory_2</i>
                  </div>
                  <p class="card-category">Prodotti presenti:</p>
                  <?php
                  $numeroProdotti = "SELECT * FROM prodotto";
                  $ris = mysqli_query($conn, $numeroProdotti);
                  $num_righe = mysqli_num_rows($ris);
                  if (!$ris) {
                  ?>
                    <script>
                      Swal.fire({
                        icon: 'error',
                        title: 'Ops...',
                        text: 'Cè stato un problema in fase di visualizzazione',
                        allowEscape: false,
                        allowOutsideClick: false,
                        confirmButtonText: '<a href="../../../index.php>Riprova</a>'
                      });
                    </script>
                  <?php
                  }
                  ?>
                  <h3 class="card-title"><?php echo $num_righe ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">account_circle</i>
                  </div>
                  <p class="card-category">Utenti presenti:</p>
                  <?php
                  $numeroProdotti = "SELECT * FROM utente";
                  $ris = mysqli_query($conn, $numeroProdotti);
                  $num_righe = mysqli_num_rows($ris);
                  if (!$ris) {
                  ?>
                    <script>
                      Swal.fire({
                        icon: 'error',
                        title: 'Ops...',
                        text: 'Cè stato un problema in fase di visualizzazione',
                        allowEscape: false,
                        allowOutsideClick: false,
                        confirmButtonText: '<a href="../../../index.php>Riprova</a>'
                      });
                    </script>
                  <?php
                  }
                  ?>
                  <h3 class="card-title"><?php echo $num_righe ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">category</i>
                  </div>
                  <p class="card-category">Categorie presenti:</p>
                  <?php
                  $numeroProdotti = "SELECT * FROM categoria";
                  $ris = mysqli_query($conn, $numeroProdotti);
                  $num_righe = mysqli_num_rows($ris);
                  if (!$ris) {
                  ?>
                    <script>
                      Swal.fire({
                        icon: 'error',
                        title: 'Ops...',
                        text: 'Cè stato un problema in fase di visualizzazione',
                        allowEscape: false,
                        allowOutsideClick: false,
                        confirmButtonText: '<a href="../../../index.php>Riprova</a>'
                      });
                    </script>
                  <?php
                  }
                  ?>
                  <h3 class="card-title"><?php echo $num_righe ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12">

              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <h4 class="card-title">Inserisci un prodotto</h4>

                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form action="./insProdotto.php" method="post" enctype="multipart/form-data">
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">

                        <table class="table">
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-group">
                                  <label>Nome</label>
                                  <br>
                                  <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-group">
                                  <label>Prezzo</label>
                                  <br>
                                  <input type="text" class="form-control" name="prezzo" placeholder="Prezzo" required>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-group">
                                  <label>Descrizione</label>
                                  <br>
                                  <textarea class="form-control" name="descrizione" id="editor1" placeholder="Descrizione" required></textarea>
                                  <!-- Richiamo la libreria jQuery con i CDN di Google e il file di CKEditor -->
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                                  <script src="ckeditor/ckeditor.js"></script>

                                  <!-- Eseguo lo script -->
                                  <script>
                                    CKEDITOR.replace('editor1');
                                  </script>
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <label>Categoria</label>
                                <select class="form-select" name="categoria" aria-label="Default select example" required>
                                  <option value="1">Telefono</option>
                                  <option value="2">Scarpa</option>
                                  <option value="3">Tablet</option>
                                </select>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <label for="myfile">Immagine</label>
                                <input type="file" name="file" class="form-control" accept="image/*" required>
                              </td>
                            </tr>
                          </tbody>

                        </table>
                      </div>
                      <button type="submit" style="width: 100%" class="btn btn-success">Inserisci</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Prodotti presenti</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Id</th>
                      <th>Nome</th>
                      <th>Prezzo</th>
                      <th>Descrizione</th>
                      <th>Categoria</th>
                    </thead>
                    <tbody>

                      <?php
                      $select = "SELECT * FROM prodotto P INNER JOIN categoria C ON P.idCategoria=C.idCategoria";

                      $ris = mysqli_query($conn, $select);
                      if (!$ris) {

                        exit();
                      }

                      $riga = mysqli_fetch_array($ris, MYSQLI_ASSOC); // array che conterrà queste informazioni
                      if (!$riga) {

                        exit();
                      }
                      while ($riga) {
                        $id = $riga['idProdotto'];
                        $nome = $riga['nome'];
                        $prezzo = $riga['prezzo'];
                        $descrizione = $riga['descrizione'];
                        $categoria = $riga['nomeCat'];
                        echo (" 
                        <tr>
                 
                        <td>$id</td>
                        <td>$nome</td>
                        <td>$prezzo</td>
                        <td>$descrizione</td>
                        <td>$categoria</td>
                        </tr>");


                        $riga = mysqli_fetch_array($ris, MYSQLI_ASSOC);
                      }
                      mysqli_close($conn);

                      ?>
                    </tbody>
                  </table>
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
    <script src="../../..//js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../../../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../../../assets/js/plugins/nouislider.min.js"></script>
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