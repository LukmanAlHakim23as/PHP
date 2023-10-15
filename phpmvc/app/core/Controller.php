<?php

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/'. $view. '.php'; 
        
    }

    public function model($model){
        require_once '../app/Model/'. $model. '.php';
        return new $model;
    }
}


?>