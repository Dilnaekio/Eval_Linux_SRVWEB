<?php

// Classe pour définir les connards qui recevront les votes

class Connards
{
    private $id;
    private $name;
    private $nb_votes;
    private $img;
    private $ranking;
    private $nb_victories;

    public function __construct($id, $name, $nb_votes, $img, $ranking, $nb_victories)
    {
        $this->id = $id;
        $this->name = $name;
        $this->nb_votes = $nb_votes;
        $this->img = $img;
        $this->ranking = $ranking;
        $this->nb_victories = $nb_victories;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of nb_votes
     */ 
    public function getNb_votes()
    {
        return $this->nb_votes;
    }

    /**
     * Set the value of nb_votes
     *
     * @return  self
     */ 
    public function setNb_votes($nb_votes)
    {
        $this->nb_votes = $nb_votes;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of ranking
     */ 
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Set the value of ranking
     *
     * @return  self
     */ 
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }

    /**
     * Get the value of nb_victories
     */ 
    public function getNb_victories()
    {
        return $this->nb_victories;
    }

    /**
     * Set the value of nb_victories
     *
     * @return  self
     */ 
    public function setNb_victories($nb_victories)
    {
        $this->nb_victories = $nb_victories;

        return $this;
    }
}
