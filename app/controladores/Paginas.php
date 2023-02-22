<?php

class Paginas extends Controlador
{   private $paginasModelo;
    public function __construct()
    {
        $this->paginasModelo = $this->modelo('Articulo');
    }

    public function index()
    {
        $this->vista('paginas/inicio');
    }

    public function articulo()
    {
        $this->vista('paginas/articulo');
    }

    public function actualizar($id)
    {
        echo "<br>";
        echo $id;
    }
}



?>