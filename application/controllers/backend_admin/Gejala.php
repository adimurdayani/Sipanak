<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('gejala_model');
    
    if (!$this->session->userdata('usename')) {
      redirect('auth/login_admin');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'Data Gejala';
    $data['data_gejala'] = $this->gejala_model->get_all_data_gejala();
    $data['kode_gejala'] = $this->gejala_model->get_all_data_kode_gejala();
    $data['tipe'] = $this->gejala_model->get_all_data_tipe();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_id', 'kode gejala', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_gejala/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'kode_id' => $this->input->post('kode_id'),
        'nama' => $this->input->post('nama'),
        'tipe' => $this->input->post('tipe'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->insert('data_gejala', $data);
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('backend_admin/gejala');
      
    }
  }

  public function update_data()
  {
    $data['judul'] = 'Data Gejala';
    $data['data_gejala'] = $this->gejala_model->get_all_data_gejala();
    $data['kode_gejala'] = $this->gejala_model->get_all_data_kode_gejala();
    $data['tipe'] = $this->gejala_model->get_all_data_tipe();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_id', 'kode gejala', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('tipe', 'tipe', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_gejala/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'kode_id' => $this->input->post('kode_id'),
        'nama' => $this->input->post('nama'),
        'tipe' => $this->input->post('tipe'),
        'updated_at' => format_indo(date("Y-m-d"))
        
      ];

      $this->db->where('id', $id);      
      $this->db->update('data_gejala', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend_admin/gejala');
      
    }
  }

  public function delete_data( $id)
  {
    $this->db->delete('data_gejala', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('backend_admin/gejala');
  }

}

/* End of file Gejala.php */