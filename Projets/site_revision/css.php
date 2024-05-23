<!doctype html>
<html>
    <head>
        <title>CSS</title>
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
                        src="images/logo_css.png" 
                        alt=""
                        width="106">
                </figure>

                <h2>Les différentes balises :</h2>
                    <b>body {} :</b> pour mettre en forme la page entière <br>
                    #nom : div (à vérifier) <br>
                    <b>.nom_de_la_classe :</b> Déclarer une classe <br><br><hr color="#70726e"><br>

                <h2>background</h2>
                    <b>background-color: black;</b> Couleur unie du fond <br>
                    <b>background-imgae: url(url_de_l'image);</b> Mettre une image en background <br>
                    <b>background-position: center;</b> Centrer l'image <br>
                    <b>background-attachment: fixed;</b> L'image s'adapte à la taille de la page <br>
                    <b>background-size: cover;</b> L'image fait la taille de la page <br><br><hr color="#70726e"><br>

                <h3>Mise en forme</h3>
                    <b>background:rgb(255, 255, 128); :</b> couleur de la page <br>
                    <b>width: 100%; :</b> largeur <br>
                    <b>height: 100%; :</b> hauteur <br>
                    <b>top: 10px; :</b> Définit la position d'un élément positionné par rapport au haut <br>
                    <b>left: 10px; :</b> Définit la position d'un élément positionné par rapport à la gauche <br>
                    <b>right: 10px; :</b> Définit la position d'un élément positionné par rapport à la droite <br>
                    <b>bottom: 10px; :</b> Définit la position d'un élément positionné par rapport au bas <br>
                    <b>user-select: none; :</b> Empêche la selection du texte <br>
                    <b>list-style-type: none;</b> Pour enlever le point pour les balises < li > <br><br><hr color="#70726e"><br>

                <h3>Police d'écriture et texte</h3>
                    <b>color: blue; :</b> couleur de police <br>
                    <b>font-family: 'Poppins', sans serif; :</b>Changer la police d'écriture <br>
                    <b>font-size: 400%; :</b> taille de la police <br>
                    <b>font-weight: bold; :</b> Mettre en gras <br>
                    <b>font-weight: 600; :</b> Gerer le niveau de gras <br>
                    <b>text-align: center; :</b> alignement du texte <br>
                    <b>text-decoration: none; :</b> pour enlever le soulignement du href <br>
                    <b>line-height: 65px; :</b> Définit la hauteur d'une zone de texte <br>
                    <b>letter-spacing: 1px; :</b> Espace entre les lettres <br>
                    <b>list-style: none;</b> ou <b>inside :</b> Définit le style de liste (un . ou un - ou une autre image avant chaque mot de la liste) <br><br><hr color="#70726e"><br>

                <h3>Les bordures</h3>
                    <b>border: 0px; :</b> supprimer les bordures ???? <br>
                    <b>border: none; :</b> Supprimer les bordures <br>
                    <b>border-radius :</b> bords incurvés <br>
                    <b>border-left: 3px solid transparent; :</b> Définit la bordure de gauche, sa largeur et sa couleur <br>
                    <b>border-bottom: 1px solid rgb(255,255,255,0.1); :</b> Définit la bordure du bas, sa largeur et sa couleur <br><br><hr color="#70726e"><br>

                <h3>Les marges</h3>
                    <b>margin: 0</b> ou <b>10px, 20px, 40px, 10px; :</b> Modifier les marges (l'espace autour des données), 0 pour les annuler <br>
                    <b>margin top: :</b> Modifier la marge du haut <br>
                    <b>margin-left: :</b> Modifier la marge de gauche <br>
                    <b>margin-right: :</b> Modifier la marge de droite <br>
                    <b>margin-bottom: :</b> Modifier la marge du bas <br><br><hr color="#70726e"><br>

                <b>display: block; :</b> Definit en zone comme une boîte (=surbrillance des href du menu déroulant du site de révision) <br><br>

                padding <br>
                padding-left <br>
                padding-right <br>
                padding- bottom <br>
                padding-top <br>
                float : left, : pour mettre ue image à gauche et donc le texte à droite par exemple<br><br>

                box-sizing <br>
                position: fixed; <br>

                box-shadow : ??????? <br>
                padding-left : ????? <br>
                height: 200px; : Ajuster la hauteur <br>
                letter-spacing: 1px; : Augmenter l'espace entre les lettres <br>
                hr{border: 3px solid white;} : Ajuster l'épaisseur et la couleur de la ligne <br><br>

                #submit {margin: 20px 90px;} : Déplacer le boutton <br>
                width: 40%; : Largeur du boutton <br> <br>

                <b>nav ul li.active a {color: #FF7F00; background: #1e1e1e; border-left-color: #FF7F00;} :</b> Pour garder le menu clické de la couleur voulue (ici orange) <br>
                <b>nav ul li a:hover {color: #FF7F00; background: #1e1e1e; border-left-color: #FF7F00;} :</b> Surbriallance d'un bouton au passage de la souris <br>
                <b>nav ul li.active ul li a {color: #e6e6e6; background: #1b1b1b; border-left-color: transparent;} :</b> Enlève les paramètres deja mis sur les sous menus, sinon ils restent en orange <br>
                <b>nav ul ul li a:hover {color: #FF7F00!important; background: #1e1e1e!important;} :</b> Surbrillance des sous menu et couleur orange des lettres<br>

                <h3>Surbrillance d'un bouton</h3>
                #submit:hover {<br>
                color: white;<br>
                background-color: #318CE7;<br>
                } : Pour gerer la surbrillance du boutton <br>
                padding: 5px; : Augmenter la taille du boutton <br><br>
                
                input <br>
                outline: none; : Le champs selectionné n'est pas encadré <br>
                border-bottom: 1px solid white; : Epaisseur de la bordure du bas de l'encadré et couleur <br>
                margin-left: 10px; : Gerer l'alignement <br>


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