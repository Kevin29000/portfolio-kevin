<!doctype html>
<html>
    <head>
        <title>PHP</title>
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
                    src="images/logo_php.png" 
                    alt=""
                    width="250">
            </figure>

            <h2>Structure</h2>
                < ?php <br>
                $debut="< !doctype html > <br>
                < html > <br>
                < head > <br>
                < title > < /title > <br>
                < /head > <br>
                < body >"; <br>
                $corps= <br>
                $fin="< /body >< / html >"; <br>
                echo $debut.$corps.$fin; <br><br>

                $corps.= : Coller un $corps à un autre déjà existant <br>
                echo : Renvoie directement au navigateur, il est prioritaire au $corps <br><br><hr color="#70726e"><br>

            <h2>Les différentes balises :</h2>

                <b>$_GET['nom_variable'] :</b> Récupère la variable d'un autre fichier, $_GET les informations sont visibles dans l'URL <br>
                <b>$_POST['nom_variable'] :</b> Récupèrela variable d'un autre fichier, $_POST les informations ne sont pas visible dans l'URL <br><br>

                <b>$SESSION['nom_variable']=$_GET['nom_variable']</b> ou directement une variable sans $_GET <br>
                <b>session_start();</b> : à mettre sous < ?php pour récuperrer les informations dans le fichier <br> <br>

                <h3>Concaténation</h3>
                "Bonjour"."Marcel" = "Bonjour Marcel" <br><br>
                code_postal=29000 <br>
                "Votre code postal est : ".code_postal."à Quimper" = "Votre code postal est : 29000 à Quimper <br><br><hr color="#70726e"><br>

            <h3>Tableaux</h3> <br>
                <b>Création / initialisation d'un tableau :</b> <br>
                $tab=array(12, "fraise", 2.5); <br><br>
                ou <br><br>
                $tab[]=12; <br>
                $tab[]="fraise"; <br>
                $tab[]=2.5; <br><br>
                ou <br><br>
                $tab[0]=12; <br>
                $tab[1]="fraise"; <br>
                $tab[2]=2.5; <br> <br>

                $tab['un']=12; <br>
                $tab["deux"]="fraise"; <br>
                $tab[42]=2.5; <br>
                <b>Les clés ne sont plus 0;1;2;3 ... mais deviennent "un"; "deux"; 42</b><br>


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