<?php

class Welcome extends Controlador

{

    public function __construct()
    {
        //echo 'Controlador Welcome cargado'; 
    } 

    public function index()
    {
        $this->vista('welcome/inicio');
        
    }
}

?>