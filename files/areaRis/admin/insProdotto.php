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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="../../css/link.css">

</head>

<body>

    <?php
    session_start();

    $nome = $_POST['nome'];
    $prezzo = $_POST['prezzo'];
    $descrizione = $_POST['descrizione'];
    $categoria = $_POST['categoria'];

    $upload_path = "../../../img/prodotti/";
    $filename = basename($_FILES['file']['name']);
    $target_File = $upload_path . $filename;
    $check = true;
    $output = "";

    echo $filename;
    echo "<br>";
    echo $target_File;

    if (file_exists($target_File)) {
        $check = false;
        $output = "Il file esiste gia";
    }

    if ($_FILES['file']['size'] > 5000000) {
        $check = false;
        $output = "Il file è troppo grande";
    }

    if ($check) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_File)) {
            echo "file caricatro";
        } else {
            echo "errore";
        };
    } else {
        echo $output;
    }

    $immagine = "./img/prodotti/" . $filename;

    include('../../database/config.php');
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    $ins = "INSERT INTO prodotto (nome, prezzo, descrizione, immagine, idCategoria) VALUES ('$nome','$prezzo','$descrizione','$immagine','$categoria')";

    $ris = mysqli_query($conn, $ins);
    if (!$ris) {
    ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Ops...',
                text: 'Cè stato un problema in fase di visualizzazione',
                allowEscape: false,
                allowOutsideClick: false,
                confirmButtonText: "<a href='../../../index.php'</a>"
            })
        </script>
    <?php
        exit();
    } else {
        $_SESSION['inserito'] = 1;
        header('Location: ./admin.php');
    }
    ?>
</body>

</html>