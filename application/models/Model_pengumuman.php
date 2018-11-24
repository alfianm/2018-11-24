<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengumuman extends CI_Model
{
	public function tampil_data()
	{
		$query = $this->db->select('*')
		->from('pengumuman')
		->get();

		return $query->result_array();
	}
}