<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __constructor(){
        parent::__construct();
        $this->load->model("Classe");
        $this->load->model("usuario/Usuario_Model", "userModel");
    }

	public function index()	{
        $usuarios = $this->userModel->getUsuarios();
        $data['usuarios'] = $usuarios;
        $this->load->view('usuario/lista',$data, FALSE);
	}
}

?>