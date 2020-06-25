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
        $this->view = "add";
        $this->render();
    }
    public function all()
    {
        $this->view = "list";
        $this->render();
    }
}