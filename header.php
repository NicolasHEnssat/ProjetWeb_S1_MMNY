<!DOCTYPE html>

<?php

if(!empty($_POST["email"]) && !empty($_POST["pass"])){
	if($_POST["email"]== "yrhoulam@enssat.fr" && $_POST["pass"] == "Younes"){
		header("location: profil.php");
	}
	else{
		header("location: index.php");
	}
}



?>
<html>
	<head>
		<meta charset="utf-8" lang="fr" />
		<title>Réseau Social</title>
		<link rel="stylesheet" href="styles/style.css" />
	</head>
	
	
<body>
	<div class="container">
		<div id="header_wrapper">
			<div id="header">
				<img id="image" src="images\logo_enssat.jpg" style="float:left;" />
				<form method="post" action="" id="form1">
					<strong>Email:</strong>
					<input type="email" name="email" placeholder="Email" required="required" />
					<strong>Password:</strong>
					<input type="password" name="pass" placeholder="*****" required="required" />
					<button name="login"> Login </button>
				</form>
			</div>
		</div>
	</div>
