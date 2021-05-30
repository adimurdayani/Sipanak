<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('penyakit_model');
    
    if (!$this->session->userdata('usename')) {
      redirect('auth/login_admin');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'Data Penyakit';
    $data['data_penyakit'] = $this->penyakit_model->get_all_data();
    $data['data_kode'] = $this->penyakit_model->get_all_data_kode();
    $data['kode_gejala'] = $this->penyakit_model->get_all_data_kode_gejala();
    $data['data_tipe'] = $this->penyakit_model->get_all_data_tipe();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_id', 'kode penyakit', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama penyakit', 'trim|required');
    $this->form_validation->set_rules('tipe', 'tipe penyakit', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_penyakit/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      $data = [
        'kode_id' => $this->input->post('kode_id'),
        'nama' => $this->input->post('nama'),
        'tipe' => $this->input->post('tipe'),
        'solusi' => $this->input->post('solusi'),
        'updated_at' => format_indo(date("Y-m-d"))
      ];
      $this->db->insert('data_penyakit', $data);
      $this->session->set_flashdata('pesan', 'Ditambah'); 
      redirect('backend_admin/penyakit');
      
    }
    
  }

  public function update_data()
  {
    $data['judul'] = 'Data Penyakit';
    $data['data_penyakit'] = $this->penyakit_model->get_all_data();
    $data['data_kode'] = $this->penyakit_model->get_all_data_kode();
    $data['kode_gejala'] = $this->penyakit_model->get_all_data_kode_gejala();
    $data['data_tipe'] = $this->penyakit_model->get_all_data_tipe();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_id', 'kode penyakit', 'trim|required');
    $this->form_validation->set_rules('nama', 'nama penyakit', 'trim|required');
    $this->form_validation->set_rules('tipe', 'tipe penyakit', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_penyakit/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      $id = $this->input->post('id');
      
      $data = [
        'kode_id' => $this->input->post('kode_id'),
        'nama' => $this->input->post('nama'),
        'tipe' => $this->input->post('tipe'),
        'solusi' => $this->input->post('solusi'),
        'updated_at' => format_indo(date("Y-m-d"))
      ];

      $this->db->where('id', $id);      
      $this->db->update('data_penyakit', $data);
      $this->session->set_flashdata('pesan', 'Diubah'); 
      redirect('backend_admin/penyakit');
      
    }
  }

  public function delete_data($id)
  {
    $this->db->delete('data_penyakit', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Diubah');
    redirect('backend_admin/penyakit');
    
  }

}

/* End of file Penyakit.php */