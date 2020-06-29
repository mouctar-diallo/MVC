<?php

class Chambre implements IInit
{
    private $id_chambre;
    private $numero;
    private $type;
    private $numero_batiment;

    public function __construct($array=null)
    {
        if (!is_null($array)) {
            $this->init($array);
        }
    }
    public function init($array)
    {
        $this->id_chambre = $array['id'];
        $this->numero = $array['numero'];
        $this->type = $array['type'];
        $this->numero_batiment = $array['numero_batiment'];
    }
    
    public function setId_Chambre($id_chambre)
    {
        $this->id_chambre = $id_chambre;
    }

    public function getId_Chambre()
    {
        return $this->id_chambre;
    }
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
    public function getNumero_batiment()
    {
        return $this->numero_batiment;
    }
    public function setNumero_batiment($numero_batiment)
    {
        $this->numero_batiment = $numero_batiment;
    }
}