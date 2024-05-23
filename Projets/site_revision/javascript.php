<!doctype html>
<html>
    <head>
        <title>JavaScript</title>
        <link rel="stylesheet" href="mise_en_page.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        <section class="container">
        <section class="col1">
        <nav class="sidebar">
            <div class="text">Cours</div>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="#" class="dev-btn">Dev
                        <span class="fa-solid fa-caret-down first"></span>
                    </a>
                    <ul class="dev-show">
                        <li><a href="html.php">HTML</a></li>
                        <li><a href="css.php">CSS</a></li>
                        <li><a href="php.php">PHP</a></li>
                        <li><a href="javascript.php">JavaScript</a></li>
                        <li><a href="java.php">Java</a></li>
                        <li><a href="github.php">GitHub</a></li>
                    </ul>
                </li>
                <li><a href="#" class="algo-btn">Algorithme
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="algo-show">
                        <li><a href="boucles.php">Boucles</a></li>
                        <li><a href="c_c++.php">C / C++</a></li>
                        <li><a href="python.php">Python</a></li>
                    </ul>
                </li>
                <li><a href="#" class="prod-btn">Productions
                        <span class="fas fa-caret-down second"></span>
                    </a>
                    <ul class="prod-show">
                        <li><a href="blackjack/blackjack.html">Blackjack</a></li>
                        <li><a href="jeu_du_+_ou_du_-/jeu.html">Jeu du + ou du -</a></li>
                    </ul>
                </li>
                <li><a href="bdd.php">Base de données</a></li>
                <li><a href="reseaux.php">Réseaux</a></li>
                <li><a href="eco-droit.php">Eco - Droit</a></li>
                <li><a href="connexion.php">Se déconnecter</a></li>
            </ul>
        </nav>
        </section>

        <section class="col2">
            <figure>
                <img
                    src="images/logo_javascript.png" 
                    alt=""
                    width="150">
            </figure>
            <h2>Les différentes balises :</h2>
                <b>< script type="text/javascript" language="JavaScript" > < /script ></b> : Déclarer un script JavaScript <br>
                <b>< !-- script // -- ></b> : Pour masquer le script aux navigateurs non compatible avec JavaScript, il faut le mettre idéalement dans le 
                head pour etre sur de le prendre <br> <br>

                <b>docment.write("Salut !");</b> : Pour écrire une chaine de chaine de caractère <br>
                <b>document.writeln("Salut !");</b> : Pour écrire une chaine de caractère avec retour à la ligne <br> <br>

                <b>//</b> : Commenter 1 ligne <br> 
                <b>/* un commentaire */</b> : Commenter les lignes comprises entre les deux balises <br> <br>

                <b>.alert(quelquechose);</b> : Affiche directement une alerte <br>
                <b>.confirm(un_message_de_confirmation);</b> : Affiche une fenêtre avec un message de confirmation <br>
                <b>.prompt(message, valeur_par_defaut)</b> : Ouvre une boîte de saisie, retourne l'information saisie<br><br>

                <b>random()</b> : Permet de generer un nombre aléatoire, saisir dans les parenthèses les deux extremitées <br>
                <b>let nombre=Math.floor(Math.random()*1000);</b> : Attribuer un nombre aléatoire à la variable nombre. Maths.floor transforme le float (par defaut) en int <br> <br>

                <b>document.getElementById("joueur").innerHTML="chaine_de_caractère_HTML";</b> : getElementById fait référence à un id d'une div pour 
                afficher à l'intérieur. innerHTML annonce une chaine de caratère HTML. Ajouter + avant le = pour ajouter au lieu d'écraser <br><br>

                <b>location.reload();</b> : Permet de reinitialiser la page via un bouton onclick. Il doit être à l'intérieur d'une fonction <br><br><hr color="black"><br>

            <h3>Concaténation</h3> <br><br><hr color="black"><br>
            
            <h3>Variables</h3>
                var nom_de_la_variable : pour créer une variable <br><br><hr color="black"><br>

            <h3>Boucles</h3>
                Boucles <b>WHILE</b> et boucles <b>FOR</b> <br><br><hr color="black"><br>

            <h3>Tableaux</h3>

        </section>
        </section>

        <script>
            $('.dev-btn').click(function(){
                $('nav ul .dev-show').toggleClass("show");
                $('nav ul .first').toggleClass("rotate");
            });
            $('.algo-btn').click(function(){
                $('nav ul .algo-show').toggleClass("show1");
                $('nav ul .second').toggleClass("rotate");
            });
            $('.prod-btn').click(function(){
                $('nav ul .prod-show').toggleClass("show2");
                $('nav ul .third').toggleClass("rotate");
            });
            $('nav ul li').click(function(){
                $(this).addClass("active").siblings().removeClass("active"); // DERNIERE CHOSE MODIFIER VIDEO -> 12.03
            });
        </script>

    </body>
</html>