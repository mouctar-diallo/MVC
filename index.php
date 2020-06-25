<?php
require('libs/autoLoader.php');
define("URL","http://localhost/sonatel_academy/projet_mvc/");
$autoload = new Autoloader();
$autoload->redirect();






/*$et = new Etudiant([
    'id'=>20,
    'nom'=>'diallo',
    'prenom'=>'mouctar',
    'email'=>'@',
    'telephone'=>35374765,
    'matricule'=>'dyjh',
    'datenaiss'=>'11/02/2012'
]);
$etL = new EtudiantLoge([
    'id'=>20,
    'nom'=>'diallo',
    'prenom'=>'mouctar',
    'email'=>'@',
    'telephone'=>35374765,
    'typeBourse'=>'complet',
    'matricule'=>'dyjh',
    'numero_chambre'=>'6',
    'datenaiss'=>'11/02/2012'
]);

$ch = new Chambre([
    'id_chambre'=>5,
    'numero'=>'diallo',
    'numero_batiment'=>'4',
    'type'=>'double'
]);
var_dump($et);
var_dump($etL);

/*function generateMatricule(Etudiant $et){
    $matricule = date('Y').'-'.strtoupper(substr($et->getNom(),0,2)).
        '-'.strtoupper(substr($et->getPreNom(),0,2)).'-'.sprintf("%04d", $et->getId());
    return $matricule;
}

function generateNumeroChambre(EtudiantLoge $etL, Chambre $ch){
    $numero_chambre = sprintf("%03d", $ch->getNumero_batiment()).'-'.sprintf("%04d", $etL->getNumero_chambre());
    return $numero_chambre;
}

//echo generateMatricule($et);
echo generateNumeroChambre($etL,$ch);*/