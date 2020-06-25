<?php
require('libs/autoLoader.php');
define("URL","http://localhost/sonatel_academy/projet_mvc/");
$autoload = new Autoloader();
$autoload->redirect();


//var_dump($chDao->save($ch));

/*function generateMatricule(Etudiant $et){
    $matricule = date('Y').'-'.strtoupper(substr($et->getNom(),0,2)).
        '-'.strtoupper(substr($et->getPreNom(),0,2)).'-'.sprintf("%04d", $et->getId());
    return $matricule;
}
*/


//echo generateMatricule($et);
//echo generateNumeroChambre($etL,$ch);