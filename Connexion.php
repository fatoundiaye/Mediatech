<?php

session_start();

if (isset ($_POST['envoyer'])) 
{
	$email=$_POST['email'];
	$pass=$_POST['pass']; 

	//if (email && pass) 
		//$pass=$pass;
	
		$connect=mysqli_connect("localhost","fatou", "fatou","espaceclient");

		$requete="SELECT * FROM utilisateur WHERE email='$email' and pass='$pass'";

			$result=mysqli_query($connect, $requete) or die (mysqli_error($connect));

		if (mysqli_num_rows ($result)==1)  

			{
				header("location:Vidéosyoutube.php"); 
    			
    		}else echo "veuillez vous inscrire";
            
} 


?>


<!DOCTYPE html>
<html>
<head>
	<title> Se connecter</title>
</head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	
	<nav>
	<ul>
		<li><a href="Accueil.php">Accueil</a></li>
		<li><a href="Connexion.php">Se connecter</a></li>
		<li><a href="Inscription.php">Inscription</a></li>
		<li><a href="Vidéosyoutube.php">Vidéos youtube</a></li>
		
	</ul>
	</nav>
	
	<form method="POST" action="Vidéosyoutube.php">
	<h1>Déjà inscrit sur votre site </h1> <br/>

	<label for="email">Email:</label>
	<input type="text" name="email" required>
	<br/>

	<label for="pass">Mot de passe:</label>
	<input type="password" name="pass" id="pass" required>
	<br/>

	<input type="submit" name="envoyer" value="envoyer"/><a href="Videosyoutube.php"></a>

	<h3><a href="Inscription.php">Veuillez vous inscrire si vous ne disposez pas encore de compte</a></h3>

</form>
</body>
</html>