<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
    if (!$this->session->userdata('usename')) {
      redirect('auth/login_admin');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'User';
    $data['user_data'] = $this->user_model->get_all_data();
    $data['tipe_user'] = $this->user_model->get_all_user_id();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('usename', 'username', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[konf_pass]');
    $this->form_validation->set_rules('konf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');
    $this->form_validation->set_rules('user_active', 'aktifasi user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_user/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'usename' => htmlspecialchars($this->input->post('usename', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'user_id' => $this->input->post('user_id'),
        'user_active' => $this->input->post('user_active'),
        'user_update' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('user', $data);
      $this->session->set_flashdata('pesan', 'Ditambah');    
      redirect('backend_admin/user');
    }
  }

  public function update_user()
  {
    $data['judul'] = 'User';
    $data['user_data'] = $this->user_model->get_all_data();
    $data['tipe_user'] = $this->user_model->get_all_user_id();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('usename', 'username', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]|max_length[12]|matches[konf_pass]');
    $this->form_validation->set_rules('konf_pass', 'konfirmasi password', 'trim|required|min_length[5]|max_length[12]|matches[password]');
    $this->form_validation->set_rules('user_active', 'aktifasi user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_user/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $id  = $this->input->post('id');
      
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'usename' => htmlspecialchars($this->input->post('usename', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'user_id' => $this->input->post('user_id'),
        'user_active' => $this->input->post('user_active'),
        'user_update' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->where('id', $id);
      $this->db->update('user', $data);
      
      $this->session->set_flashdata('pesan', 'Diubah');    
      redirect('backend_admin/user');
    }
  }

  public function delete_data($id)
  {
    $this->db->delete('user', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend_admin/user');
  }
}

/* End of file User.php */