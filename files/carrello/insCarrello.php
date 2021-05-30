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
    <link href="./assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="./files/css/prodotti.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Kanit:wght@500&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="./files/carrello/style2.css">
    <link rel="stylesheet" href="./files//css/visProdotti.css">
</head>

<body>
    <?php
    session_start();
    include('../database/config.php');
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $idProdotto = $_POST['idProdotto'];

    if (!isset($_SESSION["idUtenteLoggato"])) {
    ?>
        <script link='green' alink='lime' vlink='teal'>
            Swal.fire({
                icon: 'error',
                title: 'Ops...',
                text: 'Effettua prima il login o la registrazione',
                allowEscape: false,
                allowOutsideClick: false,
                confirmButtonText: "<a style='text-color=red;' href='../login/login.php'>Riprova</a>"
            })
        </script>
        <?php
        exit();
    } else {
        $idUtenteLoggato = $_SESSION["idUtenteLoggato"];
        $ottieniIdCarrello = "SELECT idCarrello FROM utente WHERE idUtente='$idUtenteLoggato'";
        $ris = mysqli_query($conn, $ottieniIdCarrello);
        if (!$ris) {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Cè stato un problema in fase di visualizzazione',
                    allowEscape: false,
                    allowOutsideClick: false,
                    confirmButtonText: "<a href='../../index.php'>Riprova</a>"
                })
            </script>
        <?php
            exit();
        }
        $result = mysqli_query($conn, $ottieniIdCarrello);
        $row = mysqli_fetch_array($result);
        $idCarrello = $row['idCarrello'];

        $insert = "INSERT INTO contenuto (idCarrello, idProdotto)  VALUES ('$idCarrello', '$idProdotto')";
        $ris = mysqli_query($conn, $insert);
        if (!$ris) {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Cè stato un problema in fase di visualizzazione',
                    allowEscape: false,
                    allowOutsideClick: false,
                    confirmButtonText: "<a href='../../index.php'>Riprova</a>"
                })
            </script>
        <?php
            exit();
        }

        $insert = "INSERT INTO compra (idUtente, idProdotto)  VALUES ('$idUtenteLoggato', '$idProdotto')";
        $ris = mysqli_query($conn, $insert);
        if (!$ris) {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Cè stato un problema in fase di visualizzazione',
                    allowEscape: false,
                    allowOutsideClick: false,
                    confirmButtonText: "<a href='../../index.php'>Riprova</a>"
                })
            </script>
    <?php
            exit();
        }
        $_SESSION['acquisto'] = 1;
        header("Location: ../../index.php");
    }
    ?>
</body>

</html>