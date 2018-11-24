<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_pesan');
	}
	
	public function index()
	{
		$data['content'] = 'admin/pesan';
		$data['data'] = $this->Model_pesan->tampil_data();
		$this->load->view('template/home',$data);
	}
}
