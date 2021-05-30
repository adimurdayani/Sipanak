<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('usename')) {
      redirect('auth/login_admin');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'Profile';
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();
    $this->load->view('backend/template/head', $data, FALSE);
    $this->load->view('backend/template/header', $data, FALSE);
    $this->load->view('backend/template/side_bar', $data, FALSE);
    $this->load->view('backend/template/top_bar', $data, FALSE);
    $this->load->view('backend/data_profile/index', $data, FALSE);
    $this->load->view('backend/template/footer', $data, FALSE);
  }

}

/* End of file Profile.php */