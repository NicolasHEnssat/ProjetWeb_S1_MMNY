<!DOCTYPE html>
<html lang="fr" >
	<head>
		<meta charset="utf-8">
		<title>ENSSATBook</title>
		<link rel="stylesheet" type="text/css" href="style-login.css">
	</head>
	<body>
    <section id="img_enssat">
  		<figure  id="enssat">
  			<img src="img_reseau-soc/logo_enssat.jpg" alt="ENSSAT" title="Logo ENSSAT"/>
  		</figure>
      <div id="formulaire1">
    		<form id="form1" action="#" method="post">
    				<label for="id_login"></label>
    				<input type="text" name="login" id="id_login" placeholder="Login" required /><br />
    				<label for="id_pass"></label>
    				<input type="password" name="pass" id="id_pass" placeholder="Mot de passe" required /><br />
    				<input type="submit" name="connexion" value="Connexion" id="Connexion"/>
    		</form>
      </div>
    </section>
    <section id= "inscriptionContent">
      <div id=formulaire2>
    		<form id="form2" action="#" method="post">
    			<!--<fieldset id="fieldset">-->
    				<legend class="titlefont">Inscription</legend>
    				<label for="id_login"></label>
    				<input type="text" name="login" id="id_login" placeholder="Login" required /><br />
    				<label for="id_pass"></label>
    				<input type="password" name="pass" id="id_pass" placeholder="Mot de passe" required /><br />
    				<label for="id_login"></label>
    				<input type="text" name="prenom" id="id_prenom" placeholder="Prénom" required /></br>
    				<label for="id_login"></label>
    				<input type="text" name="nom" id="id_nom" placeholder="Nom" required /><br />
    				<label for="id_login" class="titlefont">Date de naissance :</label><br />
    				<input type="date" name="naissance" id="id_naissance" placeholder="JJ/MM/AAAA" required /><br />
    				<input type="radio" name="genre" value="homme" id="homme"/> <label for="homme" class="textfont">Homme</label>
    				<input type="radio" name="genre" value="femme" id="femme"/> <label for="femme" class="textfont">Femme</label><br />
    				<label for="id_mail"></label>
    				<input type="email" name="mail" id="id_mail" placeholder="@mail" required /><br />
    				<label for="id_pass" class="titlefont">Année : </label>
    				<select name="annee" id="id_annee" required />
    					<option value="annee1">1ère Année</option>
    					<option value="annee2">2ème Année</option>
    					<option value="annee3">3ème Année</option>
    					<option value="diplome">Diplômé</option>
    				</select><br />
    				<label for="id_pass" class="titlefont">Discipline : </label>
    				<select type="text" name="discipline" id="id_discipline" placeholder="Discipline" required />
    					<option value="imr">IMR</option>
    					<option value="informatique">Informatique</option>
    					<option value="electronique">Electronique</option>
    					<option value="photonique">Photonique</option>
    				</select><br />
    				<input type="submit" name="inscription" value="Inscription" />
    		<!--	</fieldset>-->
    		</form>
      </div>
      <figure id="locfigure">
        <img src="img_reseau-soc/Lannion_EnssatSituation.jpg" alt="ENSSAT Situation" title="Map ENSSAT"  id="locenssat"/>
      </figure>
    </section>
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
