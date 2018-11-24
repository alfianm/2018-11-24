<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function index()
	{
		$data['content'] = 'admin/dashboard';
		$this->load->view('template/home',$data);
	}
}
