<?php
$nome = $_POST['nome'];
$prezzo = $_POST['prezzo'];
$descrizione = $_POST['descrizione'];
$categoria = $_POST['categoria'];
$immagine = $_POST['immagine'];

$upload_path ="../../../img/prodotti/";
$filename = basename($_FILES['immagine']['name']);
$target_File = $upload_path.$filename;

if(move_uploaded_file($_FILES['immagine']['tmp name'],$target_File)){
    echo"file caricatro";
}else{
echo"";
};

echo ($nome . $prezzo . $descrizione . $categoria . $immagine);
