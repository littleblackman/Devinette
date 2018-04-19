<?php
function getBdd()
{
    return new PDO("mysql:host=localhost;dbname=devinette;charset=utf8", "root", "root");
}

function getDevinettes()
{
    $bdd = getBdd();

    $query = "SELECT * FROM devinette";
    $req = $bdd->prepare($query);
    $req->execute();
    while ($row = $req->fetch(PDO::FETCH_ASSOC)) {

        $devinette['id']         = $row['id'];
        $devinette['name']       = $row['name'];
        $devinette['question']   = $row['question'];
        $devinette['answer']     = $row['answer'];
        $devinette['created_at'] = $row['created_at'];

        $devinettes[] = $devinette;
    };

    return $devinettes;

}

function getUser($login, $password)
{
    $bdd = getBdd();
    $query = " SELECT * FROM user WHERE username = :login and password = :password";
    $req = $bdd->prepare($query);
    $req->bindValue("login", $login);
    $req->bindValue("password", sha1($password));
    $req->execute();

    if(!$user = $req->fetch(PDO::FETCH_ASSOC)) return null;
    return $user;



}
