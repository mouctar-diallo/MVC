<?php

class ChambreController extends Controller
{
    
    public function __construct()
    {
        $this->dossier = "chambre";
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
    public function save()
    {
        if (isset($_POST['enregistrer'])) {
            extract($_POST);
            $this->dao = new ChambreDao();
            if ($type=="") {
                $this->send_data_to_view["error"] = 'type is required';
            }elseif ($numero == "") {
                $this->send_data_to_view["error"] = 'numero batiment is required';
            }else{
                $chambre = [
                    'id'=> null,
                    'numero_batiment'=> $numero,
                    'type'=>$type
                ];
                
                //generate  numero chambre
                $chambre['numero']= $this->dao->generateNumeroChambre($chambre);
                $ch = new Chambre($chambre);
               
                $this->dao->save($ch);
                $this->index();
            }
            
        } else {
            $this->index();
        }
        
    }
    public function all()
    {
        $chambre = new ChambreDao();
        $result= $chambre->all();
        $this->send_data_to_view["chambres"] = $result;
        $this->view = "list";
        $this->render();
    }
    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['value']) && isset($_POST['cible'])) 
        {
            $id_chambre = $_POST['id'];
            $newValue = $_POST['value'];
            $cible = $_POST['cible'];
             
            $this->dao = new ChambreDao();
            if ($this->dao->edit($id_chambre,$cible,$newValue)) {
                echo "$cible modifié avec succès";
            }
        }
    }
    public function delete()
    {  
        if (isset($_POST['id'])) 
        {
            $id_chambre = $_POST['id'];
            $this->dao = new ChambreDao(); 
            if ($this->dao->delete($id_chambre)) 
            {
                echo "supprimer";
            }
        }
    }

}