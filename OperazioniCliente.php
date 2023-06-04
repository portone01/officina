<?php

session_start();
?>
<?php

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
        $_SESSION['codFiscale'] = $cliente->getCodFiscale();
//        die("valore = ". $_SESSION['codFiscale']);
        header("location:areaPersonale.html");
    } else {
        header("location:accesso.php");
    }
}

if ($op == "Registrati") {
    $dao->insertCliente($username, $password, $nome, $cognome, $codFiscale);
    $cliente = $dao->accesso($username, $password);
    $_SESSION['username'] = $username;
    $_SESSION['codFiscale'] = $cliente->getCodFiscale();
    header("location:areaPersonale.html");
}
?>