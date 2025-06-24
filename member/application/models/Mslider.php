<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class Mslider extends CI_Model {
    function tampil()
	{
		$q = $this->db->get("slider")->result_array();
		$d = $q;
		return $d;
	}
}
?>