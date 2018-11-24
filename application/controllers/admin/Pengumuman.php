<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_pengumuman');
	}
	
	public function index()
	{
		$data['content'] = 'admin/pengumuman';
		$data['data'] = $this->Model_pengumuman->tampil_data();
		$this->load->view('template/home',$data);
	}
}
