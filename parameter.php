<?php
// demarrage de la session
session_start();
// charge le g�n�rateur de page.
require ("squelette.php");
// reste � instancier le g�n�rateur de page.
$page=new page();
//lire la/les variables de session identifiant l'utilisateur courant.
if (!isset($_SESSION['login']))
{
    //executer une redirection vers login.php
    header('Location: login_POST.php');
    exit;
}
if(isset($_POST['option']) && $_POST['option'] == 'deconnexion'){
  header("location:login_POST.php");
  session_destroy();
}

if(isset($_POST['option']) && $_POST['option'] == 'suppression'){
  $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017"); // Connexion à la db
  $bulk = new MongoDB\Driver\BulkWrite; // Ecriture, suppression
  $bulk->delete(['u_login' => $_SESSION['login']], ['limit' => 1]);
  $result = $connection->executeBulkWrite('Projet_PHP.PHP', $bulk);
  header("location:login_POST.php");
  session_destroy();
}
// ajouter le corps de page et g�n�rer la page.

  $body = <<< BODY
    <section class="content">
      <div>
				<p> Préférences </p>
      </div>
			<div>
        <form action="#" method="post">
          <fieldset>
              <input type="hidden" name="option" value="deconnexion">
              <input type="submit" name="submit" value="Déconnexion" />
            </fieldset>
        </form>
      </div>
			<div>
        <form action="#" method="post">
          <fieldset>
            <input type="hidden" name="option" value="suppression">
            <input type="submit" name="submit" value="Suppression du compte" />
          </fieldset>
        </form>
      </div>
    </section>
BODY;

$page->add_body($body);
$page->execute();



?>
