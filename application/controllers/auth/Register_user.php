<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Controller {

  public function index()
  {
    $data['judul'] = 'Registrasi';

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('usename', 'username', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[konf_pass]');
    $this->form_validation->set_rules('konf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('auth/template/header', $data, FALSE);
      $this->load->view('auth/register_user/index', $data, FALSE);
      $this->load->view('auth/template/footer', $data, FALSE);
    } else {
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'usename' => htmlspecialchars($this->input->post('usename', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'user_id' => 2,
        'user_active' => 1,
        'user_update' => format_indo(date("Y-m-d"))
        
      ];
      
      $this->db->insert('user', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registrasi akun success!</div>');
      redirect('login_user');
    }
  }

}

/* End of file Register_user.php */