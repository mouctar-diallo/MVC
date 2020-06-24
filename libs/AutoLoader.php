<?php

class AutoLoader
{
    private $controller;
    public function redirect()
    {
        spl_autoload_register(function($class){
            $cheminModels = 'models/'.$class.'.php';
            $cheminDao = 'models/dao/'.$class.'.php';
            $cheminLibs = 'libs/'.$class.'.php';
            if (file_exists($cheminModels)) {
                require_once($cheminModels);
            }elseif (file_exists($cheminDao)) {
                require_once($cheminDao);
            }elseif (file_exists($cheminLibs)) {
                require_once($cheminLibs);
            }
        });

        /*if(isset($_GET['url']))
        {
            $url = explode('/',filter_var( $_GET['url'],FILTER_SANITIZE_URL));
            $controllerAcharger = ucfirst(strtolower($url[0]))."Controller";
            $cheminController = "controllers/$controllerAcharger.php";
            if (file_exists($cheminController)) {
               require_once($cheminController);
                $method = $url[1];
                $this->controller = new  $controllerAcharger();
                if (method_exists($this->controller,$method)) {
                    $this->controller->{$method}();            
                }
            }
        }else{
            $cheminController = "controllers/ProduitController.php";
            require_once($cheminController);
            $controllerAcharger = new ProduitController();
            $controllerAcharger->save();
        }*/
    }
}