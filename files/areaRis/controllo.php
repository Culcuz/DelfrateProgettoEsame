<!-- si arriva qua se si ha fatto il form di login, si vinee smistati a seconda se di è admin o utente sempolicer-->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title> Nøzama </title>
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

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
</head>

<body>
    <?php
    session_start();
    include('../database/config.php');

    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //mi salvo i valori passati dal form
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $passCript = cryptPassword($password);

    $select = "SELECT * FROM utente WHERE email='$mail' and password='$passCript'";

    $ris = mysqli_query($conn, $select);
    if (!$ris) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Ops...',
                text: 'Cè stato un problema in fase di login',
                allowEscape: false,
                allowOutsideClick: false,
                confirmButtonText: "<a href='../login/login.php'>Riprova</a>"
            });
        </script>
        <?php
    } else {
        $riga = mysqli_fetch_row($ris);
        $admin = $riga[5];
        $conta = mysqli_num_rows($ris);
        if ($conta == 1) {
            $_SESSION['nome'] = $riga[1];
            if ($admin == 1) {
                $_SESSION['connessione'] = 1; //mi salvo nell'arey di sessine il fatto che l'utente abbia la possibilità di entrare nell'area riservata
                header("Location: ./admin/admin.php");
            } else {
                $_SESSION['connessione'] = 1; //mi salvo nell'arey di sessine il fatto che l'utente abbia la possibilità di entrare nell'area riservata
                header("Location: ../../index.php");
            }
        } else {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Credenziali errate',
                    allowEscape: false,
                    allowOutsideClick: false,
                    confirmButtonText: "<a href='../login/login.php'>Riprova</a>"
                });
            </script>
    <?php

        }
    }


    function cryptPassword($password)
    {
        $hash1 = crypt($password, '$1$shfpersh$');
        $hash2 = crypt($hash1, '$6$rounds=5000$K8d6sRt2$');
        return $hash2;
    }






    ?>
</body>

</html>