<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  public function get_all_data()
  {
    $query = "SELECT `user`.*, `user_role`.`tipe_user`
                FROM `user` JOIN `user_role`
                  ON `user`.`user_id` = `user_role`.`id`
              ORDER BY `user`.`id` ASC
            ";
    return $this->db->query($query)->result_array();
    
  }

  public function update_data($data, $id)
  { 
    $this->db->where('id', $id);
    $this->db->update('user', $data);
    return true;
  }

  public function update_user_role($data, $id)
  { 
    $this->db->where('id', $id);
    $this->db->update('user_role', $data);
    return true;
  }

  public function get_all_user_id()
  {
    return $this->db->get('user_role')->result_array();
  }

}

/* End of file User_model.php */