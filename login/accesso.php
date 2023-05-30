<html>
    <head>
        <meta charset="UTF-8">
        <title>Officina Alfa</title>
        <link rel="icon" href="../immagini/iconaSito.png" type="image/x-icon"/>
        <link rel="shortcut icon" href="../immagini/iconaSito.png" type="image/x-icon"/>
        <link rel="stylesheet" href="../stile/style.css">
    </head>
    <body>

        <h1>The input element</h1>

        <form action="/action_page.php">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <input type="submit" value="Submit">
        </form>

        <p>Click the "Submit" button and the form-data will be sent to a page on the 
            server called "action_page.php".
        </p>
        
        <dialog class="login-dialog">
            
        </dialog>

    </body>
</html>