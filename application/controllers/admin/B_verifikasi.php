<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class B_verifikasi extends CI_Controller {
	
	public function index()
	{
		$data['content'] = 'admin/b_verifikasi';
		$this->load->view('template/home',$data);
	}
}
