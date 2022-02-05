<?php

class Datamhs  extends CI_Model
{


    public function __construnst()
    {
        parent::__construct();
        $this->load->library('parser');
    }

    public function ambildata()
    {
        $data = $this->db->get('datamhs');
        return $data->result_array();  

    }
}
?>