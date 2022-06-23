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
        $this->connardList[] = $connard;
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

    // TODO : faire méthode : addVote
    // TODO : faire méthode : addVictory
}