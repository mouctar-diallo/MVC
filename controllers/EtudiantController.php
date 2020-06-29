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
       foreach ($result as  $res) {
            $etudiant =  [
                'id'=>$res->getId(),
                'prenom'=>$res->getPrenom(),
                'matricule'=>$res->getMatricule(),
                'nom'=>$res->getNom(),
                'email'=>$res->getEmail(),
                'datenaiss'=>$res->getDatenaiss(),
                'telephone'=>$res->getTelephone(),
                'type' => $res->getType(),
            ];
            if ($res->getType()=='NB') {
                $etudiant['adresse'] = $res-> getAdresse();
                $etudiants = new EtudiantNB($etudiant);

            }else if($res->getType() == 'BNL'){
                $etudiant['adresse'] = $res-> getAdresse();
                $etudiant['bourse'] = $res->getTypeBourse();
                $etudiants = new EtudiantNl($etudiant);
            }elseif($res->getType() == 'BL'){
                $etudiant['bourse'] = $res->getTypeBourse();
                $etudiant['numero_chambre'] = $res->getNumero_chambre();
                $etudiants = new EtudiantLoge($etudiant);
            }

            $this->send_data_to_view['etudiants'][] = $etudiants;
           
       }
      
        $this->view = "list";
        $this->render();
    }

public function save()
{
    if (isset($_POST['enregistrer'])) {
        extract($_POST);
        $this->dao = new EtudiantDao();
        $etudiant = [
            'id'=>null,
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
                $etudiant['bourse'] = $typeBourse;
                $et = new EtudiantLoge($etudiant);
              
                $this->dao->save($et);
                $this->index();
            }
            elseif ($typeEt == "BNL") 
            {
                $etudiant['adresse'] = $adresse;
                $etudiant['bourse'] = $typeBourse;
                $et = new EtudiantNl($etudiant);
                
                $this->dao->save($et);
                $this->index();
            }
        }     
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['value']) && isset($_POST['cible'])) 
        {
           
            $id_etudiant = $_POST['id'];
            $newValue = $_POST['value'];
            $cible = $_POST['cible'];
            $this->dao = new EtudiantDao();
            if ($this->dao->edit($id_etudiant,$cible,$newValue)) {
                echo "$cible modifié avec succès";
            }
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) 
        {
            $id_etudiant = $_POST['id'];
            $this->dao = new EtudiantDao();
            if ($this->dao->delete($id_etudiant)) 
            {
                echo "supprimer";
            }
        }
    }
}