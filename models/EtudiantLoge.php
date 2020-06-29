<?php

class EtudiantLoge extends Etudiant
{
    private $numero_chambre;
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
        $this->numero_chambre = $array['numero_chambre'];
        $this->typeBourse = $array['bourse'];
    }
    public function getNumero_chambre()
    {
        return $this->numero_chambre;
    }

    public function setNumero_chambre($numero_chambre)
    {
        $this->numero_chambre = $numero_chambre;
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