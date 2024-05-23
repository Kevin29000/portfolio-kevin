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
	
	$corps="<table border>";
	try {
	$i=0;
    $dbh = new PDO('mysql:host=localhost;dbname=baselafleur2', $user, $pass);
	foreach($_SESSION['reference'] as $ref){ // après le foreach on annonce le tableau ou on cherche en renomment le resultat
		$requete="SELECT pdt_designation, pdt_prix FROM produit WHERE pdt_ref='".$ref."';"; //$ref remplace $_SESSION['reference]
		$result=$dbh->query($requete);
    	foreach($result as $row) {
        	$corps.="<tr><td>".$ref."</td><td>".$_SESSION['quantite'][$i]."</td><td>".$row['pdt_designation']."</td><td>".$row['pdt_prix']."</td></tr>";
   	 	}	
		$i++;
	}
	$corps.='</table>';
	
	
	
    $dbh = null;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	echo $corps;
?>
	<br>
	<form action="envoyer.php" target="" method="get">
	Code client : <input type="text" name="code_client" value="" />
	Mot de passe : <input type="password" name="password_client" value="" /> <br><br>
	<input type="submit" value="Envoyer la commande">
	</form>

</body>
</html>