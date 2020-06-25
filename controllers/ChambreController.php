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
        echo "ugilk";
        if (isset($_POST['enregistrer'])) {
            var_dump($_POST);die();
            extract($_POST);
            $this->validator->isVide($type,"type","type is required");
            $this->validator->isVide($numero,"numero","numero is required");
            if($this->validator->isValid()){

            }
        }else{
            var_dump($_POST);die();
        }
    }
    public function all()
    {
        $this->view = "list";
        $this->render();
    }

}