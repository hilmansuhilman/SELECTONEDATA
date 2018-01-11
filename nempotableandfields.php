<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moto extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index(){
        
        foreach ($this->db->list_tables() as $value) {
            echo '<u>'.$value.'</u><br/><br/>';
            foreach ($this->db->list_fields($value) as $value1) {
                echo $value1.'<br/>';
            }
            echo '<hr/>';
        }
        
    }
}
