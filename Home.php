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
// ajouter le corps de page et générer la page.

  $body = <<< BODY
    <section class="content">
      <div class="global_content">
        <p>Le fil d\'actualités ici</p>
      </div>
      <div class="lalala" id="Event">
        <p>Event</p>
      </div>
      <div class="lalala" id="groupes">
        <p>groupes</p>
      </div>
      <div class="none" id="chat">
        <p>Amis</p>
      </div>
    </section>
BODY;

$page->add_body($body);
$page->execute();
?>