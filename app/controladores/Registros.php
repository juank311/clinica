<?php

class Registros extends Controlador
{
    public $RegistrosModelo;
    public function __construct()
    {
        $this->RegistrosModelo = $this->modelo('Registro');
    }

    public function index()
    {
        $this->vista('Registros/inicio');
    }
    /* -------------------------------------------- */
    public function registro_diario()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos =
                [
                    'pregunta_1' => trim($_POST['pregunta_1']),
                    'pregunta_2' => trim($_POST['pregunta_2']),
                    'pregunta_3' => trim($_POST['pregunta_3']),
                    'pregunta_4' => trim($_POST['pregunta_4']),
                    'pregunta_5' => trim($_POST['pregunta_5']),

                ];

            if ($this->RegistrosModelo->agregarRegistro($datos)) {

                header('Location: ' . RUTA_URL . '/Registros');
            } else {
                die('Algo está salio mal');
            }
        } else {
            $datos = [
                'pregunta_1' => '',
                'pregunta_2' => '',
                'pregunta_3' => '',
                'pregunta_4' => '',
                'pregunta_5' => '',
                'pregunta_6' => '',
                'usuario' => ''
            ];

            $this->vista('Registros/registro_diario', $datos);
        };
    }
    /* ---------------------------------------------------- */

    /* ---------------------------------------------------- */
    public function borrar($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = ['id' => $id];
            if ($this->RegistrosModelo->borrarFormulario($datos)) {
                header('Location: ' . RUTA_URL . '/Registros/lista01');
                exit();
            }
        }

        $dataRegistros = $this->RegistrosModelo->mostrarFormulario($id);
        $datos = ['data' => $dataRegistros];
        $this->vista('Registros/borrar', $datos);
    }
}
