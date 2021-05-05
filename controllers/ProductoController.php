<?php

require_once 'models/producto.php';

class productoController{

    public function index(){
        //Renderizar vista
        require_once 'views/producto/destacados.php';
    }

    public function gestion(){

        Utils :: isAdmin();

        $producto = new Producto();
        $productos = $producto->getAll();

        //Cargar vista
        require_once 'views/producto/gestion.php';
    }

    public function crear(){

        Utils :: isAdmin();

        //Cargar vista
        require_once 'views/producto/crear.php';
    }

    public function save(){
        
        Utils :: isAdmin();
        
        if(isset($_POST)){
            var_dump($_POST);
        }
    }

}

?>