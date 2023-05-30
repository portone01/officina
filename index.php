<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Officina Alfa</title>
    <link rel="icon" href="immagini/iconaSito.png" type="image/x-icon" />
    <link rel="shortcut icon" href="immagini/iconaSito.png" type="image/x-icon" />
    <link rel="stylesheet" href="stile/style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <dialog class="dialog" id="login-dialog">
        <div class="close-dialog" id="close-login-btn">
            <i class="ri-close-line"></i>
        </div>

        <h1>Accesso</h1>

        <form action="/action_page.php">
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
        <li class="linea"><a class="navbar" href="login/registrazione.php">Registrati</a></li>
    </div>

    <section id="home"> 
        <h1>Alfa</h1>
    </section>
    
    <section id="luogo"></section>
    <section id="foto"></section>
    <section id="feedback"></section>
    <section id="contatti"></section>

    <script src="index.js"></script>
</body>

</html>