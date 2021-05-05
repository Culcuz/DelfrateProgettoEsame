<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title> Nøzama </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../registrazione/registrazione.php" method="POST">
                <h1>Crea Account</h1>
                <input type="text" name="nome" placeholder="Nome" required />
                <input type="text" name="cognome" placeholder="Cognome" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Almeno un numero, una lettara minuscola o Maiuscola e almeno 8 o più caratteri" placeholder="Password" required>
                <input type="password" name="confermaPassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Almeno un numero, una lettara minuscola o Maiuscola e almeno 8 o più caratteri" placeholder="Conferma Password" required>
                <button type="submit">Registrati</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="../areaRis/controllo.php" method="POST">
                <h1>Accedi</h1>
                <input type="email" name="mail"placeholder="Email" required />
                <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Almeno un numero, una lettara minuscola o Maiuscola e almeno 8 o più caratteri" placeholder="Password" required>
                <button type="submit">Accedi</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Ben Tornato!</h1>
                    <p>Per rimanere connesso con noi accedi con le tue credenziali</p>
                    <button class="ghost" id="signIn">Accedi</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Benvenuto!</h1>
                    <p>Inserisci i tuoi dati personali e incomincia il viaggio con noi</p>
                    <button class="ghost" id="signUp">Registrati</button>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="./script.js"></script>



</body>

</html>