<?php
    session_start();
    $i=count($_SESSION["reference"]);
    $_SESSION['reference'][$i]=$_GET['refPdt'];
    $_SESSION['quantite'][$i]=$_GET['quantite'];
    header("Location: menu.php");
?>
