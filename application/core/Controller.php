<?php

class Controller
{
    public $model;
    public $view;

    public function action404(){
        $this->render('404.php');
    }

    public function render($contentView, $data = null, $templateView = null){
        $this->view = new View();
        if(isset($templateView)){
            include 'application/views/'.$templateView;
        }else{
            include 'application/views/layouts/'.$this->view->templateView;
        }
    }

    public function redirect($controller = 'main',$action = "index"){
        $location =  "http://localhost/myMVC/" .$controller."/".$action;

        header("Location: " . $location);
        exit;
    }
}