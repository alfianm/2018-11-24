<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {
	
	public function index()
	{
		$data['content'] = 'petugas/verifikasi';
		$this->load->view('template/home',$data);
	}
}
