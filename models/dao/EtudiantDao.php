<?php

class EtudiantDao extends Manager
{
    public function __construct(){
        $this->tableName="etudiant";
        $this->className="Etudiant";
    } 

    public function save($obj){

        if($obj->getType() == 'NB'){
            $sql = $this->preparer("INSERT into $this->tableName values(null,?,?,?,?,?,?,?,?,null,null)");
            $row = $sql->execute(array($obj->getMatricule(),$obj->getNom(),$obj->getPrenom(),$obj->getEmail(),$obj->getTelephone(),$obj->getDatenaiss(),$obj->geTtype(),$obj->getAdresse()));

        }else if($obj->getType() == 'BL'){
            $sql = $this->preparer("INSERT into $this->tableName values(null,?,?,?,?,?,?,?,null,?,?)");
            $row = $sql->execute(array($obj->getMatricule(),$obj->getNom(),$obj->getPrenom(),$obj->getEmail(),$obj->getTelephone(),$obj->getDatenaiss(),$obj->geTtype(),$obj->getTypeBourse(), $obj->getNumero_chambre()));
            
        } else if($obj->getType() == 'BNL'){
            $sql = $this->preparer("INSERT into $this->tableName values(null,?,?,?,?,?,?,?,?,?,null)");
            $row = $sql->execute(array($obj->getMatricule(),$obj->getNom(),$obj->getPrenom(),$obj->getEmail(),$obj->getTelephone(),$obj->getDatenaiss(),$obj->geTtype(),$obj->getAdresse(),$obj-> getTypeBourse()));
        }  

        if($row){
           return true;
       }else {
        return false;
       }
    }

    public function update($obj){

    }

    function generateMatricule($et){
        $matricule = date('Y').'-'.strtoupper(substr($et['nom'],0,2)).
            '-'.strtoupper(substr($et['prenom'],-2)).'-'.sprintf("%04d",rand(0,1000));
        return $matricule;
    }
}