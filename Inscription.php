<?php
if(isset($_POST['inscrire']))
{
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$pseudo = $_POST['pseudo'];
	$pass = $_POST['pass'];
	$confirmpass = $_POST['confirmpass'];
	$email = $_POST['email'];
	extract($_POST);
	
	//if ($prenom&&$nom&&$pseudo&&$pass&&$confirmpass&&$email)
	//{
		  if($pass == $confirmpass)
		   {
			$connect=mysqli_connect("localhost","fatou", "fatou","espaceclient");

			$requete = "INSERT INTO utilisateur VALUES (NULL,'$prenom', '$nom', '$pseudo', '$pass', '$confirmpass', '$email')";

			$querry=mysqli_query($connect,$requete);
			
		   
			header('location:Connexion.php');
					
	        } else echo "Les deux mots de passe doivent etre identiques"; 			

	//}
	//else echo "Veuillez saisir tous les champs"; 
}
?>

<!DOCTYPE html>

<html>
<head>
	<title>INSCRIPTION</title>
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
	
	<div class="Inscription"> 
		<form method="POST" action="">

			
				<p for="prénom">Prénom: </p>
				<input type="text" name="prenom" id="prenom" required  placeholder="prénom" />
				<br/>

				<p for="nom">Nom: </p>
				<input type="text" name="nom" id="nom" required placeholder="nom" />
				<br/>

				<p for="pseudo">Votre pseudo:</p>
				<input type="text" name="pseudo" id="pseudo" required placeholder="pseudo" />
				<br/>

				<p for="pass">Votre mot de passe:</p>
				<input type="password" name="pass" id="pass" required placeholder="mot de passe" />
				<br/>

				<p for="pass">Confirmer votre mot de passe:</p>
				<input type="password" name="confirmpass" id="confirmpass" required placeholder="confirmer votre mot de passe" />
				<br/>

				<p for="email">Votre email:</p>
				<input type="email" name="email"  id="email" required placeholder="email" />
				<br/>

				<input type="submit" name="inscrire" value="s'inscrire">
			
		</form>	
	</div>
</body>
</html>