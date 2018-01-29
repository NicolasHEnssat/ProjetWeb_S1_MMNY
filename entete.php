<?php

class entete{



  protected $entete;

  public function __construct()
  {
  }

  public function execute()
  {
    $this->header();
    $this->body();
  }

  echo '
  <div class="searchbar">
    <a href="Base_page.php"><img src="img_reseau-soc/simple-home.png" class="parameterico"></a>
    <a href="#parametres"><img src="img_reseau-soc/parameter-icon.png" class="parameterico"></a>
    <a href="#chat"><img src="img_reseau-soc/chat-bubble.png" class="parameterico"></a>
    <input type="text" placeholder="Search...">
    <input type="submit" value="Rechercher">
  </div>
  '

}
?>
