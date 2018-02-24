<?php


class DevinetteManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new PDO("mysql:host=localhost;dbname=devinette;charset=utf8", "root", "root");

    }

    public function findAll()
    {
        $bdd = $this->bdd;

        /*** accès au model ***/
        $query = "SELECT * FROM devinette";

        $req = $bdd->prepare($query);
        $req->execute();
        while ($row = $req->fetch(PDO::FETCH_ASSOC)) {


            $devinette = new Devinette();
            $devinette->setId($row['id']);
            $devinette->setName($row['name']);
            $devinette->setQuestion($row['question']);
            $devinette->setAnswer($row['answer']);
            $devinette->setCreatedAt($row['created_at']);

            $devinettes[] = $devinette; // tableau d'objet

        };

        return $devinettes;
    }


}