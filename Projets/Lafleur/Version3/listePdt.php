<html>
<head>
<title>Connexion base</title>
</head>
<body bgcolor="#ffffff">

<?php

	$user="root";
	$pass="";

$corps="<table border>";
	try {
    $dbh = new PDO('mysql:host=localhost;dbname=baselafleur2', $user, $pass);
	$requete="SELECT * FROM produit where pdt_categorie='".$_GET['categ']."';";
	$result=$dbh->prepare($requete);
    $result->execute();
    
    foreach($result as $row) {
       $corps.="<tr><td>".$row['pdt_ref']."</td><td>".$row['pdt_designation']."</td><td>".$row['pdt_prix']."</td><td><img src='../Images/".$row['pdt_image'].".jpg'></td><td>".$row['pdt_categorie']."</td></tr>";
    }
$corps.="</table><br>";	
	
	
	$corps.='<form action="panier.php" target="menu" method="get">';
	$corps.='<select name="refPdt" size="1">';
	$corps.='<option value="">-- Veuillez choisir un article --</option>';
			$requete="SELECT pdt_ref, pdt_designation FROM produit where pdt_categorie='".$_GET['categ']."';";
			$result=$dbh->prepare($requete);
    		$result->execute();

			foreach($result as $row){
				$corps.='<option value="'.$row['pdt_ref'].'">'.$row['pdt_designation'].'</option>';
			}
	$corps.='</select>';
	$corps.='&nbsp&nbsp&nbsp';
	$corps.='Quantité : ';
	$corps.='<input type="text" name="quantite" size="5" value="1" />';
	$corps.='<p><input type="submit" name="action" value="Ajouter au panier" />';
	$corps.='</form>';

    $dbh = null;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
echo $corps;
?>

</body>
</html>