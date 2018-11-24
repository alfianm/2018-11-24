<?php  

	Class Model_login extends CI_Model{

		function login($user,$pass){

			$this->db->select('username,password,level');
			$this->db->from('user');
			$this->db->where('username',$user);
			$this->db->where('password',$pass);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows()==1){
				return $query->result();
			}else{
				return false;
			}
		}

		function data_siswa(){
			$this->db->select('*');
			$this->db->from('siswa');
			$this->db->order_by('kd_daftar','asc');
			$data = $this->db->get('');
			return $data;
		}
	}



?>