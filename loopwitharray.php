<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moto extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index(){
        
        $great = $this->db->get('customers');
        foreach ($great->result_array() as $value) {
            foreach ($value as $value1) {
                echo $value1;
            }
            echo '<hr/>';
        }
        
    }
}
