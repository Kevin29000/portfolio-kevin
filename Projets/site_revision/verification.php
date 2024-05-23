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
    if (($_POST['login']=="admin") && ($_POST['password']=="adminazed"))
         {
            header('location:accueil.php');
         }
    else
        {
            header('location:connexion.php?message=Erreur de connexion');
        }

$fin="</body></html>";
echo $debut.$corps.$fin;