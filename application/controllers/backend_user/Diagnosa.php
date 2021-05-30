<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('diagnosa_model');
    if (!$this->session->userdata('usename')) {
      redirect('login_user');
    }
  }
  

  public function index()
  {
    $data['judul'] = 'Diagnosa';
    $data['data_gejala'] = $this->diagnosa_model->get_all_data_gejala();
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();
    

    $this->form_validation->set_rules('kode_id', 'kode_id', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
      # code...
      $this->load->view('frontend/template/head', $data, FALSE);
      $this->load->view('frontend/template/header', $data, FALSE);
      $this->load->view('frontend/template/side_bar', $data, FALSE);
      $this->load->view('frontend/template/top_bar', $data, FALSE);
      $this->load->view('frontend/diagnosa/index', $data, FALSE);
      $this->load->view('frontend/template/footer', $data, FALSE);
    } else {
      # code...
      
    }
  }

  public function hasil_diagnosa()
  {
    
    $data['judul'] = 'Diagnosa';
    $data['user_session'] = $this->db->get_where('user', ['usename' => $this->session->userdata('usename')])->row_array();

      $this->form_validation->set_rules('kode_id', 'kode_id', 'trim|required');
      $kode_id = $this->input->post('kode_id');
      $jumlah_dipilih = count($kode_id);
      
    for ($x=0; $x < $jumlah_dipilih; $x++) { 
        
        $query = $this->db->query("SELECT DISTINCT p.kode_id, p.nama, p.solusi FROM data_kode b, data_penyakit p WHERE b.kode_gejala='$kode_id[$x]' AND p.kode_id=b.kode_penyakit GROUP BY kode_id LIMIT 1");
        $data['hasil_diagnosa'] = $query->result_array();
      }
    $this->load->view('frontend/template/head', $data, FALSE);
    $this->load->view('frontend/template/header', $data, FALSE);
    $this->load->view('frontend/template/side_bar', $data, FALSE);
    $this->load->view('frontend/template/top_bar', $data, FALSE);
    $this->load->view('frontend/diagnosa/hasil_diagnosa', $data, FALSE);
    $this->load->view('frontend/template/footer', $data, FALSE);
      
    
  }

}

/* End of file Diagnosa.php */