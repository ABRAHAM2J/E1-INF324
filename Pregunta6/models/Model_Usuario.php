<?php

class Model_Usuario extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function selPerfil(){
        $query = $this->db->query("SELECT * FROM persona");
        return $query->result();
    }
    
    public function insertUsuario($ci, $nombre, $fecha_nac, $telefono, $departamento){
        
        $array = array(
            'ci' => $ci,
            'nombre' => $nombre,
            'fecha_nac' => $fecha_nac,
            'telefono' => $telefono,
            'departamento' => $departamento
        );

        $this->db->insert('persona', $array);
        
    }
    public function listUsuario(){
        $query = $this->db->query("SELECT * FROM persona");
        return $query->result();
    }
    
    public function deleteUsuario($ci){        
        $this->db->where('ci', $ci);
        $this->db->delete('persona');
    }
    public function editUsuario($ci){
        $consulta = $this->db->query("SELECT * FROM persona WHERE ci = $ci");
        return $consulta->result();
    }
    public function updateUsuario($ci, $nombre, $fecha_nac, $telefono, $departamento){
        $array = array(
            'ci' => $ci,
            'nombre' => $nombre,
            'fecha_nac' => $fecha_nac,
            'telefono' => $telefono,
            'departamento' => $departamento        
        );
        $this->db->where('ci', $ci);
        $this->db->update('persona',$array);
    }
    
    
}