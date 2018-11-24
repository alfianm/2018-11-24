<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pesan extends CI_Model
{
	public function tampil_data()
	{
		$query = $this->db->select('*')
		->from('pesan')
		->get();

		return $query->result_array();
	}
}