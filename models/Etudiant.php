<?php

class Etudiant implements IInit
{
    protected $id;
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $telephone;
    protected $datenaiss;
    protected $type;

    public function __construct($array=null)
    {
        if (!is_null($array)) {
            $this->init($array);
        }
    }
    public function init($array)
    {
        $this->id = $array['id'];
        $this->matricule = $array['matricule'];
        $this->nom = $array['nom'];
        $this->prenom = $array['prenom'];
        $this->email = $array['email'];
        $this->telephone = $array['telephone'];
        $this->datenaiss = $array['datenaiss'];
        $this->type = $array['type'];
    }
    
   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMatricule()
    {
        return $this->matricule;
    }

    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getDatenaiss()
    {
        return $this->datenaiss;
    }

    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss = $datenaiss;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}