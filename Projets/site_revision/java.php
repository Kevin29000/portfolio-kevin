<!doctype html>
<html>
    <head>
        <title>Java</title>
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
                    src="images/logo_java.png" 
                    alt=""
                    width="100">
            </figure>

            <h3><u>La contrution d'une classe</u></h3><br>
                Les différentes parties d'une classe : <br>
                - Attributs <br>
                - Constructeur(s) <br>
                - Accessurs (getteurs et/ou setters) <br>
                - Autres méthodes <br>
                - methodes toString () <br><br>

                <u>Exemple d'une classe (tp Star Wars)</u> : <br><br>

                <b>package starwars;</b> (C'est le nom du package)<br><br>

                <b>import java.util.ArrayList;</b> (Import généré par Eclipse pour l'ArrayList)<br><br>

                <b>public class Film {</b> (Déclaration des attributs) <br>
                <b>-- String titre; <br>
                -- int annee_de_sortie; <br>
                -- int numero_episode; <br>
                -- int cout; <br>
                -- int recette; <br>
                -- ArrayList< Acteur > listeActeurs; <br>
                }</b> <br><br>

                <b>public Film(String titre, int annee_de_sortie, int numero_episode, int cout, int recette) {</b> (Déclaration des constructeurs) <br>
                <b>-- super(); <br>
                -- this.titre = titre; <br>
                -- this.annee_de_sortie = annee_de_sortie; <br>
                -- this.numero_episode = numero_episode; <br>
                -- this.cout = cout; <br>
                -- this.recette = recette; <br>
                -- this.listeActeurs=new ArrayList< Acteur >(); <br>
                }</b> <br><br>

                <b>public String getTitre() {</b> (Ce sont les getteurs, get c'est pour consulter, ce sont les méthodes) <br>
                -----<b>return this.titre; <br>
                } <br><br>

                public int getAnnee_de_sortie() { <br>
                -----return this.annee_de_sortie; <br>
                } <br><br>

                public int getNumero_episode() { <br>
                    return this.numero_episode; <br>
                } <br><br>

                public int getCout() { <br>
                -----return this.cout; <br>
                } <br><br>

                public int getRecette() { <br>
                -----return this.recette; <br>
                } <br><br>

                public void setRecette(int recette) {</b> (Ce sont les setteurs, set c'est pour modifier la valeur) <br>
                <b>------this.recette = recette; <br>
                } </b><br><br>

                <b>void ajouterActeur(Acteur a) { <br>
                -----this.listeActeurs.add(a); <br>
                } <br><br>

                @Override <br>
                public String toString() {</b> (C'est pour l'affichage quand on appèle le nouvel objet avec un : System.out.println(nomDeL'objet)) <br>
                <b>------return "Film [titre=" + this.titre + ", annee_de_sortie=" + this.annee_de_sortie + ", numero_episode=" + this.numero_episode <br>
                --------------+ ", cout=" + this.cout + ", recette=" + this.recette + "]"; <br>
                }</b><br><br><hr color="black"><br>

            <h3><u>Connexion à la base de données</u></h3><br>
            <br><br><hr color="black"><br>

            <h3><u>Modificateur static</u></h3><br>
            <br><br><hr color="black"><br>

            <h3><u>Classe abstraite</u></h3><br>

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