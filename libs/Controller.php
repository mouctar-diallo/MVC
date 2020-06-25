<?php

class Controller
{
    protected $view;
    protected $dossier;
    protected $layout;
    protected $send_data_to_view=[];
    protected $validator;
    protected $dao;

    public function render()
    {
        $pageAcharger = "views/".$this->dossier."/".$this->view.".php";
        $layout = "views/template/".$this->layout.".php";
        ob_start();
            extract($this->send_data_to_view);
            require_once($pageAcharger);
        $page_content = ob_get_clean();
        require_once($layout);
    }

}