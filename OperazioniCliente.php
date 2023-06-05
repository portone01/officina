<?php

require_once("dao/ClientiDao.php");

use dao\ClientiDao;

$dao = new ClientiDao();

$op = $_REQUEST["operation"];
if ($op == "Ricerca") {
    $targa = $_REQUEST["barraRic"];
} else {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    if ($op == "Registrati") {
        $nome = $_REQUEST["nome"];
        $cognome = $_REQUEST["cognome"];
        $codFiscale = $_REQUEST["codFiscale"];
    }
}


if ($op == "Accedi") {
    $cliente = $dao->accesso($username, $password);
    if ($cliente != null) {
        $_SESSION['username'] = $username;
        $_SESSION['codFiscale'] = $cliente->getCodFiscale();
        header("location:areaPersonale.php");
    } else {
        header("location:accesso.php");
    }
}

if ($op == "Registrati") {
    $dao->insertCliente($username, $password, $nome, $cognome, $codFiscale);
    $cliente = $dao->accesso($username, $password);
    $_SESSION['username'] = $username;
    $_SESSION['codFiscale'] = $cliente->getCodFiscale();
    header("location:areaPersonale.php");
}

if ($op == "Ricerca"){
    $dao->findStato($targa);
    header("location:stato.php");
}
?>