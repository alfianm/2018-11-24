<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ditolak extends CI_Controller {
	
	public function index()
	{
		$data['content'] = 'admin/ditolak';
		$this->load->view('template/home',$data);
	}
}
