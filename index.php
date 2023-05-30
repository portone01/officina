<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Officina Alfa</title>
        <link rel="icon" href="immagini/iconaSito.png" type="image/x-icon" />
        <link rel="shortcut icon" href="immagini/iconaSito.png" type="image/x-icon" />
        <link rel="stylesheet" href="stile/style.css">
    </head>

    <body>
        <dialog class="dialog" id="login-dialog">
            <div class="close-dialog" id="close-login-btn">
                <input type="button" class="bottone">
            </div>

            <h1>Accesso</h1>

            <form action="javascript:callFunction('Accedi')">
                <label for="fname">Username:</label>
                <input type="text" id="fname" name="fname"><br><br>
                <label for="lname">Password:</label>
                <input type="text" id="lname" name="lname"><br><br>
                <input type="submit" value="Accedi">
            </form>
        </dialog>

        <div>
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="#home">Home</a></li>
                <li><a class="menu__item" href="#luogo">Dove siamo</a></li>
                <li><a class="menu__item" href="#foto">Fotografie</a></li>
                <li><a class="menu__item" href="#feedback">Recensioni</a></li>
                <li><a class="menu__item" href="#contatti">Contatti</a></li>

            </ul>
            <li class="linea"><a class="navbar" id="login-btn">Accedi</a></li>
            <li class="linea"><a class="navbar" href="registrazione.php">Registrati</a></li>
        </div>

        <section id="home"> 
            <h1>Alfa</h1>
        </section>

        <section id="luogo"></section>
        <section id="foto"></section>
        <section id="feedback"></section>
        <section id="contatti"></section>

        <script src="index.js"></script>
        <script>
            function callFunction(op) {
                if (op === "Accedi") {

                    document.forms[0].operation.value = "Accedi";
                    document.forms[0].action = "OperazioniCliente.php";
                    document.forms[0].submit();

                }
                if (op === "Registrati") {
                    document.forms[0].operation.value = "Registrati";
                    document.forms[0].action = "DettaglioUtente.php";
                    document.forms[0].submit();
                }
            }
        </script>

        <input type="hidden" name="operation" >
    </body>

</html>