<?php
include_once('_config.php');

$id = $_GET['id'];

/*** accès au model ***/

$bdd = new PDO("mysql:host=localhost;dbname=devinette;charset=utf8", "root", "root");

$query = "DELETE FROM devinette WHERE id = :id";

$req = $bdd->prepare($query);
$req->bindValue(':id', $id, PDO::PARAM_INT);

$req->execute();

header("Location: index.php");
exit;


;?>

