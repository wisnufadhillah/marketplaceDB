<?php
class Mkategori extends CI_Model
{

	function tampil()
	{
		$q = $this->db->get("kategori")->result_array();
		$d = $q;
		return $d;
	}

	function detail($id_kategori)
	{
		$this->db->where("id_kategori", $id_kategori);
		return $this->db->get("kategori")->row_array();
	}

	function produk($id_kategori)
	{
		$this->db->where('id_produk', $id_kategori);
		$q = $this->db->get('produk');
		$d = $q->result_array();

		return $d;
	}
}
