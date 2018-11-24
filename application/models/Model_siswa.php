<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model{

	function tampil_data(){
		$query = $this->db->select('*')
		->from('siswa')
		->get();

		return $query->result_array();
	}
}