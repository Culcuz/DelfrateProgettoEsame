<?php
session_start();
include('../database/config.php');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$idProdotto = $_POST['idProdotto'];

if (!isset($_SESSION["idUtenteLoggato"])) {
    echo "dei essere loggato"; /*DA MODIOFICATE*/
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
}


/*INSERIRE ANCHE NELLA TABELLA COMPRA*/
