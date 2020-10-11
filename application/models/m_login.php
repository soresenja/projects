<?php
	class M_login extends CI_model
	{
		function cek_login($where){
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where($where);
			return $this->db->get();
		}
	}
 ?>