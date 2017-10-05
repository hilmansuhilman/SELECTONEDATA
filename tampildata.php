<?php

class Tampildata extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function tampila(){
        $data = $this->db->where('id_cpanel', 1)->get('cpanel');;
        return $data->row();
       
    }
}