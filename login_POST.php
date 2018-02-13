<!DOCTYPE html>
<html lang="fr" >
	<head>
		<meta charset="utf-8">
		<title>ENSSATBook</title>
		<link rel="stylesheet" type="text/css" href="stylelogin.css">
	</head>
	<body>
		<figure id="enssat">
			<img src="img_reseau-soc/enssat.png" alt="ENSSAT" title="Logo ENSSAT"/>
		</figure>
		<form id="form1" action="#" method="post">
			<fieldset>
				<legend>Connexion</legend>
				<label for="id_login"></label>
				<input type="text" name="login" id="id_login" placeholder="Login" required /><br />
				<label for="id_pass"></label>
				<input type="password" name="pass" id="id_pass" placeholder="Mot de passe" required /><br />
				<input type="submit" name="connexion" value="Connexion" />
			</fieldset>
		</form>
		<form id="form2" action="#" method="post">
			<fieldset>
				<legend>Inscription</legend>
				<label for="id_login"></label>
				<input type="text" name="login" id="id_login" placeholder="Login" required /><br />
				<label for="id_pass"></label>
				<input type="password" name="pass" id="id_pass" placeholder="Mot de passe" required /><br />
				<label for="id_login"></label>
				<input type="text" name="prenom" id="id_prenom" placeholder="Prénom" required />
				<label for="id_login"></label>
				<input type="text" name="nom" id="id_nom" placeholder="Nom" required /><br />
				<label for="id_login">Date de naissance :</label><br />
				<input type="date" name="naissance" id="id_naissance" placeholder="JJ/MM/AAAA" required /><br />
				<input type="radio" name="genre" value="homme" id="homme" /> <label for="homme">Homme</label>
				<input type="radio" name="genre" value="femme" id="femme" /> <label for="femme">Femme</label>
				<input type="radio" name="genre" value="apache" id="apache" /> <label for="apache">Apache Hélicoptère</label><br />
				<label for="id_mail"></label>
				<input type="email" name="mail" id="id_mail" placeholder="@mail" required /><br />
				<label for="id_pass">Année : </label>
				<select name="annee" id="id_annee" required />
					<option value="annee1">1ère Année</option>
					<option value="annee2">2ème Année</option>
					<option value="annee3">3ème Année</option>
					<option value="diplome">Diplômé</option>
				</select><br />
				<label for="id_pass">Discipline : </label>
				<select type="text" name="discipline" id="id_discipline" placeholder="Discipline" required />
					<option value="imr">IMR</option>
					<option value="informatique">Informatique</option>
					<option value="electronique">Electronique</option>
					<option value="photonique">Photonique</option>
				</select><br />
				<input type="submit" name="inscription" value="Inscription" />
			</fieldset>
		</form>
	</body>
</html>

<?php
if(isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion'){
	if(!empty($_POST) && isset($_POST["login"]) && isset($_POST["pass"]) && ($_POST["login"]!="") && ($_POST["pass"]!="")){
		//$connection = new MongoDB\Driver\Manager("mongodb://192.168.43.89:27017");
		$filter = ['u_login' => $_POST['login']];
		//Tester en "dur" si le compte utilisateur peut se connecter
		if ($_POST["login"]=="Ahri" && $_POST["pass"]=="dabisou"){
			//identification OK
			session_start();
			$_SESSION['login'] = $_POST['login'];
			header("location:Home.php");
		}
		else{
			header("location:login_POST.php");
			/*?>
			<p><a href="javascript:history.back()">Retour vers le futur</a></p>
			<?php*/
		}
	}
}
?>
