<!doctype html>
<html>
    <head>
        <title>Base de données</title>
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
            <p class="titre">BASE DE DONNEES</p> <br>

            <h2><u>Construction d'une BDD</u> :</h2> <br>

                <b>Les étapes pour construire une base de données :</b> <br>
                1) Faire un <b>Dico de données</b> sous forme de tableau, avec pour colonnes <b>nom / description / type / entité</b> <br>
                2) Faire un <b>MCD</b> (Modèle Conceptuel de Données) aussi appelé <b>MEA</b> (Modèle Entité Association), il faut représenter les 
                entités sous formes de cartouches, avec à l'intérieur <b>l'attribut</b> (identifiant du cartouche), <b>le nom des colonnes</b>, 
                <b>les cardinalités</b> (nombre de ralations min,max entre les entités) et un verbe pour caracteriser la relation entre les entités <br>
                3) Faire un <b>MLD</b> (Modèle Logique de Données), le MLD est sous forme de cartouches, avec le verbe de relation et les cardinalité (MCD aligné pas en cercle) <br>
                <b>MLD</b> sous forme de <b>SRD</b> : <br>
                COMPTABLE (id_compt, nom_compt, prénom_compt, dateN, num_post, <b>id_agence</b>) <br>
                Clé primaire : id_compt Clé étrangère : <b>id_agence</b> <br>
                Pour une relation n,n il faut faire une table avec pour clés primaires les clés des deux tables. <br><br><hr color="black"><br>

            <h2><u>Requêtes SQL</u> :</h2> <br>

                <b><u>Ordre des requêtes</b></u> : <br>
                    SELECT <br>
                    FROM <br>
                    WHERE <br>
                    GROUP BY <br>
                    HAVING <br>
                    ORDER BY <br>
                    LIMIT <br><br>

                <b><u>Les options par requête</u></b> : <br><br>

                    <b>SELECT</b> : * pour tout selectionner, sinon saisir le nom des colonnes souhaitées <br>
                    <b>SELECT DISTINCT</b> : Pour enlever les doublons <br>
                    <b>SELECT .... AS "...."</b> : Pour selectionner une colonne et lui attribuer un alias en même temps, le AS ne doit pas être obligatoirement écrit <br> 
                    <b>SELECT CONCAT(col1, " ", col2) nouveau_nom</b> : CONCAT pour regrouper plusieurs colonnes en une, " " pour avoir un espace entre les resultats, nouveau_nom attribue un nouveau nom, pas besoin du AS<br>
                    <b>SELECT COUNT(id_employe)</b> : Pour compter <br><br>

                    <b>WHERE service=marketing</b> : C'est la condition dans la requête, ici que les resultats avec le service marketing<br>
                    <b>WHERE salaire_employe*12>35000</b> : Fait le calcul et sort les résultats supérieurs à 35 000 <br>
                    <b>WHERE salaire_employe IN (1720;4500)</b> :  Sort uniquement les resultats qui ont le salaire à 1720 et 4500 <br>
                    <b>WHERE salaire_employe BETWEEN</b> val1 <b>AND</b> val2 : Sort les résultats entre les valeurs. <br>
                    <b>WHERE nom_colonne BETWEEN</b> 'date1' <b>AND</b> 'date2' : Pour des dates il faut l'écrire avec '', donc 'date1'; 'date2' <br>
                    <b>WHERE nom_colonne BETWEEN</b> 'A' <b>AND</b> 'L' : Pour chercher par initial <br> <br>

                    <b>GROUP BY</b>: <br><br>
                    
                    <b>HAVING</b> : <br><br>

                    <b>ORDER BY</b> salaire_employe <b>ASC</b>; : Pour classes les résultats, ici par salaire. ASC est optionnel car par défaut (=ascendant) <br><br>

                    <b>LIMIT 3;</b> : Donne seulement les 3 premiers résultats <br>
                    <b>LIMIT 3,2;</b> : Donne les resultats 4 et 5 (3 = après le 3eme donc le 4eme et 2 = les 2 suivants) <br><br>

                <b><u>Requêtes imbriquées</u></b> :<br>
                    <b>SELECT</b> nom_employe, prenom_employe, salaire_employe <br>
                    <b>FROM</b> employe <br>
                    <b>WHERE</b> salaire_employe > (<b>SELECT AVG</b>(salaire_employe) <b>FROM</b> employe); <br><br><hr color="black"><br>

                <h2><u>Les jointures</u> :</h2> <br>

                    <b>SELECT</b> nom_employe, prenom_employe, nom_service <br>
                    <b>FROM</b> employe <br>
                    <b>JOIN</b> service <br>
                    <b>ON</b> employe.id_service=service.id_service; <br>
                    ou <br>
                    <b>USING</b> (id_service); <br>
                    : Pour réaliser une jointure entre deux tables, ne ressort que les éléments qui sont en relation, ne sort donc pas les éléments NULL <br>
                    ou <br>
                    <b>NATURAL</b> (?????) : <br><br>
                    <b>LEFT JOIN</b> : Prend les éléments en commun des 2 tables et tout ceux de l'autre table (gauche donc ici employe) qui peuvent être NULL <br>
                    <b>RIGHT JOIN</b> : Prend les éléments en commun des 2 tables et tout ceux de l'autre table (gauche donc ici employe) qui peuvent être NULL <br>
                    Les LEFT & RIGHT JOIN sont cumulables autant de fois qu'il y a de tables, ne pas oublier le ON ou USING ou NATURAL <br>

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