<?php
session_start();
include('../database/config.php');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$idProdotto = $_POST['idProdotto'];