<?php
require('libs/autoLoader.php');

$autoload = new Autoloader();
$autoload->redirect();
$et = new Etudiant([
    'id'=>1,
    'nom'=>'diallo',
    'prenom'=>'ousseynou',
    'email'=>'@',
    'telephone'=>35374765,
    'typeBourse'=>'complet',
    'matricule'=>'dyjh',
    'datenaiss'=>'11/02/2012'
]);
var_dump($et);

$etL = new EtudiantLoge([
    'id'=>1,
    'nom'=>'diallo',
    'prenom'=>'ousseynou',
    'email'=>'@',
    'telephone'=>35374765,
    'numero_chambre'=>1,
    'typeBourse'=>'complet',
    'matricule'=>'dyjh',
    'datenaiss'=>'11/02/2012'
]);
var_dump($etL);

$etNL = new EtudiantNl([
    'id'=>1,
    'nom'=>'diallo',
    'prenom'=>'ousseynou',
    'email'=>'@',
    'telephone'=>35374765,
    'numero_chambre'=>1,
    'typeBourse'=>'complet',
    'matricule'=>'dyjh',
    'adresse'=>'castor',
    'datenaiss'=>'11/02/2012'
   
]);
var_dump($etNL);

$etNB = new EtudiantNB([
    'id'=>1,
    'nom'=>'diallo',
    'prenom'=>'ousseynou',
    'email'=>'@',
    'telephone'=>35374765,
    'numero_chambre'=>1,
    'matricule'=>'dyjh',
    'adresse'=>'castor',
    'datenaiss'=>'11/02/2012'
   
]);
var_dump($etNB);

$chambre = new Chambre([
    'id_chambre'=>12,
    'type'=>'double',
    'numero'=>'CH 1',
    'numero_batiment'=>'B1',
]);
var_dump($chambre);