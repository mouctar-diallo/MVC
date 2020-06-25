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
                $house = [
                    'numero_batiment'=> $numero,
                    'type'=>$type
                ];
                $ch = new Chambre();
                $ch = $house;
                //generate  numero chambre
                $ch['numero']= $this->dao->generateNumeroChambre($ch);
                $this->dao->save($ch);
                $this->index();
            }
            
        } else {
            $this->index();
        }
        
    }
    public function all()
    {
        $this->view = "list";
        $this->render();
    }

}