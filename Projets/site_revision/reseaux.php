<!doctype html>
<html>
    <head>
        <title>Réeaux</title>
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
                <p class="titre">RESEAUX</p>

                <h3><u>Les différentes types</u></h3>
                    <b>LAN</b> : Local Area Network<br>
                    <b>MAN</b> : Metropolitan Area Network<br>
                    <b>WAN</b> : Wide Area Network<br><br><hr color="black"><br>

                <h3><u>Les différentes classes et caractéristiques</u></h3>
                    <b>Classe A</b> :<br>
                    Les plages d'adresse valides en décimal : de <b>1.0.0.1</b> à <b>126.255.255.254</b><br>
                    Les plages d'adresse valides en binaire : commence par <b>0</b><br>
                    1 octet réseau / 3 octets machine (NET ID / HOST ID)<br>
                    Masque : En décimal : <b>255.0.0.0</b>. En binaire : <b>(11111111.00000000.00000000.00000000)</b>. En notation CIDR : <b>/8</b><br><br>

                    <b>Classe B</b> :<br>
                    Les plages d'adresse valides en décimal : de <b>128.0.0.1</b> à <b>191.255.255.254</b><br>
                    Les plages d'adresse valides en binaire : commence par <b>10</b><br>
                    2 octet réseau / 2 octets machine (NET ID / HOST ID)<br>
                    Masque : En décimal : <b>255.255.0.0</b>. En binaire : <b>(11111111.11111111.00000000.00000000)</b>. En notation CIDR : <b>/16</b><br><br>

                    <b>Classe C</b> :<br>
                    Les plages d'adresse valides en décimal : de <b>192.0.0.1</b> à <b>223.255.255.254</b><br>
                    Les plages d'adresse valides en binaire : commence par <b>110</b><br>
                    3 octet réseau / 1 octets machine (NET ID / HOST ID)<br>
                    Masque : En décimal : <b>255.255.255.0</b>. En binaire : <b>(11111111.11111111.11111111.00000000)</b>. En notation CIDR : <b>/24</b><br><br>

                    <b>Adresses réservées aux réseaux privés</b> :<br>
                    <b>10.x.x.x</b> : 1 réseau de classe A<br>
                    <b>172.16.x.x</b> à <b>172.31.x.x</b> : 16 réseaux de classe B<br>
                    <b>192.169.0.x</b> à <b>192.168.255.x</b> : 256 réseaux de classe C<br><br><hr color="black"><br>

                <h3><u>Les sous-réeseaux (subnet)</u></h3>
                    Il faut utiliser les bits de poid fort de la partie HOST-ID. Pour la notation CIDR du masque il faut ajouter le nombre de bits de poid fort de l'HOST-ID utilisé et les ajouter à ceux du masque<br><br>

                    1) Il faut soustraire la partie binaire pour trouver<br>
                    2) Pour trouver l'adresse de BROADCAST il faut mettre les derniers bits de l'octet à 1, les aditionner avec l'adresse du sous-réseau et mettre les bits du dernier octet à 1<br>
                    3) Première @IP = adresse du sous-réseau +1. Dernière @IP = adresse de broadcast -1<br><br>

                    Exemple : @IP : 154.120.75.125  Masque : 255.255.0.0<br>
                    154.120.01001011.01111101<br>
                    255.255.11110000.00000000<br>
                    154.120.    64  .00000000 : Le résultat de l'opération est <b>l'adresse du sous-réseau</b><br>
                    154.120.01001111.11111111 : Adresse de broadcast<br>
                    154.120.    79  .   255   : Adresse de broadcast en décimal<br>

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