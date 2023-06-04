<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Officina Alfa</title>
        <link rel="icon" href="immagini/iconaSito.png" type="image/x-icon" />
        <link rel="shortcut icon" href="immagini/iconaSito.png" type="image/x-icon" />
        <link rel="stylesheet" href="stile/style.css">

    </head>
    <script>
        function callFunction(op) {
            if (op == "Accedi") {
                document.forms[0].operation.value = "Accedi";
                document.forms[0].action = "Accesso.php";
                document.forms[0].submit();
            }
            if (op == "Registrati") {
                document.forms[0].operation.value = "Registrati";
                document.forms[0].action = "Registrazione.php";
                document.forms[0].submit();
            }
        }
    </script>
    <script src="index.js"></script>
    <body>
        <form method="POST" action="index.php">
            <!--        <dialog class="dialog" id="login-dialog">
                        <div class="close-dialog" id="close-login-btn">
                            <input type="button" class="bottone">
                        </div>
            
                        <h1>Accesso</h1>
            
                        <form action="/action_page.php">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username"><br><br>
                            <label for="password">Password:</label>
                            <input type="text" id="password" name="password"><br><br>
                            <input type="submit" value="Accedi">
                        </form>
                    </dialog>-->
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
                </ul>
                <!--<li class="linea"><a class="navbar" id="login-btn">Accedi</a></li>-->
                <li class="linea"><a class="navbar" href="accesso.php">Accedi</a></li>
                <li class="linea"><a class="navbar" href="registrazione.php">Registrati</a></li>
            </div>

            <section id="home"> 
                <img class="titolo" src="Immagini/tit_sfu.png" alt="titolo">
            </section>

            <section id="foto">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="immagini/1.png" >
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="immagini/2.png" >
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="immagini/3.png" >
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <section style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </section>
                <script>
                    let slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                    }
                </script>
            </section>
            <section id="luogo" >
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2876.8785378801394!2d10.954671976682478!3d43.858346139137744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a6016846cec8d%3A0xb4324ca8ecc51059!2sPunto%20Gomme%20Quarrata%20Di%20Bottaccio%20Gerardo!5e0!3m2!1sit!2sit!4v1685715488714!5m2!1sit!2sit" allowfullscreen=""></iframe>
            </section>
            <section id="feedback">
                <section class="grid-container">
                    <article class="client">
                        <h3 class="client_name">Giovanni Rossi</h3>
                        <span class="feedback">L'officina è stata una scoperta fantastica! Il personale è competente e disponibile, mi hanno spiegato tutto nel dettaglio. 
                            Hanno risolto il problema del mio veicolo in modo rapido ed efficiente. Prezzi onesti e trasparenza totale. Tornerò sicuramente e lo consiglio a tutti i proprietari di auto!</span>
                    </article>
                    <article class="client">
                        <h3 class="client_name">Gabriele Maza</h3>
                        <span class="feedback">Ho avuto un'esperienza eccellente presso questa autoofficina. Hanno mostrato grande professionalità nel gestire il mio veicolo. Il personale è cordiale e cortese, mi hanno tenuto aggiornato durante tutto il processo di riparazione. Il risultato finale è stato oltre le mie aspettative. Sicuramente la mia officina di fiducia da ora in poi.</span>
                    </article>
                    <article class="client">
                        <h3 class="client_name">Alessia Stella</h3>
                        <span class="feedback">Non potevo chiedere di più da un'autoofficina. Hanno risolto il problema del mio veicolo in modo rapido e preciso. I prezzi sono competitivi e il servizio è di alta qualità. Il personale è amichevole e disponibile. Consiglio vivamente questa officina a tutti coloro che cercano un servizio affidabile.</span>
                    </article>  
                    <article class="client">
                        <h3 class="client_name">Miriam Conti</h3>
                        <span class="feedback">Efficienti e puntuali, hanno fatto un lavoro eccellente sul mio veicolo.</span>
                    </article>
                    <article class="client">
                        <h3 class="client_name">Alejandro Domez</h3>
                        <span class="feedback">Questa officina ha superato tutte le mie aspettative. Hanno dimostrato competenza e professionalità nel gestire la riparazione del mio veicolo. Il personale è cortese e pronto a rispondere a tutte le domande. Il servizio è efficiente e il prezzo è giusto. Non potrei essere più soddisfatto del risultato.</span>
                    </article>
                    <article class="client">
                        <h3 class="client_name">Gabriel Moretti</h3>
                        <span class="feedback">Servizio veloce e affidabile, l'auto è tornata come nuova!</span>
                    </article>
                    <article class="client">
                        <h3 class="client_name">Silvia Nunziata</h3>
                        <span class="feedback">Questa autoofficina ha dimostrato di avere un'ottima conoscenza e esperienza nel settore. Hanno affrontato il problema del mio veicolo con professionalità e mi hanno tenuto costantemente informato. Il personale è gentile e disponibile. I prezzi sono ragionevoli e il servizio è di alta qualità. Li scelgo sempre per le mie esigenze automobilistiche.</span>
                    </article>
                    <article class="client">
                        <h3 class="client_name">Piero Piani</h3>
                        <span class="feedback">Questa autoofficina è stata una piacevole sorpresa. Hanno eseguito la riparazione del mio veicolo in modo impeccabile. Il personale è competente e ha dimostrato grande professionalità. Il servizio è veloce ed efficiente, e i prezzi sono molto convenienti. Consiglio vivamente questa officina a tutti i proprietari di auto che cercano una soluzione affidabile.</span>
                    </article>
                </section>
            </section>
        </form>
    </body>
    <footer class="footer" id="contacts">
        <div class="footer_container container grid">
            <div>
                <a href="#" class="logo">
                    <img src="immagini/titolo.png" width="250px" alt="Alfa">
                </a>
                <p class="footer_text">
                    La tua officina di fiducia
                </p>
            </div>
            <div class="footer_content" data-sr-id="8" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;">
                <div>
                    <h3 class="footer_title">
                        Contattaci
                    </h3>
                    <ul class="footer_list">
                        <a href="mailto:officinaalfa.info@gmail.com" target="_blank" class="footer_link">
                            <input type="button" class="email">
                        </a>
                        <a href="tel:+0573775977">
                            <input type="button" class="phone">
                        </a>

                    </ul>
                </div>
            </div>

        </div>
        <span class="footer_bottom">
        </span>
    </footer>
</html>
