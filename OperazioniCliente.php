<?php

session_start();

require_once("dao/ClientiDao.php");

use dao\ClientiDao;

$dao = new ClientiDao();

$op = $_REQUEST["operation"];
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
if ($op == "Registrati") {
    $nome = $_REQUEST["nome"];
    $cognome = $_REQUEST["cognome"];
    $codFiscale = $_REQUEST["codFiscale"];
}

if ($op == "Accedi") {
    $cliente = $dao->accesso($username, $password);
    if ($cliente != null) {
        $_SESSION['username'] = $username;
        header("location:areaPersonale.html");
    } else {
        header("location:accesso.php");
    }
}

if ($op == "Registrati") {
    $dao->insertCliente($username, $password, $nome, $cognome, $codFiscale);
    $dao->accesso($username);
    header("location:areaPersonale.html");
}
?>