<!doctype html>
<html>
    <head>
        <title>Eco / Droit</title>
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
            <p class="titre">ECO-DROIT</p> <br>
            <h2><u>Methodologie</u> :</h2>
            <b><u>Faits</u> :</b> Contexte du sujet <br>
            <b><u>Problème juridique</u> :</b> Dire ce qui pose problème <br>
            <b><u>Règle de droit</u> :</b> Il faut la chercher dans les annexes et la citer <br>
            <b><u>Application au cas</u> :</b> Expliquer le rapport entre le cas et la règle de droit <br>
            <b><u>Conclusion</u> :</b> Réponse concrète au problème juridique <br> <br>

            <h2><u>Définitions</u> :</h2>
            <b>Agents économique :</b> entreprise / ménage / Etat / banque <br>
            <b>Marché :</b> Environnement dans lequel va évoluer l'entreprise et où se rencontrent <u>l'offre</u> et <u>la demande</u> d'un bien 
            ou d'un service</b> <br>
            <b>Monopole :</b> 1 offreur, beaucoup de demandeurs / <b>Oligopole :</b> Peut d'offreurs, beaucoup de demandeurs <br>
            <b>Concurence pure et parfaite :</b> Nombreux offreurs et demandeurs <br>
            <b>Système d'information :</b> <br>
            <b>Barrière à l'entrée :</b> Désigne le fait que les conditions de marché (dans un secteur) limitent ou rendent impossible l'entrée 
            de nouvelles entreprises (= <u>contraintes</u> / <u> freins</u>) <br>
            <b>Finaltés de l'entreprise</b> : économique, sociale, sociétale, environnementale <br>
            <b>Effet de réseau</b> : <br>
            <b>RSE</b> : Contribution volontaire des entreprises aux enjeux du développement durable, dans leurs activités et dans leurs interactions avec leurs parties prenantes. Elle concerne trois domaines : environnemental, social et sociétal <br>


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