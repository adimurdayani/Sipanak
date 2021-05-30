<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_model extends CI_Model {

  public function get_all_data_kode_penyakit()
  {
    return $this->db->get('kode_penyakit')->result_array();
    
  }

  public function get_all_data_kode_gejala()
  {
    return $this->db->get('kode_gejala')->result_array();
    
  }

  public function get_all_data_kode()
  {
    return $this->db->get('data_kode')->result_array();
      
  }

}

/* End of file Kode_model.php */