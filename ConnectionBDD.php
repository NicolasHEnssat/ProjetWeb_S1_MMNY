<?php
$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017"); // Connexion à la db
$bulk = new MongoDB\Driver\BulkWrite; // Ecriture, suppression
$query = new \MongoDB\Driver\Query($filter, $options); // Lecture

//CREATION D UN ETUDIANT
$nouvetud = array(
            "u_login" => "Ahri",
            "u_mdp" => "dabisou",
            "u_nom" => "Elmack",
            "u_prenom" => "Ahri-rose",
            "u_naissance" => "2000",
            "u_genre" => "Femme",
            "u_email" => "kisskiss@laposte.net",
            "u_annee" => "2017",
            "u_discipline" => "Elec",
            "u_colorfond" => "pink",
            "u_colortext" => "blue");

$_id1 = $bulk->insert($nouvetud); // Insertion de l'arrray


//var_dump($nouvetud);

//SUPRESSION D UN ETUDIANT
$bulk->delete(['u_login' => "Shwartzoula"], ['limit' => 1]); //Commande de supression

//MODIFICATION D UN CARACTERE
$bulk->update(['u_naissance' => "2000"], ['$set' => ['u_naissance' => '1982']]); //update

// LIRE bdd
$filter = ['u_login' => "Ahri"];  // Application des filtres et options ( ici null)
$options = [];
$rows = $connection->executeQuery('ProjetWeb.etudiants', $query);

foreach ($rows as $document) {
  var_dump($document);
}




//Application des modification
$result = $connection->executeBulkWrite('ProjetWeb.etudiants', $bulk);

?>
