<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model{

	function tampil_data(){
		$query = $this->db->select('*')
		->from('wali_siswa')
		->join('siswa','siswa.kd_daftar = wali_siswa.kd_daftar','left')
		->get();

		return $query->result_array();
	}
}