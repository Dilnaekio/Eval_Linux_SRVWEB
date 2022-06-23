<?php

abstract class Model
{
    private static $pdo;

    private function setDB()
    {
        self::$pdo = new PDO('mysql:host=localhost;dbname=eval_srvweb;charset=utf8', 'root', '');
        // TODO : le root du serveur a un MDP => LE METTRE !
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getDB()
    {
        if (self::$pdo === null) {
            $this->setDB();
            return self::$pdo;
        } else {
            return self::$pdo;
        }
    }
}
