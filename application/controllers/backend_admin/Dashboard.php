<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('dashboard_model');
    
    if (!$this->session->userdata('usename')) {
      redirect('auth/login_admin');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['data_penyakit'] = $this->dashboard_model->get_jumlah_data_penyakit();
    $data['data_gejala'] = $this->dashboard_model->get_jumlah_data_gejala();
    $data['kode_penyakit'] = $this->dashboard_model->get_jumlah_kode_penyakit();
    $data['kode_gejala'] = $this->dashboard_model->get_jumlah_kode_gejala();
    $data['data_user'] = $this->dashboard_model->get_jumlah_data_user();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();
    $this->load->view('backend/template/head', $data, FALSE);
    $this->load->view('backend/template/header', $data, FALSE);
    $this->load->view('backend/template/side_bar', $data, FALSE);
    $this->load->view('backend/template/top_bar', $data, FALSE);
    $this->load->view('backend/index', $data, FALSE);
    $this->load->view('backend/template/footer', $data, FALSE);
    
  }

}

/* End of file Dashboard.php */