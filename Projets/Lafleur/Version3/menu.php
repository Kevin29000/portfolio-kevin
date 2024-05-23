<html>
<head>
<title>menu</title>
</head>
<body bgcolor="#ffffff">
<h2>Sté Lafleur</h2>
<p /><a href="logo.php" target="page">Accueil</a>
<p> <a href="mailto:commercial@lafleur.com">Nous écrire</a>
<hr />
<u><b>Nos produits</b></u>
<br><br>
<?php
	session_start();
	if (!isset($_SESSION["reference"]))
	{
			$_SESSION["reference"]=array();
			$_SESSION["quantite"]=array();
	}
	
	$user="root";
	$pass="";
	
	try {
    $dbh = new PDO('mysql:host=localhost;dbname=baselafleur2', $user, $pass);
	$requete="SELECT cat_libelle, cat_code FROM categorie";
	$result=$dbh->query($requete);
    foreach($result as $row) {
       echo "<a href='listePdt.php?categ=".$row['cat_code']."' target='page'>".$row['cat_libelle']."</a><br><br>";
    }	
	
	
	
    $dbh = null;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}


?>

	<form action="panier.php" target="menu" method="get">
	<input type="submit" name="action" value="Vider le panier" />
	</form>

	<form action="commande.php" target="page" method="get">
	<p><input type="submit" value="Commander" />
	</form>
	

</body>
</html>