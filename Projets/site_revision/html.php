<!doctype html>
<html>
    <head>
        <title>HTML</title>
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
                        src="images/logo_html.png" 
                        alt=""
                        width="150">
                </figure>
                <h2>Les différentes balises :</h2>
                    <h3>Forme du fichier</h3>
                        < !doctype html > : type du fichier<br>
                        < head > < /head > : onglet de la page<br>
                        < title > < /title > : nom de l'onglet<br>
                        < body > < /body > : corps de la page<br><br>

                    <h3>Frameset</h3>
                        < frameset cols="15%,*" > : découper la page en deux dont une qui fait 15 %, l'autre 85 %<br>
                            < frame name=" " src="nom du fichier" > : nom de la page, fichier cible<br>
                            < frame name=" " src="nom du fichier" > : nom de la page, fichier cible<br>
                        < /frameset ><br><br>

                    <h3>Section</h3>
                        < section class="container"> : sur CSS -> display: flex; <br>
                        ----< section class="col1"> : sur CSS -> width: 19% <br>
                        ----< /section > <br>
                        ----< section class="col2"> : sur CSS -> width: 81% <br>
                        ----< /section > <br>
                        < /section > <br><br>

                    <h3>Tableaux</h3>
                        < table ><br>
                        < tr > < td > < /td > < /tr ><br>
                        < tr > < td > < /td > < /tr ><br>
                        < tr > < td > < /td > < /tr ><br>
                        < /table ><br><br>

                    <h3>Formulaires</h3>
                        < form name=" " action="nom_du_fichier_cible" method="GET/POST" ><br>
                        < /form > : fin de formulaire<br><br>

                    <h3>Les liens</h3>
                        < a href=""chemin_du_fchier" >Lien< /a > <br>
                        < a href=""chemin_du_fchier" target="_blank">Lien< /a > : le target est pour ouvrir le lien dans une nouvelle fenêtre<br>
                        < a href=""chemin_du_fchier" download="" class="pour_changer_l'apparence" >Download< /a > : Boutton de téléchargemnt <br><br>

                    <h3>Images</h3>
                        < img src="image1.jfif" alt="" width="650" > : src=nom de l'image, ajouter / et nom du dossier si l'image et le fichier ne sont pas dans le même dossier. Width pour la taille de l'image<br>

                    <h3>input</h3>
                        < input type=" " name=" " > : texte : zone de texte, mot de passe : maxlength=" ", radio : rond à cocher, checkbox : case à cocher, reset, submit, file<br>
                        <input type="text" name=""><br>
                        <input type="password" name=""><br>
                        <input type="radio" name=""><br>
                        <input type="checkbox" name=""><br>
                        <input type="reset" name=""><br>
                        <input type="submit" name=""><br>
                        <input type="file" name=""><br><br>

                    <h3>select</h3>
                        < select name="langages" id="langages" > : Nom et identifiant du select<br>
                        < option value=" "> nom de l'option < /option > : Nom de l'option<br>
                        < /select ><br>
                        <select name="langages" id="langages">
                            <option value="">-- Veuillez choisir une option --</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                        </select><br><br>

                    <h3>Autres balises</h3>
                        < center > < /center > : Centre tout ce qui ce trouve à l'intérieur <br>
                        < h1 > < /h1 > : <br>
                        < h2 > < /h2 > : <br>
                        < h3 > < /h3 > : <br>
                        < br > : saut de ligne<br>
                        < hr > : ligne horizontale<br>
                        < div > < /div > : zone de texte dans le body<br>
                        < p > < /p > : paragraphe<br>
                        < b > < /b > : gras<br>
                        < u > < /u > : souligner<br>
                        < li > < /li > : liste<br>
                        < ul > < /ul > : ??????? <br>
                        < nav > < /nav > : ?????? <br>
                        < header > < header > : ?????? <br>
                        < strong > < /strong > : ?????<br>
                        < figure > < /figure > : ?????<br>
                        < fieldset style="width:25%;"> < /fieldset > : ????? style pas obligatoire, c'est pour changer la taille<br>
                        < a href=" " target=" " > : Lien vers un autre fichier<br>
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