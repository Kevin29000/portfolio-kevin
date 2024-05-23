<?php
session_start();
?>
<html>
<head>
<title>Commande</title>
</head>
<body bgcolor="#ffffff">

<?php
	$user="root";
	$pass="";
	

	try {
		$dbh = new PDO('mysql:host=localhost;dbname=baselafleur2', $user, $pass);
		$requete="SELECT clt_nom FROM clientconnu where clt_code='".$_GET['code_client']."' and clt_motPasse='".$_GET['password_client']."';";
		$result=$dbh->prepare($requete);
		$result->execute();
		
		$time=time();
		$date=date("Y-m-d");
		foreach($result as $row) {
		   	$requete="INSERT INTO commande (cde_moment, cde_client, cde_date) VALUES ('".$time."', '".$_GET['code_client']."', '".$date."');"; //Pour créer des infos dans la bdd
		  	$stmp=$dbh->prepare($requete);
			$stmp->execute();
		}

		$count=count($_SESSION['reference']);
		for ($i=0; $i<$count; $i++) {
			$requete="INSERT INTO contenir (cde_moment, cde_client, produit, quantite) VALUES ('".$time."', '".$_GET['code_client']."', '".$_SESSION['reference'][$i]."', '".$_SESSION['quantite'][$i]."');";
		}
	
	
    $dbh = null;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	
?>

</body>
</html>