<?php
$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");


$id   = new \MongoDB\BSON\ObjectId("5a7b250f1679ade450aca284");
$filter= ['_id' => $id];

$query = new MongoDB\Driver\Query($filter);

$cursor = $connection->executeQuery('ProjetWeb.etudiants', $query);
//var_dump($cursor);




$bulk = new MongoDB\Driver\BulkWrite;

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

$_id1 = $bulk->insert($nouvetud);
//var_dump($nouvetud);

//SUPRESSION D UN ETUDIANT
$bulk->delete(['u_login' => "Shwartzoula"], ['limit' => 1]);

//MODIFICATION D UN CARACTERE
 $bulk->update(['u_naissance' => "2000"], ['$set' => ['u_naissance' => '1982']]);


//Application des modification
$result = $connection->executeBulkWrite('ProjetWeb.etudiants', $bulk);
?>
