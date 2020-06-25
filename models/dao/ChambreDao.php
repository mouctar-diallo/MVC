<?php

class ChambreDao extends Manager
{
    public function __construct(){
        $this->tableName="chambre";
        $this->className="Chambre";
    }
    
    public function save($obj){
        extract($obj);
        $sql = $this->preparer("INSERT into $this->tableName values(null,?,?,?)");  
        $row = $sql->execute(array($numero,$type,$numero_batiment));
       if($row!=0){
           return true;
       }else {
           return false;
       }
    }

    public function update($obj){

    }
    
    public function findByLoginAndPwd($login,$pwd){
        $sql="select * from $this->tableName where login='$login'  and pwd='$pwd' ";
        $data=$this->executeQuery($sql);
        if(count($data)==0){
              return null;
        }
        return count($data)==1?$data[0]:$data;
    
    }

    function generateNumeroChambre($ch){
        $numero_chambre = sprintf("%03d", $ch['numero_batiment']).'-'.sprintf("%04d", $ch['numero_batiment']+rand(0,100));
        return $numero_chambre;
    }
    
}