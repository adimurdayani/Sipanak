<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

  public function index()
  {
    $data['judul'] = 'Login';

    $this->form_validation->set_rules('usename', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('auth/template/header', $data, FALSE);
      $this->load->view('auth/login_admin/index', $data, FALSE);
      $this->load->view('auth/template/footer', $data, FALSE);
    } else {
      $this->_login();
    }    
  }
  private function _login(){
    $username = $this->input->post('usename');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['usename' => $username])->row_array();

    if ($user) {
      if ($user['user_active'] == 1) {
        # code...
        if (password_verify($password, $user['password'])) {
          # code...
          $data = [
            'usename' => $user['usename'],
            'user_id' => $user['user_id']
          ];

          $this->session->set_userdata($data);
          if ($user['user_id'] == 1) {
            # code...
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang di dashboard admin!</div>');
            
            redirect('backend_admin/dashboard');
            
          }else {
            
            redirect('auth/login_admin');
            
          }
        }else{
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
          
          redirect('auth/login_admin','refresh');
          
        }
      }else{
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This username has not been activated!</div>');
        redirect('auth/login_admin','refresh');
      }
    }else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
      redirect('auth/login_admin','refresh');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('usename');
    $this->session->unset_userdata('user_id');

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah berhasil logout!</div>');
    redirect('auth/login_admin');
  }

}

/* End of file Login_admin.php */