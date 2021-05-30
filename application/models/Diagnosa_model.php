<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa_model extends CI_Model {

  public function get_all_data_gejala()
  {
    return $this->db->get('data_gejala')->result_array();
    
  }

}

/* End of file Diagnosa_model.php */