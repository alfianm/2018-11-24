<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Model_siswa');
	}
	
	public function index()
	{
		$data['content'] = 'admin/user';
		$list['data'] = $this->Model_siswa->tampil_data();
		$this->load->view('template/home',$data,$list);
	}
}
