<?php

require_once("dao/ClientiDao.php");

use dao\ClientiDao;

$dao = new ClientiDao();

$op = $_REQUEST["operation"];
$username = $_REQUEST["username"];
if (op == "Registrati") {
    $password = $_REQUEST["password"];
    $nome = $_REQUEST["nome"];
    $cognome = $_REQUEST["cognome"];
    $codFiscale = $_REQUEST["codFiscale"];
}

if ($op == "Accedi") {
    $dao->accesso($username);
}
if ($op == "Registrati") {
    $dao->insertUtente($username, $password, $nome, $cognome, $codFiscale);
}
?>
<body><script>confirm("Sei sicuro?")</script></body>