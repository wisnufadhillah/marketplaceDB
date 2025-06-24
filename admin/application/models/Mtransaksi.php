<?php
class Mtransaksi extends CI_Model
{

	function tampil()
	{
		$q = $this->db->get("transaksi")->result_array();
		$d = $q;
		return $d;
	}

	function transaksi_member_jual($id_member)
	{
		$this->db->where("id_member_jual", $id_member);
		$q = $this->db->get("transaksi")->result_array();
		$d = $q;
		return $d;
	}

	function transaksi_member_beli($id_member)
	{
		$this->db->where("id_member_beli", $id_member);
		$q = $this->db->get("transaksi")->result_array();
		$d = $q;
		return $d;
	}

	function detail($id_transaksi)
	{
		$this->db->where("id_transaksi", $id_transaksi);
		$d =  $this->db->get("transaksi")->row_array();
		return $d;
	}

	function transaksi_detail($id_transaksi)
	{
		$this->db->where("id_transaksi", $id_transaksi);
		$d =  $this->db->get("transaksi_detail")->result_array();
		return $d;
	}
}
