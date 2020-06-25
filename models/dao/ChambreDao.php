<?php

class ChambreDao extends Manager
{
    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }
    
    public function add($obj){
        $sql="INSERT INTO chambre values($obj->getType(),$obj->getNumero(),$this->getNumero_batiment())";
       return $this->executeUpdate($sql)!=0;
    }
    public function update($obj){

    }
    
    public function findByLoginAndPwd($login,$pwd){
        $sql="select * from $this->tableName where login='$login'  and pwd='$pwd' ";
        $data=$this->executeSelect($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }

    function generateNumeroChambre(EtudiantLoge $etL, Chambre $ch){
        $numero_chambre = sprintf("%03d", $ch->getNumero_batiment()).'-'.sprintf("%04d", $etL->getNumero_chambre());
        return $numero_chambre;
    }
    
}