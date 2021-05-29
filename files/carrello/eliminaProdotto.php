<?php
session_start();
include('../database/config.php');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


$idProdotto = $_POST['idProdotto'];
$idCarrello = $_POST['idCarrello'];

$delete = "DELETE FROM contenuto where idProdotto=$idProdotto AND idCarrello=$idCarrello";

$ris = mysqli_query($conn, $delete);
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
$idUtente=$_SESSION['idUtenteLoggato'];
$delete2 = "DELETE FROM compra where idProdotto=$idProdotto AND idUtente=$idUtente";

$ris = mysqli_query($conn, $delete2);
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

header("Location: ./carrello.php");