<?php
session_start();
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
    <script>
        function ricerca() {
            document.forms[0].action = "OperazioniCliente.php";
            document.forms[0].submit();
        }
    </script>
    <body style="text-align: center">
        <form>
            <h1 style="font-family: 'Roboto', sans-serif; color: #fdd800">Cerca qui la targa della macchina</h1>
            <input type="text" id="barraRic" name="barraRic" placeholder="Inserisci la targa" style="align:center" required/>
            <input type="submit" value="cerca" onclick="javascript:ricerca()">
            <input type="hidden" name="operation" value="Ricerca">
        </form>
        <section>
            <h1 class="vociStorico">
                <?php
                if ($_SESSION['inizio'] == null) {
                    echo("Stato: ");
                    $_SESSION['inizio'] = 1;
                } else {
                    echo("Stato: " . $_SESSION['stato']);
                }
                ?>
            </h1>
        </section>
    </body>
</html>
