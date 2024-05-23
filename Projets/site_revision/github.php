<!doctype html>
<html>
    <head>
        <title>GitHub</title>
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
                    src="" 
                    alt=""
                    width="100">
            </figure>

            <h3><u>Procédure d'envoi</u></h3><br>

                <b>git add .</b> (* pour envoyer tout les fichiers, . pour envoyer les fichiers et le repertoire)<br>
                <b>git commit -m "UnNom"</b> (il faut ajouter une description entre les " ")<br>
                <b>git push origin dev</b> (dev pour envoyer dans dev et main pour envoyer dans le main)<br>
                <b>git push -f</b> (-f pour forcer le push) <br><br>

            <h3><u>Navigation dans les répertoires</u></h3><br>
                
                <b>cd</b> = change directory <br><br>

                <b>cd ClickNClean</b> = pour descendre dans ce fichier <br>
                <b>cd ../</b> = pour remonter dans le repertoire d'avant, ../../ pour remonter 2 fois ... <br><br>

                <b>ls</b> = Pour lister les fichiers présents dans le répertoire <br><br>

            <h3><u>Idées</u></h3><br>
            forked = cloné <br>
            git checkout = pour changer de branche, dev pour aller dans dev main pour main <br>
            client lourd = logiciel <br>
            client leger = web <br>

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