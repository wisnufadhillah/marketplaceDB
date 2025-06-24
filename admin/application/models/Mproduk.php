<?php 
	class Mproduk extends CI_Model
	{
		
		function tampil()
		{
			$q = $this->db->get("produk")->result_array();
			$d = $q;
			return $d;
		}
	}	
