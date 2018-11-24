<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diterima extends CI_Controller {
	
	public function index()
	{
		$data['content'] = 'admin/diterima';
		$this->load->view('template/home',$data);
	}
}
