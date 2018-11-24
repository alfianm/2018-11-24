<?php  

Class Login extends CI_Controller {

  function __construct(){

    parent::__construct();
    $this->load->model('Model_login');
    $this->load->helper('url','html');
  }

  function index(){
    $this->load->view('login');
  }

  function proses_login(){
    $user=$this->input->post('username');
    $pass=$this->input->post('password');

    $ceklogin = $this->Model_login->login($user,$pass);

    if($ceklogin){
      foreach($ceklogin as $row);
      $this->session->set_userdata('username', $row->username);
      $this->session->set_userdata('level', $row->level);

      if($this->session->userdata('level')=="Admin"){
        redirect('admin/dashboard');
      }elseif($this->session->userdata('level')=="Petugas"){
        redirect('petugas/verifikasi');
      }
    }else{
     $this->session->set_flashdata('pesan','Username dan Password salah!');
     redirect(base_url('login'),'refresh');
    }


  }


  function logout(){
      $this->session->sess_destroy();
      redirect('login');
    }


}





?>