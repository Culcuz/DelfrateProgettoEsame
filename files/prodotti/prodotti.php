<link rel="stylesheet" type="text/css" href="./prodotti.css" />
<?php
include('./files/database/config.php');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$select = "SELECT * FROM prodotto order by 'id'";

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
            confirmButtonText: '<a href="./index.php>Riprova</a>'
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
            confirmButtonText: '<a href="./index.php>Riprova</a>'
        })
    </script>
<?php
    exit();
}

$i = 0;
while ($riga) {
    $i++;
    switch ($i) {
        case 1:
            $x = 11 . "em";
            $y = 17 . "em";
            break;
        case 2:
            $x = 33 . "em";
            $y = 17 . "em";
            break;
        case 3:
            $x = 55 . "em";
            $y = 17 . "em";
            break;
    }

    $nome = $riga['nome'];
    $prezzo = $riga['prezzo'];
    $descrizione = $riga['descrizione'];
    $immagine = $riga['immagine'];
    $riga = mysqli_fetch_array($ris, MYSQLI_ASSOC);

    echo "
        <div class='Pcontainer' style='top: $y; left: $x;'>
        <div class='Pimg'>
            <img src='$immagine'>
        </div>
        <div class='Player-Pcontainer'>
            <div class='Ptext-Pcontent'>
            <div>
                <p id='Pname'>$nome</p>
                <p id='Pcollection'>$descrizione</p>
            </div>
            <div class='Pstar'>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star' aria-hidden='true'></i>
                <i class='fa fa-star-half-o' aria-hidden='true'></i>
            </div>
            <h3 id='Pprice'>$ $prezzo</h3>
            <input type='button' class='Pcart-Pbtn' value='compra'>
            </a>
            </div>
        </div>
        </div>";
    };
mysqli_close($conn);
?>