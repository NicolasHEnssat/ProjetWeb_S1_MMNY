<?php
// demarrage de la session
session_start();
// charge le g�n�rateur de page.
require ("squelette.php");
// reste � instancier le g�n�rateur de page.
$page=new page();
//lire la/les variables de session identifiant l'utilisateur courant.
/*if (!isset($_SESSION['pseudo']))
{
    //executer une redirection vers login.php
    header('Location: login.php');
    exit;
}*/
// ajouter le corps de page et g�n�rer la page.

function content()
{
  echo '
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
    ';
  }

$body = content();

$page->add_body($body);
$page->execute();
?>
