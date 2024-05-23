<?php
$debut="<!doctype html>
<html>
    <head>
        <title>
            identificaton
        </title>
    </head>
    <body>";
    $corps="";
    if (($_POST['reponse_coffre_fort']=="23251181921"))
         {
            header('location:accueil.php?message=Bravo vous avez trouvé la solution !');
         }
    else
        {
            header('location:connexion.php?message=Erreur de connexion');
        }

    if (($_POST['reponse_enigme_carte_1']=="Perse") && ($_POST['reponse_enigme_carte_2']=="Egypte") && ($_POST['reponse_enigme_carte_3']=="Babylone") && ($_POST['reponse_enigme_carte_4']=="Macédoine"))
        {
           header('location:accueil.php?message=Bravo vous avez trouvé la solution !');
        }
    else
       {
           header('location:connexion.php?message=Erreur de connexion');
       }

$fin="</body></html>";
echo $debut.$corps.$fin;