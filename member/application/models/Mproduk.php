<?php
class Mproduk extends CI_Model
{

	function tampil()
	{
		$q = $this->db->get("produk")->result_array();
		$d = $q;
		return $d;
	}

	function tampil_produk_terbaru()
	{
		$this->db->order_by("id_produk", "desc");
		$q = $this->db->get("produk",4,0)->result_array();
		$d = $q;
		return $d;
	}

	function produk_member($id_member)
	{
		$this->db->where("id_member", $id_member);
		$q = $this->db->get("produk")->result_array();
		$d = $q;
		return $d;
	}

	function simpan($inputan)
	{
		$config['upload_path'] = $this->config->item('assets_produk');
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload('foto_produk');

		if ($ngupload) {
			$inputan['foto_produk'] = $this->upload->data('file_name');
		}

		$inputan['id_member'] = $this->session->userdata('id_member');

		$this->db->insert("produk", $inputan);
	}

	function detail($id_produk)
	{
		$this->db->where("id_member", $this->session->userdata("id_member"));
		$this->db->where("id_produk", $id_produk);
		$this->db->join("kategori", "produk.id_kategori = kategori.id_kategori", "left");
		$q = $this->db->get("produk")->row_array();
		$d = $q;
		return $d;
	}

	function ubah($inputan, $id_produk)
	{
		$config['upload_path'] = $this->config->item('assets_produk');
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		$ngupload = $this->upload->do_upload('foto_produk');

		if ($ngupload) {
			$inputan['foto_produk'] = $this->upload->data('file_name');
		}

		$inputan['id_member'] = $this->session->userdata('id_member');

		$this->db->where("id_member", $this->session->userdata("id_member"));
		$this->db->where('id_produk', $id_produk);
		$this->db->update('produk', $inputan);
	}

	function hapus($id_produk)
	{
		$this->db->where("id_member", $this->session->userdata("id_member"));
		$this->db->where("id_produk", $id_produk);
		$this->db->delete("produk");
	}

	function detail_umum($id_produk)
	{
		$this->db->where("id_produk", $id_produk);
		$this->db->join("kategori", "produk.id_kategori = kategori.id_kategori", "left");
		$q = $this->db->get("produk")->row_array();
		$d = $q;
		return $d;
	}
}