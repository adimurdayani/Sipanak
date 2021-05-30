<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_role extends CI_Controller {

  
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
    $data['judul'] = 'Tipe';
    $data['user_role'] = $this->user_model->get_all_user_id();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('tipe_user', 'tipe user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_role/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'tipe_user' => $this->input->post('tipe_user'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('user_role', $data);
      $this->session->set_flashdata('pesan', 'Ditambah');    
      redirect('backend_admin/user_role');
    }
  }

  public function update_data()
  {
    $data['judul'] = 'Tipe';
    $data['user_role'] = $this->user_model->get_all_user_id();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('tipe_user', 'tipe user', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_role/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'tipe_user' => $this->input->post('tipe_user'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->user_model->update_user_role($data,$id);
      $this->session->set_flashdata('pesan', 'Diubah');    
      redirect('backend_admin/user_role');
    }
  }

  public function delete_data( $id)
  {
    $this->db->delete('user_role', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');    
    redirect('backend_admin/user_role');
    
  }

}

/* End of file User_role.php */