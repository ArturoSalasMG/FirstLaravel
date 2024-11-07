<?php

namespace App\Http;

class Response {

    protected $view; //array, j;on, pdf

    public function __construct($view){
        $this->view = $view;
    }

    public function getView(){
        return $this->view;
    }

    public function send() {
        $view = $this->getView();

        // Verificar si el archivo de la vista existe
        $viewPath = __DIR__ . "/../../views/$view.php";
        if (!file_exists($viewPath)) {
            die("La vista $view no se encuentra.");
        }

        // Cargar el contenido de la vista
        $content = file_get_contents(viewPath($view));

        // Mostrar el contenido (puedes eliminar el var_dump para producción)
        //var_dump($content);

        // Incluir el layout principal

        require viewPath('layout');
    }

}