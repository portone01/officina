<?php
session_start();
$_SESSION['inizio'] = null;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Area Personale</title>
        <link rel="icon" href="immagini/iconaSito.png" type="image/x-icon" />
        <link rel="shortcut icon" href="immagini/iconaSito.png" type="image/x-icon" />
        <link rel="stylesheet" href="stile/style.css">
    </head>
    <body>
        <h1 class="titolohome"><a href="index.php"><img class="logo" src="immagini/iconaSito.png" alt="alfa"></a>Bentornato!</h1>
        <ul class=home>
            <li><a class=zoom href="storico.php">Storico</a></li>
            <li><a class=zoom href="stato.php">Stato</a></li>
        </ul>
</html>
