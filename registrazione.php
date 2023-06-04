<?php
require_once("dao/ClientiDao.php");

use dao\ClientiDao;

$dao = new ClientiDao();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Officina Alfa</title>
        <link rel="icon" href="immagini/iconaSito.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="immagini/iconaSito.png" type="image/x-icon"/>
        <link rel="stylesheet" href="stile/style.css">
    </head>
    <script>
        function Registrati() {
            document.forms[0].action = "OperazioniCliente.php";
            document.forms[0].submit();
        }
    </script>
    <body>
        <form method="POST" style="text-align: center;">
            <div class="registrazione"><h1 style="text-align: center;">Registrazione</h1>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                <label for="cognome">Cognome:</label>
                <input type="text" id="cognome" name="cognome" required><br><br>
                <label for="codFiscale">Codice fiscale:</label>
                <input type="text" id="codFiscale" name="codFiscale" required><br><br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Registrati" onclick="javascript:Registrati()">
            </div>
            <input type="hidden" name="operation" value="Registrati">
        </form>
    </body>
</html>