<?php

class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->dossier = "etudiant";
        $this->layout ="template";
    }

    public function index()
    {
        $chambre = new ChambreDao();
        $result= $chambre->all();
        $this->send_data_to_view["chambres"] = $result;
 
        $this->view = "add";
        $this->render();
    }
    public function all()
    {
        $this->dao = new EtudiantDao();
        $result = $this->dao->all();
       
        $this->send_data_to_view['etudiants'] = $result;
        $this->view = "list";
        $this->render();
    }

public function save()
{
    if (isset($_POST['enregistrer'])) {
        extract($_POST);
        $this->dao = new EtudiantDao();
        $etudiant = [
            'prenom'=>$prenom,
            'nom'=>$nom,
            'email'=>$email,
            'datenaiss'=>$datenaiss,
            'telephone'=>$telephone,
            'type' => $typeEt
        ];
        //generate  matricule etudiant
        $etudiant['matricule']= $this->dao->generateMatricule($etudiant);

        if ($typeEt == "NB")
            {
                $etudiant['adresse'] = $adresse;
                $et = new EtudiantNB($etudiant);
    
                $this->dao->save($et);
                $this->index();
            }
            elseif($typeEt == "BL")
            {
                $etudiant['numero_chambre'] = $numero_chambre;
                $etudiant['typeBourse'] = $typeBourse;
                $et = new EtudiantLoge($etudiant);
              
                $this->dao->save($et);
                $this->index();
            }
            elseif ($typeEt == "BNL") 
            {
                $etudiant['adresse'] = $adresse;
                $etudiant['typeBourse'] = $typeBourse;
                $et = new EtudiantNl($etudiant);
                
                $this->dao->save($et);
                $this->index();
            }
        }     
    }
}