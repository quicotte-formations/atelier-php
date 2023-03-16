<?php

namespace Projet\Entite;
include_once 'Chapeau.php';
use Projet\Entite\Chapeau;

class Personne
{
    protected string $prenom;
    protected string $nom;
    protected int $age;

    private Chapeau $chapeau;

    /**
     * @param string $prenom
     * @param string $nom
     * @param int $age
     */
    public function __construct(string $prenom, string $nom, int $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    /**
     * @return Chapeau
     */
    public function getChapeau(): Chapeau
    {
        return $this->chapeau;
    }

    /**
     * @param Chapeau $chapeau
     */
    public function setChapeau(Chapeau $chapeau): void
    {
        $this->chapeau = $chapeau;
    }


    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function __toString(): string
    {
        return "$this->prenom $this->nom $this->age porte un chapeau [$this->chapeau]";
    }
}


