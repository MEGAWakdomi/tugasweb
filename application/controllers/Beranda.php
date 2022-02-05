<?php

class Beranda extends CI_Controller{

public function __construct()
{
    parent::__construct();
    $this->load->model('Datamhs');
}

public function index(){
    $data['hasil'] = $this->Datamhs->ambildata();
    $this->load->view('Beranda_vw', $data);
}
}