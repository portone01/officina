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
        }</script>
    <body style="text-align: center">
        <form>
            <h1 style="font-family: 'Roboto', sans-serif; color: #fdd800">Cerca qui la targa della macchina</h1>
            <input type="text" id="barraRic" placeholder="Inserisci la targa" style="align:center"/>
            <button onclick="javascript:ricerca()">Cerca</button>
            <?php
//                $query = $_GET['query'];
//
//                $result = "Hai cercato la targa: " . $query;
//
//                echo $result;
            ?>
            <input type="hidden" name="operation" value="Ricerca">
        </form>
    </body>
</html>
