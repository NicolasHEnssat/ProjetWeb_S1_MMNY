<?php
$connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");


$id   = new \MongoDB\BSON\ObjectId("5a7b250f1679ade450aca284");
$filter= ['_id' => $id];

$query = new MongoDB\Driver\Query($filter);

$cursor = $connection->executeQuery('ProjetWeb.etudiants', $query);
var_dump($cursor);




$bulk = new MongoDB\Driver\BulkWrite;

// $document1 = ['title' => 'one'];
// $document2 = ['_id' => 'custom ID', 'title' => 'two'];

$nouvetud = array(
            "u_login" => "Shwartzy",
            "u_mdp" => "playstation",
            "u_nom" => "Shwartzy",
            "u_prenom" => "shosho",
            "u_naissance" => "1956",
            "u_genre" => "Apache helicopter",
            "u_email" => "terminathor@yahoo.com",
            "u_annee" => "2017",
            "u_discipline" => "IMR");

$_id1 = $bulk->insert($nouvetud);


//var_dump($nouvetud);
$result = $connection->executeBulkWrite('ProjetWeb.etudiants', $bulk);
?>
