<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_gejala extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kode_model');
    
    if (!$this->session->userdata('usename')) {
      redirect('auth/login_admin');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'Kode Gejala';
    $data['data_kode'] = $this->kode_model->get_all_data_kode_gejala();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_gejala', 'kode gejala', 'trim|required');
    
    if ($this->form_validation->run() ==  FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_kode/kode_gejala', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
      
    } else {
      $data = [
        'kode_gejala' => $this->input->post('kode_gejala'),
        'updated_at' => format_indo(date("Y-m-d"))
      ];

      $this->db->insert('kode_gejala', $data);
      $this->session->set_flashdata('pesan', 'Ditambah'); 
      redirect('backend_admin/kode_gejala');
    }
  }

  public function update_data()
  {
    $data['judul'] = 'Kode Gejala';
    $data['data_kode'] = $this->kode_model->get_all_data();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();
    $this->form_validation->set_rules('kode_gejala', 'kode gejala', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_kode/kode_gejala', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      
      $id = $this->input->post('id');
      
      $data = [
        'kode_gejala' => $this->input->post('kode_gejala'),
        'updated_at' => format_indo(date("Y-m-d"))
      ];

      $this->db->where('id', $id);
      $this->db->update('kode_gejala', $data);
      $this->session->set_flashdata('pesan', 'Diubah'); 
      redirect('backend_admin/kode_gejala');
    }
  }

  public function delete_data( $id)
  {
    $this->db->delete('kode_gejala', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend_admin/kode_gejala');
  }

}

/* End of file Rule.php */