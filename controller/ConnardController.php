<?php

require "model/ConnardManager.php";
require "GlobalController.php";

class ConnardController
{
    private $connardManager;

    public function __construct()
    {
        $this->connardManager = new ConnardManager;
        $this->connardManager->loadConnards();
    }

    public function displayConnards()
    {
        $connards = $this->connardManager->getConnardsList();
        $pathFile = URL . "public/assets/images/";
        require "./view/connardsView.php";
    }

    public function getRandomConnards()
    {
        $connards = $this->connardManager->getConnardsList();
        $versus = [];
        $used = [];
        $count = 0;

        // Si le total de la différence entre les deux tableaux est supérieur à 1, alors que continue à utiliser la used list. Sinon je reset
        if (count(array_diff($connards, $used)) > 1) {
            // Pour chaque unité présente dans la liste des connards
            // TODO : il faut améliorer en récupérant en BDD la valeur mini et maxi des ID
            foreach ($connards as $connard) {
                $randomConnard = random_int(8, 14);

                if ($count < 2) {
                    // Je vérifie qu'elle ne se trouve pas dans la liste used pour set up le premier.
                    if ($connard->getId() == $randomConnard) {
                        if (!in_array($connard, $used)) {
                            $versus[] = $connard;
                            $this->connardManager->addConnardInUsedList($connard);
                            $used = $this->connardManager->getUsedList();
                            $count++;
                        }
                    }
                } else {
                    break;
                }
            }
        } else {
            $this->connardManager->resetLists();
        }
        return $versus;
    }

    public function displayVersus()
    {
        $versus = $this->getRandomConnards();

        require "view/voteView.php";
    }
}
