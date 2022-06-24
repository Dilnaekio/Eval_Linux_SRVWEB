<?php

require "ModelClass.php";
require "ConnardClass.php";

class ConnardManager extends Model{
    private $connardsList;

    public function loadConnards()
    {
        $sql = "SELECT * FROM connards";
        $req = $this->getDB()->prepare($sql);
        $req->execute([]);

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        foreach($data as $connard)
        {
            $newConnard = new Connards($connard->id, $connard->name, $connard->nb_votes, $connard->img, $connard->ranking, $connard->nb_victories);
            $this->addConnard($newConnard);
        }
    }

    public function addConnard($connard)
    {
        $this->connardsList[] = $connard;
    }

    public function getConnardsList()
    {
        return $this->connardsList;
    }

    public function getConnardById($id)
    {
        foreach ($this->connardsList as $connard) {
            if ($connard->getId() == $id) {
                return $connard;
            }
        }
    }

    public function addConnardDB($name, $img)
    {
        $sql = "INSERT INTO connards (name, img) VALUES (:name, :img)";
        $req = $this->getDB()->prepare($sql);
        $req->execute([
            ":name" => $name,
            ":img" => $img
        ]);
    }

    public function deleteConnardDB($id)
    {
        $sql = "DELETE from connards where id = :id";
        $req = $this->getDB()->prepare($sql);
        $req->execute([
            ":id" => $id
        ]);
    }

    public function updateVote($id, $nb_votes)
    {
        $sql = "UPDATE connards set nb_votes = :nb_votes where id = :id";
        $req = $this->getDB()->prepare($sql);
        $req->execute([
            ":id" => $id,
            ":nb_votes" => $nb_votes
        ]);
    }

    public function updateVictories($id, $nb_victories)
    {
        $sql = "UPDATE connards set nb_victories = :nb_victories where id = :id";
        $req = $this->getDB()->prepare($sql);
        $req->execute([
            ":id" => $id,
            ":nb_victories" => $nb_victories
        ]);
    }
}