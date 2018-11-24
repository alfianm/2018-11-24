<?php  

Class Login extends CI_Controller {

  function __construct(){

    parent::__construct();
    $this->load->model('Model_login');
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
      $data['pesan']="Username atau Password Anda Salah";
      $this->load->view('login',$data);
    }


  }


  function logout(){
      $this->session->sess_destroy();
      redirect('login');
    }


}





?>