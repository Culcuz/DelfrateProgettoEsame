<!-- si arriva qua se si ha fatto il form di login, si vinee smistati a seconda se di è admin o utente sempolicer-->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title> Nøzama </title>
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
</head>

<body>
    <?php
    //mi salvo i valori passati dal form
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    echo $mail . $password;




    ?>
</body>

</html>