<?php

class Coba extends CI_Controller{
    function index(){
        $this->load->model('tampildata');
        $data['query'] = $this->tampildata->tampila();

                $this->load->view('tampil', $data);
    }
}

