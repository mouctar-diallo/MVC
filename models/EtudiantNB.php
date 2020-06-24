<?php

class EtudiantNB extends Etudiant
{
    private $adresse;

    public function __construct($array=null)
    {
        if (!is_null($array)) {
            $this->init($array);
        }
    }
    public function init($array)
    {
        parent::init($array);
        $this->adresse = $array['adresse'];
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
}