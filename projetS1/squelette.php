<?php
class page
{
  protected $page;

  public function __construct()
  {
  }

  public function add_body($body)
  {
      if (is_scalar($body)) {
          $this->page['body'][] = $body;
          return true;
      }
      return false;
  }

  public function execute()
  {
    $this->header();
    $this->body();
    $this->footer();
  }


  protected function header()
  {
      echo '
      <!doctype html>
      <html lang="fr">
      <head>
          <meta charset="utf-8">
          <title>TP2 PHP</title>
          <meta name="description" content="Projet réseau social">
          <meta name="author" content="MMNY">
          <meta name="keywords" content="social, network, ENSSAT" />
            <link rel="stylesheet" type="text/css" href="style-accueil.css" />
      </head>
      <body>
      ';
  }

  protected function body()
  {
    echo '
      <div class="searchbar">
        <a href="Home.php"><img src="img_reseau-soc/simple-home.png" class="parameterico"></a>
        <a href="#parametres"><img src="img_reseau-soc/parameter-icon.png" class="parameterico"></a>
        <a href="#chat"><img src="img_reseau-soc/chat-bubble.png" class="parameterico"></a>
        <input type="text" placeholder="Search...">
        <input type="submit" value="Rechercher">
      </div>
      ';
  }
  protected function footer()
  {
      echo '
      </body>
      </html>
      ';
  }

}
?>
