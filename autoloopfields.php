<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Moto extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index(){
        
        $great = $this->db->get('customers');
        while($row = $great->unbuffered_row()){
        foreach ($great->list_fields() as $value) {    
                echo $row->$value.' | ';                
        } 
        echo '<hr/>';
        }
    }
}
