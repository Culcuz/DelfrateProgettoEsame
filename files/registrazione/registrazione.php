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

<body>
    <?php
    include('../database/config.php');
    session_start();

    //mi salvo i valori passati dal form
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confermaPassword = $_POST['confermaPassword'];

    if ($password == $confermaPassword) {
        //----INSERIMENTO DATI NEL DATABASE-----

        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $password = cryptPassword($password);

        $insertIdCarrello = "INSERT INTO carrello () VALUES ()";
        if (!mysqli_query($conn, $insertIdCarrello)) {
            echo ("ERRORE QUERY CARRELLO");
        }

        $select = "SELECT idCarrello FROM carrello ORDER by idCarrello DESC LIMIT 1";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_array($result);
        $d = $row['idCarrello'];

        $insert = "INSERT INTO utente (nome, cognome, email, password, isAdmin, idCarrello) VALUES ('$nome', '$cognome', '$email', '$password', '0', '$d')";




        if (!mysqli_query($conn, $insert)) {
        ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Ops...',
                    text: 'Cè stato un problema in fase di registrazione',
                    allowEscape: false,
                    allowOutsideClick: false,
                    confirmButtonText: "<a href='../login/login.php'>Riprova</a>"
                });
            </script>
        <?php
        } else {
            $_SESSION['connessione'] = 1; //mi salvo nell'arey di sessine il fatto che l'utente abbia la possibilità di entrare nell'area riservata
            $_SESSION['nome'] = $nome;
        ?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Congratulazioni!',
                    text: 'Registrazione avvenuta con successo',
                    allowEscape: false,
                    allowOutsideClick: false,
                    confirmButtonText: "<a href='../../index.php'>OK</a>"
                });
            </script>
        <?php

        }
        mysqli_close($conn);
        //-----FINE INSERIMENTO DATI NEL DATABASE-----
    } else {
        ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Ops...',
                text: 'Le password inserite sono diverse',
                allowEscape: false,
                allowOutsideClick: false,
                confirmButtonText: "<a href='../login/login.php'>Riprova</a>"
            });
        </script>
    <?php
    }

    //----CRIPTAZIONE PASSWORD-----
    function cryptPassword($password)
    {
        $hash1 = crypt($password, '$1$shfpersh$');
        $hash2 = crypt($hash1, '$6$rounds=5000$K8d6sRt2$');
        return $hash2;
    }
    //---- FINE CRIPTAZIONE PASSWORD-----

    ?>
</body>

</html>