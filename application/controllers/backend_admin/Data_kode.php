<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kode extends CI_Controller {

  
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
    $data['judul'] = 'Data Kode';
    $data['data_kode'] = $this->kode_model->get_all_data_kode();
    $data['kode_penyakit'] = $this->db->get('kode_penyakit')->result_array();
    $data['kode_gejala'] = $this->db->get('kode_gejala')->result_array();
    
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_penyakit', 'kode penyakit', 'trim|required');
    $this->form_validation->set_rules('kode_gejala', 'kode gejala', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_kode/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $data = [
        'kode_penyakit' => $this->input->post('kode_penyakit'),
        'kode_gejala' => $this->input->post('kode_gejala'),
        
      ];

      $this->db->insert('data_kode', $data);
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('backend_admin/data_kode');
      
    }
  }

  public function update_data()
  {
    $data['judul'] = 'Data Kode';
    $data['data_kode'] = $this->kode_model->get_all_data_kode();
    $data['kode_penyakit'] = $this->db->get('kode_penyakit')->result_array();
    $data['kode_gejala'] = $this->db->get('kode_gejala')->result_array();
    
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

    $this->form_validation->set_rules('kode_penyakit', 'kode penyakit', 'trim|required');
    $this->form_validation->set_rules('kode_gejala', 'kode gejala', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('backend/template/head', $data, FALSE);
      $this->load->view('backend/template/header', $data, FALSE);
      $this->load->view('backend/template/side_bar', $data, FALSE);
      $this->load->view('backend/template/top_bar', $data, FALSE);
      $this->load->view('backend/data_kode/index', $data, FALSE);
      $this->load->view('backend/template/footer', $data, FALSE);
    } else {
      # code...
      $id = $this->input->post('id');
      
      $data = [
        'kode_penyakit' => $this->input->post('kode_penyakit'),
        'kode_gejala' => $this->input->post('kode_gejala'),
        
      ];

      $this->db->where('id', $id);
      $this->db->update('data_kode', $data);
      $this->session->set_flashdata('pesan', 'Diubah');
      redirect('backend_admin/data_kode');
      
    }
  }

  public function delete_data($id)
  {
    $this->db->delete('data_kode', ['id' => $id]);
    $this->session->set_flashdata('pesan', 'Diubah');
    redirect('backend_admin/data_kode');
  }

}

/* End of file Data_kode.php */