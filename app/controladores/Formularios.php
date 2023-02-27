<?php

class Formularios extends Controlador
{
    public $formulariosModelo;
    public function __construct()
    {
        $this->formulariosModelo = $this->modelo('Formulario');
    }

    public function index()
    {
        $this->vista('formularios/inicio');
    }

    public function formulario_01()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos =
                [
                    'pregunta_1' => trim($_POST['pregunta_1']),
                    'pregunta_2' => trim($_POST['pregunta_2']),
                    'pregunta_3' => trim($_POST['pregunta_3']),
                    'pregunta_4' => trim($_POST['pregunta_4']),
                    'pregunta_5' => trim($_POST['pregunta_5']),
                    'pregunta_6' => trim($_POST['pregunta_6']),
                    'pregunta_7' => trim($_POST['pregunta_7']),
                    'pregunta_8' => trim($_POST['pregunta_8']),
                    'pregunta_9' => trim($_POST['pregunta_9']),
                    'pregunta_10' => trim($_POST['pregunta_10']),
                    'pregunta_11' => trim($_POST['pregunta_11']),
                    'pregunta_12' => trim($_POST['pregunta_12']),
                    'pregunta_13' => trim($_POST['pregunta_13']),
                    'pregunta_14' => trim($_POST['pregunta_14']),
                    'pregunta_15' => trim($_POST['pregunta_15']),
                    'pregunta_16' => trim($_POST['pregunta_16']),
                    'pregunta_17' => trim($_POST['pregunta_17']),
                    'pregunta_18' => trim($_POST['pregunta_18']),
                    'pregunta_19' => trim($_POST['pregunta_19']),
                    'pregunta_20' => trim($_POST['pregunta_20']),
                    'pregunta_21' => trim($_POST['pregunta_21']),
                    'pregunta_22' => trim($_POST['pregunta_22']),
                    'pregunta_23' => trim($_POST['pregunta_23']),
                    'pregunta_24' => trim($_POST['pregunta_24']),
                    'pregunta_25' => trim($_POST['pregunta_25']),
                    'pregunta_26' => trim($_POST['pregunta_26']),
                    'pregunta_27' => trim($_POST['pregunta_27']),
                    'obs_p1' => trim($_POST['obs_p1']),
                    'obs_p2' => trim($_POST['obs_p2']),
                    'obs_p3' => trim($_POST['obs_p3']),
                    'obs_p4' => trim($_POST['obs_p4']),
                    'obs_p5' => trim($_POST['obs_p5']),
                    'obs_p6' => trim($_POST['obs_p6']),
                    'obs_p7' => trim($_POST['obs_p7']),
                    'obs_p8' => trim($_POST['obs_p8']),
                    'obs_p9' => trim($_POST['obs_p9']),
                    'obs_p10' => trim($_POST['obs_p10']),
                    'obs_p11' => trim($_POST['obs_p11']),
                    'obs_p12' => trim($_POST['obs_p12']),
                    'obs_p13' => trim($_POST['obs_p13']),
                    'obs_p14' => trim($_POST['obs_p14']),
                    'obs_p15' => trim($_POST['obs_p15']),
                    'obs_p16' => trim($_POST['obs_p16']),
                    'obs_p17' => trim($_POST['obs_p17']),
                    'obs_p18' => trim($_POST['obs_p18']),
                    'obs_p19' => trim($_POST['obs_p19']),
                    'obs_p20' => trim($_POST['obs_p20']),
                    'obs_p21' => trim($_POST['obs_p21']),
                    'obs_p22' => trim($_POST['obs_p22']),
                    'obs_p23' => trim($_POST['obs_p23']),
                    'obs_p24' => trim($_POST['obs_p24']),
                    'obs_p25' => trim($_POST['obs_p25']),
                    'obs_p26' => trim($_POST['obs_p26']),
                    'obs_p27' => trim($_POST['obs_p27']),
                    'consecutivo' => trim($_POST['consecutivo']),
                    'piso' => trim($_POST['piso']),
                    'usuario' => trim($_POST['usuario'])
                ];

            if ($this->formulariosModelo->agregarFormulario($datos)) {

                header('Location: ' . RUTA_URL . '/formularios');
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
                'pregunta_7' => '',
                'pregunta_8' => '',
                'pregunta_9' => '',
                'pregunta_10' => '',
                'pregunta_11' => '',
                'pregunta_12' => '',
                'pregunta_13' => '',
                'pregunta_14' => '',
                'pregunta_15' => '',
                'pregunta_16' => '',
                'pregunta_17' => '',
                'pregunta_18' => '',
                'pregunta_19' => '',
                'pregunta_20' => '',
                'pregunta_21' => '',
                'pregunta_22' => '',
                'pregunta_23' => '',
                'pregunta_24' => '',
                'pregunta_25' => '',
                'pregunta_26' => '',
                'pregunta_27' => '',
                'obs_p1' => '',
                'obs_p2' => '',
                'obs_p3' => '',
                'obs_p4' => '',
                'obs_p5' => '',
                'obs_p6' => '',
                'obs_p7' => '',
                'obs_p8' => '',
                'obs_p9' => '',
                'obs_p10' => '',
                'obs_p11' => '',
                'obs_p12' => '',
                'obs_p13' => '',
                'obs_p14' => '',
                'obs_p15' => '',
                'obs_p16' => '',
                'obs_p17' => '',
                'obs_p18' => '',
                'obs_p19' => '',
                'obs_p20' => '',
                'obs_p21' => '',
                'obs_p22' => '',
                'obs_p23' => '',
                'obs_p24' => '',
                'obs_p25' => '',
                'obs_p26' => '',
                'obs_p27' => '',
                'consecutivo' => '',
                'piso' => '',
                'usuario' => ''
            ];

            $this->vista('formularios/formulario_01', $datos);
        };
    }

    public function lista01()
    {
        $dataFormularios = $this->formulariosModelo->obtenerFormulario();

        $datos = ['data' => $dataFormularios];

        $this->vista('formularios/lista01', $datos);
    }

    public function mostrar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos =
                [
                    'id' => $id,
                    'pregunta_1' => trim($_POST['pregunta_1']),
                    'pregunta_2' => trim($_POST['pregunta_2']),
                    'pregunta_3' => trim($_POST['pregunta_3']),
                    'pregunta_4' => trim($_POST['pregunta_4']),
                    'pregunta_5' => trim($_POST['pregunta_5']),
                    'pregunta_6' => trim($_POST['pregunta_6']),
                    'pregunta_7' => trim($_POST['pregunta_7']),
                    'pregunta_8' => trim($_POST['pregunta_8']),
                    'pregunta_9' => trim($_POST['pregunta_9']),
                    'pregunta_10' => trim($_POST['pregunta_10']),
                    'pregunta_11' => trim($_POST['pregunta_11']),
                    'pregunta_12' => trim($_POST['pregunta_12']),
                    'pregunta_13' => trim($_POST['pregunta_13']),
                    'pregunta_14' => trim($_POST['pregunta_14']),
                    'pregunta_15' => trim($_POST['pregunta_15']),
                    'pregunta_16' => trim($_POST['pregunta_16']),
                    'pregunta_17' => trim($_POST['pregunta_17']),
                    'pregunta_18' => trim($_POST['pregunta_18']),
                    'pregunta_19' => trim($_POST['pregunta_19']),
                    'pregunta_20' => trim($_POST['pregunta_20']),
                    'pregunta_21' => trim($_POST['pregunta_21']),
                    'pregunta_22' => trim($_POST['pregunta_22']),
                    'pregunta_23' => trim($_POST['pregunta_23']),
                    'pregunta_24' => trim($_POST['pregunta_24']),
                    'pregunta_25' => trim($_POST['pregunta_25']),
                    'pregunta_26' => trim($_POST['pregunta_26']),
                    'pregunta_27' => trim($_POST['pregunta_27']),
                    'obs_p1' => trim($_POST['obs_p1']),
                    'obs_p2' => trim($_POST['obs_p2']),
                    'obs_p3' => trim($_POST['obs_p3']),
                    'obs_p4' => trim($_POST['obs_p4']),
                    'obs_p5' => trim($_POST['obs_p5']),
                    'obs_p6' => trim($_POST['obs_p6']),
                    'obs_p7' => trim($_POST['obs_p7']),
                    'obs_p8' => trim($_POST['obs_p8']),
                    'obs_p9' => trim($_POST['obs_p9']),
                    'obs_p10' => trim($_POST['obs_p10']),
                    'obs_p11' => trim($_POST['obs_p11']),
                    'obs_p12' => trim($_POST['obs_p12']),
                    'obs_p13' => trim($_POST['obs_p13']),
                    'obs_p14' => trim($_POST['obs_p14']),
                    'obs_p15' => trim($_POST['obs_p15']),
                    'obs_p16' => trim($_POST['obs_p16']),
                    'obs_p17' => trim($_POST['obs_p17']),
                    'obs_p18' => trim($_POST['obs_p18']),
                    'obs_p19' => trim($_POST['obs_p19']),
                    'obs_p20' => trim($_POST['obs_p20']),
                    'obs_p21' => trim($_POST['obs_p21']),
                    'obs_p22' => trim($_POST['obs_p22']),
                    'obs_p23' => trim($_POST['obs_p23']),
                    'obs_p24' => trim($_POST['obs_p24']),
                    'obs_p25' => trim($_POST['obs_p25']),
                    'obs_p26' => trim($_POST['obs_p26']),
                    'obs_p27' => trim($_POST['obs_p27']),
                    'consecutivo' => trim($_POST['consecutivo'])
                ];

            if ($this->formulariosModelo->actualizarFormulario($datos)) {
                header('Location: ' . RUTA_URL . '/formularios/mostrar/' . $id);
            } else {
                die('Algo está salio mal');
            }
        } else {
            $dataFormularios = $this->formulariosModelo->mostrarFormulario($id);

            $datos = ['data' => $dataFormularios];

            $this->vista('formularios/mostrar', $datos);
        }
        //Metodo para borrar formulario

    }

    /* public function borrar_2($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = [
                'id' => $id
            ];

            
            } else {
                die('Algo está salio mal');
            }
        }
    } */

    public function borrar($id)
{

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $datos = ['id' => $id];
        if ($this->formulariosModelo->borrarFormulario($datos)) {
            header('Location: '. RUTA_URL . '/formularios/lista01');
            exit();
        }
    }
    
    $dataFormularios = $this->formulariosModelo->mostrarFormulario($id);
    $datos = ['data' => $dataFormularios];
    $this->vista('formularios/borrar', $datos);
}
}
