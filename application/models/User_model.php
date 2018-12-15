<?php
	if(!defined('BASEPATH'))
		exit('manipulasi script secara langsung tak diperbolehkan');
	class User_model extends CI_Model{

		public function register_user($userData){
			$this->db->insert('user', $userData);
		}
 
		public function login($login_data){
 
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('username',$login_data['username']);
			$this->db->where('password',$login_data['password']);
			$query=$this->db->get();
			if($query->num_rows()>0)
				return TRUE;
			else
				return FALSE;
		}
		public function input_data($DO_data){
			$this->db->insert('nilai', $DO_data);
		}
		public function show_DO($NIM){
			$this->db->select('*');
			$this->db->from('nilai');
			$this->db->where('NIM',$NIM);
			$hasil=$this->db->get()->result_array();
			return $hasil;
		} 
 
	}
 
 
?>