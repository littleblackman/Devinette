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
    
    public function find($id)
    {
        $bdd = $this->bdd;

        $query = "SELECT * FROM devinette WHERE id = :id";
        $req = $bdd->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $row = $req->fetch(PDO::FETCH_ASSOC);
        
        $devinette = new Devinette();
        $devinette->setId($row['id']);
        $devinette->setName($row['name']);
        $devinette->setQuestion($row['question']);
        $devinette->setAnswer($row['answer']);
        $devinette->setCreatedAt($row['created_at']);
        
        return $devinette;
    }

    public function create($values)
    {
        $bdd = $this->bdd;

        $query = "INSERT INTO devinette (id, name, question, answer, created_at) 
        VALUES (NULL, :name, :question, :answer, NULL);";

        $req = $bdd->prepare($query);

        $req->bindValue(':name', $values['name'], PDO::PARAM_STR);
        $req->bindValue(':question', $values['question'], PDO::PARAM_STR);
        $req->bindValue(':answer', $values['answer'], PDO::PARAM_STR);

        $req->execute();

    }

    public function delete($id)
    {
        $bdd = $this->bdd;
        $query = "DELETE FROM devinette WHERE id = :id";

        $req = $bdd->prepare($query);
        $req->bindValue(':id', $id, PDO::PARAM_INT);

        $req->execute();
    }


}