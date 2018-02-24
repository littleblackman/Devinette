<?php

/*** accès au model ***/
$query = "SELECT * FROM devinette";
$bdd = new PDO("mysql:host=localhost;dbname=devinette;charset=utf8", "root", "root");
$req = $bdd->prepare($query);
$req->execute();
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {

    $devinette['id']         = $row['id'];
    $devinette['name']       = $row['name'];
    $devinette['question']   = $row['question'];
    $devinette['answer']     = $row['answer'];
    $devinette['created_at'] = $row['created_at'];

    $devinettes[] = $devinette; // tableau de tableau

};

include(VIEW.'home.php');