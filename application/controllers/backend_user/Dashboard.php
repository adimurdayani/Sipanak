<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('dashboard_model');
    if (!$this->session->userdata('usename')) {
      redirect('login_user');
    }
  }
  
  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['data_penyakit'] = $this->dashboard_model->get_jumlah_data_penyakit();
    $data['data_gejala'] = $this->dashboard_model->get_jumlah_data_gejala();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();
    $this->load->view('frontend/template/head', $data, FALSE);
    $this->load->view('frontend/template/header', $data, FALSE);
    $this->load->view('frontend/template/side_bar', $data, FALSE);
    $this->load->view('frontend/template/top_bar', $data, FALSE);
    $this->load->view('frontend/index', $data, FALSE);
    $this->load->view('frontend/template/footer', $data, FALSE);
    
  }

}

/* End of file Dashboard.php */