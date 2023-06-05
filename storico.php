<?php
require_once("dao/ClientiDao.php");

use \dao\ClientiDao;

$cf = $_SESSION['codFiscale'];
$dao = new ClientiDao();
$results = $dao->findStorico($cf);
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
        <table align="center" width="70%">
            <th class="vociStorico">Targa</th>
            <th class="vociStorico">Marca</th>
            <th class="vociStorico">Modello</th>
            <th class="vociStorico">Anno</th>
            <?php
            foreach ($results as $key => $riga) {
                ?>
                <tr align="center">
                    <td nowrap class="voceVeicolo">&nbsp;<?php echo $riga->getTarga(); ?></td>
                    <td nowrap class="voceVeicolo">&nbsp;<?php echo $riga->getMarca(); ?></td>
                    <td nowrap class="voceVeicolo">&nbsp;<?php echo $riga->getModello(); ?></td>
                    <td nowrap class="voceVeicolo">&nbsp;<?php echo $riga->getAnno(); ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
