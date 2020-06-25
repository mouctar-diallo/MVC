<?php
require('IDao.php');

abstract class Manager implements IDao
{
    private $pdo = null;
    protected $className;
    protected $tableName;


    //connexion
    private function Openconnexion(){
       if ($this->pdo == null) {
            try {
                $this->pdo = new PDO("mysql:host=localhost;dbname=mvc","root","");
            } catch (PDOException $e ) {
                die("erreur de connexion");
            }
       }
    }

    private function closeConnexion(){
        if ($this->pdo != null) {
            $this->pdo=null;
        }
    }
    //execute mise a jour requette
    public function executeMaj($sql)
    {
        $this->Openconnexion();
        $lignes = $this->pdo->exec($sql);
        $this->closeConnexion();
        return $lignes;
    }
    //execute interrogation requette
    public function executeQuery($sql)
    {
        $this->Openconnexion();
        $req = $this->pdo->query($sql);
        $donnees = [];
        while ($result = $req->fetch()) {
            $donnees[] = new $this->className($result);
        }
        $this->closeConnexion();
        return $donnees;
    }
    //return all elements from table
    public function all(){
        $sql = "select * from $this->tableName";
        $donnees = $this->executeQuery($sql);
        return $donnees;
    }
    //recherche by id
    public function findById($id){
      $sql = "select * from $this->tableName where id = $id";
      $donnees= $this->executeQuery($sql);
      return $donnees;
    }
    //suppression 
    public function delete($id){
      $sql = "delete from $this->tableName where id = $id";
      $result = $this->executeMaj($sql);
      return count($result)!=0;
    }
}
