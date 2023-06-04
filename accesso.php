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
        function Accedi() {
            document.forms[0].operation.value = "Accedi";
            document.forms[0].action = "OperazioniCliente.php";
            document.forms[0].submit();
        }
    </script>
    <body>
        <form method="POST" style="text-align: center;">
            <div class="accesso"><h1 style="text-align: center;">Accesso</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                <input type="submit" value="Accedi" onclick="javascript:Accedi()">
            </div>
            <input type="hidden" name="operation" value="Accedi">
        </form>
    </body>
</html>