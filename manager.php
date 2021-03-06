<?php
require_once("./employe.php");
require_once("./directeur.php");

class Manager extends Employe implements Directeur
{
    public $client;

    public function __construct($nom, $prenom, $age)
    {
        $this->client = null;
        parent::__construct($nom, $prenom, $age);
    }

    public function enregistrerRDV($client)
    {
        $this->client = $client;
    }

    public function afficherRDV()
    {
        echo " Rendrez-vous de $this->nom, $this->prenom : $this->client";
    }

}


