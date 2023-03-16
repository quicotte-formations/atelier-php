<?php

namespace Projet\Entite;

class Chapeau
{
    private $forme;
    private $couleur;

    /**
     * @param $forme
     * @param $couleur
     */
    public function __construct($forme, $couleur)
    {
        $this->forme = $forme;
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * @param mixed $forme
     */
    public function setForme($forme): void
    {
        $this->forme = $forme;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur): void
    {
        $this->couleur = $couleur;
    }

    public function __toString(): string
    {
        return "$this->forme $this->couleur";
    }


}