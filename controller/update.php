<?php
include_once('_config.php');

$values = $_POST['values'];

/*** accès au model ***/
$bdd = new PDO("mysql:host=localhost;dbname=devinette;charset=utf8", "root", "root");

if(!isset($values['id']))
{
    $query = "INSERT INTO devinette (id, name, question, answer, created_at) 
          VALUES (NULL, :name, :question, :answer, NULL);";
} else {
    $query = "UPDATE devinette SET name = :name, question = :question, answer = :answer WHERE id = :id";
}
$req = $bdd->prepare($query);

if(isset($values['id'])) $req->bindValue(':id', $values['id'], PDO::PARAM_INT);
$req->bindValue(':name', $values['name'], PDO::PARAM_STR);
$req->bindValue(':question', $values['question'], PDO::PARAM_STR);
$req->bindValue(':answer', $values['answer'], PDO::PARAM_STR);

$req->execute();

header("Location: index.php");
exit;


;?>

