<!doctype html>
<html>
    <head>
        <title>Boucles</title>
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

            <p class="titre">Les boucles</p> <br>

            <h3>Boucle IF (= Si ... Alors ... Sinon ...)</h3>
                if (condition) <br>
                { <br>
                instruction; <br>
                } <br>
                else (le else n'est pas obligatoire) <br>
                { <br>
                instruction; <br>
                } <br> <br>
        
            <h3>Boucle WHILE (= Tant que ... faire ...)</h3> <br>
                while (condition) <br>
                { <br>
                instruction; <br>
                } <br><br>

                do <br>
                { <br>
                instruction; <br>
                } <br>
                while (condition) (deuxième boucle) <br><br>
            
            <h3>Boucle FOR</h3> <br>
                for (instruction; condition; instruction) <br>
                { <br>
                instruction <br>
                } <br><br>

            <h3>Boucle SWITCH</h3> <br>
                switch (val) <br>
                { <br>
                case 1: <br>
                case 2: <br>
                case 3: <br>
                case 4: <br>
                default: instruction dans tout les cas <br>
                } <br>
                <b>Ajouter un break pour sortir de la boucle quand une condition est vraies</b> <br><br>

            <h3>Boucle FOREACH (tableaux ?)</h3> <br>
                foreach ($tableau as $element) <br>
                { <br>
                    /* Bloc d’instructions répété pour <br>
                    chaque élément de $tableau */ <br>
                    /* Chaque élément de $tableau est <br>
                    accessible grâce à $element */ <br>
                }<br><br><hr color=black><br>

            <h3>Les opérateurs de comparaison</h3>
            <b>== :</b> Egalité <br>
            <b>=== :</b> Identiques (valeurs et type) <br>
            <b>!= :</b> Différence <br>
            <b>!= :</b> Différence (valeurs et type) <br>
            <b>> :</b> Supérieur <br>
            <b>>= :</b> Supérieur ou égal <br>
            <b>< :</b> Inférieur <br>
            <b><= :</b> Inférieur ou égal <br> <br>

            <h3>Les opérateurs logiques</h3>
            val1 <b>and</b> val2 : Si les deux sont vraies <br>
            val1 <b>&&</b> val2 : Si les deux sont vraies <br>
            val1 <b>or</b> val2 : Si l'un ou l'autre est vraies <br>
            val1 <b>||</b> val2 : Si l'un ou l'autre est vraies <br>
            val1 <b>xor</b> val2 : Si l'un ou l'autre est vraies mais pas les deux <br>
            val1 <b>!</b> val2 : Si l'un ou l'autre est vraies mais pas les deux <br> <br>
            
            <h3>Balises pour des formules mathématiques</h3>
            <b>% :</b> modulo

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