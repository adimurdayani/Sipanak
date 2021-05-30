<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

  public function get_jumlah_data_penyakit()
  {
    return $this->db->get('data_penyakit')->num_rows();
    
  }

  public function get_jumlah_data_gejala()
  {
    return $this->db->get('data_gejala')->num_rows();
    
  }

  public function get_jumlah_kode_penyakit()
  {
    return $this->db->get('kode_penyakit')->num_rows();
    
  }

  public function get_jumlah_kode_gejala()
  {
    return $this->db->get('kode_gejala')->num_rows();
    
  }

  public function get_jumlah_data_user()
  {
    return $this->db->get('user')->num_rows();
    
  }

}

/* End of file Dashboard_model.php */