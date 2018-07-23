<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

public Usuario_Model extends CI_Model{

    function __constructor(){
        parent:: __contruct();
    }

    public function getUsuarios(){
        return $this->db->get('TB_USUARIO')->result();
    }

}
?>