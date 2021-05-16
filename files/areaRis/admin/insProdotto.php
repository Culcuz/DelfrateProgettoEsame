<?php
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
        echo "errpre";
    };
}else{
    echo $output;
}



echo ($nome . $prezzo . $descrizione . $categoria);
