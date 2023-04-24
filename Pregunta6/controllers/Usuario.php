<?php 
class Usuario extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_Usuario');
    }

    public function index(){
        $data['contenido'] = "usuario/index";
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $data['listaUsuario'] = $this->Model_Usuario->listUsuario();
        $this->load->view("plantilla", $data);
    }

    public function insert(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $ci = $datos['ci'];
            $nombre = $datos['nombre'];
            $fecha_nac = $datos['fecha_nac'];
            $telefono = $datos['telefono'];
            $departamento = $datos['departamento'];

            $this->Model_Usuario->insertUsuario($ci, $nombre, $fecha_nac, $telefono, $departamento);
            redirect('');
        }        
    }    
    public function delete($ci = NULL){
        if($ci != NULL){
            $this->Model_Usuario->deleteUsuario($ci);
            redirect('');
        }
    }
    public function edit($ci = NULL){
        if($ci != NULL){
            $data['contenido'] = 'usuario/edit';
            $data['selPerfil'] = $this->Model_Usuario->selPerfil();
            $data['datosUsuario'] = $this->Model_Usuario->editUsuario($ci);
            $this->load->view('plantilla', $data);
        }else{
            redirect('');
        }
    }
    public function update(){
        $datos = $this->input->post();        
        if(isset($datos)){
            $ci = $datos['ci'];
            $nombre = $datos['nombre'];
            $fecha_nac = $datos['fecha_nac'];
            $telefono = $datos['telefono'];
            $departamento = $datos['departamento'];
            $this->Model_Usuario->updateUsuario($ci, $nombre, $fecha_nac, $telefono, $departamento);
            redirect('');
        }
    }
}
?>