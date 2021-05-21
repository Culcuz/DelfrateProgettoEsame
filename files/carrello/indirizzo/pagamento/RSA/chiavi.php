<?php
include 'phpseclib/Crypt/RSA.php';

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
    $numero = $_POST['numero'];
    $nome = $_POST['nome'];
    $mese = $_POST['mese'];
    $anno = $_POST['anno'];
    $cvc = $_POST['cvc'];


    $rsa = new Crypt_RSA();
    extract($rsa->createKey());
    echo $privatekey;
    echo "<br>";
    echo $publickey;

    $plaintext = "$numero-$nome-$mese-$anno-$cvc";

    $rsa->loadKey($privatekey);
    $ciphertext = $rsa->encrypt($plaintext);
    echo "<br>";
    echo $ciphertext;
    echo "<br>";
    $rsa->loadKey($publickey);
    echo $rsa->decrypt($ciphertext);
}
?>