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
        $pathFile = URL."public/assets/images/";
        require "view/connardsView.php";
    }
}