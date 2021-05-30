<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala_model extends CI_Model {

  public function get_all_data_gejala()
  {
    return $this->db->get('data_gejala')->result_array();
    
  }

  public function get_all_data_kode_gejala()
  {
    return $this->db->get('kode_gejala')->result_array();
    
  }

  public function get_all_data_tipe()
  {
    return $this->db->get('tipe')->result_array();
    
  }

}

/* End of file Gejala_model.php */