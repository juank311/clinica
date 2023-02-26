<?php

class Formulario
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarios()
    {
        $this->db->query("SELECT * FROM usuarios");
        return $this->db->registros();
    }

    public function agregarFormulario($datos)
    {
        $this->db->query('INSERT INTO formulario_01 (usuario, consecutivo, pregunta_1, pregunta_2, pregunta_3, pregunta_4, pregunta_5, pregunta_6, pregunta_7, pregunta_8, pregunta_9, pregunta_10, pregunta_11, pregunta_12, pregunta_13, pregunta_14, pregunta_15, pregunta_16, pregunta_17, pregunta_18, pregunta_19, pregunta_20, pregunta_21, pregunta_22, pregunta_23, pregunta_24, pregunta_25, pregunta_26, pregunta_27, obs_p1, obs_p2, obs_p3, obs_p4, obs_p5, obs_p6, obs_p7, obs_p8, obs_p9, obs_p10, obs_p11, obs_p12, obs_p13, obs_p14, obs_p15, obs_p16, obs_p17, obs_p18, obs_p19, obs_p20, obs_p21, obs_p22, obs_p23, obs_p24, obs_p25, obs_p26, obs_p27, piso) 
        VALUES (:usuario, :consecutivo, :pregunta_1, :pregunta_2, :pregunta_3, :pregunta_4, :pregunta_5, :pregunta_6, :pregunta_7, :pregunta_8, :pregunta_9, :pregunta_10, :pregunta_11, :pregunta_12, :pregunta_13, :pregunta_14, :pregunta_15, :pregunta_16, :pregunta_17, :pregunta_18, :pregunta_19, :pregunta_20, :pregunta_21, :pregunta_22, :pregunta_23, :pregunta_24, :pregunta_25, :pregunta_26, :pregunta_27, :obs_p1, :obs_p2, :obs_p3, :obs_p4, :obs_p5, :obs_p6, :obs_p7, :obs_p8, :obs_p9, :obs_p10, :obs_p11, :obs_p12, :obs_p13, :obs_p14, :obs_p15, :obs_p16, :obs_p17, :obs_p18, :obs_p19, :obs_p20, :obs_p21, :obs_p22, :obs_p23, :obs_p24, :obs_p25, :obs_p26, :obs_p27, :piso)');
        
        $this->db->bind('usuario', $datos['usuario']);
        $this->db->bind('consecutivo', $datos['consecutivo']);
        $this->db->bind('pregunta_1', $datos['pregunta_1']);
        $this->db->bind('pregunta_2', $datos['pregunta_2']);
        $this->db->bind('pregunta_3', $datos['pregunta_3']);
        $this->db->bind('pregunta_4', $datos['pregunta_4']);
        $this->db->bind('pregunta_5', $datos['pregunta_5']);
        $this->db->bind('pregunta_6', $datos['pregunta_6']);
        $this->db->bind('pregunta_7', $datos['pregunta_7']);
        $this->db->bind('pregunta_8', $datos['pregunta_8']);
        $this->db->bind('pregunta_9', $datos['pregunta_9']);
        $this->db->bind('pregunta_10', $datos['pregunta_10']);
        $this->db->bind('pregunta_11', $datos['pregunta_11']);
        $this->db->bind('pregunta_12', $datos['pregunta_12']);
        $this->db->bind('pregunta_13', $datos['pregunta_13']);
        $this->db->bind('pregunta_14', $datos['pregunta_14']);
        $this->db->bind('pregunta_15', $datos['pregunta_15']);
        $this->db->bind('pregunta_16', $datos['pregunta_16']);
        $this->db->bind('pregunta_17', $datos['pregunta_17']);
        $this->db->bind('pregunta_18', $datos['pregunta_18']);
        $this->db->bind('pregunta_19', $datos['pregunta_19']);
        $this->db->bind('pregunta_20', $datos['pregunta_20']);
        $this->db->bind('pregunta_21', $datos['pregunta_21']);
        $this->db->bind('pregunta_22', $datos['pregunta_22']);
        $this->db->bind('pregunta_23', $datos['pregunta_23']);
        $this->db->bind('pregunta_24', $datos['pregunta_24']);
        $this->db->bind('pregunta_25', $datos['pregunta_25']);
        $this->db->bind('pregunta_26', $datos['pregunta_26']);
        $this->db->bind('pregunta_27', $datos['pregunta_27']);
        $this->db->bind('obs_p1', $datos['obs_p1']);
        $this->db->bind('obs_p2', $datos['obs_p2']);
        $this->db->bind('obs_p3', $datos['obs_p3']);
        $this->db->bind('obs_p4', $datos['obs_p4']);
        $this->db->bind('obs_p5', $datos['obs_p5']);
        $this->db->bind('obs_p6', $datos['obs_p6']);
        $this->db->bind('obs_p7', $datos['obs_p7']);
        $this->db->bind('obs_p8', $datos['obs_p8']);
        $this->db->bind('obs_p9', $datos['obs_p9']);
        $this->db->bind('obs_p10', $datos['obs_p10']);
        $this->db->bind('obs_p11', $datos['obs_p11']);
        $this->db->bind('obs_p12', $datos['obs_p12']);
        $this->db->bind('obs_p13', $datos['obs_p13']);
        $this->db->bind('obs_p14', $datos['obs_p14']);
        $this->db->bind('obs_p15', $datos['obs_p15']);
        $this->db->bind('obs_p16', $datos['obs_p16']);
        $this->db->bind('obs_p17', $datos['obs_p17']);
        $this->db->bind('obs_p18', $datos['obs_p18']);
        $this->db->bind('obs_p19', $datos['obs_p19']);
        $this->db->bind('obs_p20', $datos['obs_p20']);
        $this->db->bind('obs_p21', $datos['obs_p21']);
        $this->db->bind('obs_p22', $datos['obs_p22']);
        $this->db->bind('obs_p23', $datos['obs_p23']);
        $this->db->bind('obs_p24', $datos['obs_p24']);
        $this->db->bind('obs_p25', $datos['obs_p25']);
        $this->db->bind('obs_p26', $datos['obs_p26']);
        $this->db->bind('obs_p27', $datos['obs_p27']);
        $this->db->bind('piso', $datos['piso']);
        
        
        #ejecutar la consulta 
        if ($this->db->execute()) {
            return true;
        }else {
            return false;
        };
    }

    
}
