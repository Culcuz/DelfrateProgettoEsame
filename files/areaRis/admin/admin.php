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
    session_start();
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


</body>

</html>