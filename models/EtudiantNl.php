<?php

class EtudiantNl extends Etudiant
{
    private $adresse;
    private $typeBourse;

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
        $this->typeBourse = $array['typeBourse'];
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getTypeBourse()
    {
        return $this->typeBourse;
    }

    public function setTypeBourse($typeBourse)
    {
        $this->typeBourse = $typeBourse;
    }
}