<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Walisiswa extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('Model_wali_siswa');
	}
	
	public function index()
	{
		$data['content'] = 'admin/walisiswa';
		$data['data'] = $this->Model_wali_siswa->tampil_data();
		$this->load->view('template/home',$data);
	}
}
