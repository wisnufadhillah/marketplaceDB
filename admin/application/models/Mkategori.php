<?php
class Mkategori extends CI_Model
{

	function tampil()
	{
		$q = $this->db->get("kategori")->result_array();
		$d = $q;
		return $d;
	}


	function simpan($inputan)
	{
		$config['upload_path'] = $this->config->item('assets_kategori');
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$ngupload = $this->upload->do_upload('foto_kategori');

		if ($ngupload) {
			$inputan['foto_kategori'] = $this->upload->data('file_name');
		}
		$this->db->insert("kategori", $inputan);
	}

	function hapus($id_kategori)
	{
		$this->db->where("id_kategori", $id_kategori);
		$this->db->delete("kategori");
	}

	function detail($id_kategori)
	{
		$this->db->where("id_kategori", $id_kategori);
		return $this->db->get("kategori")->row_array();
	}

	function edit($inputan, $id_kategori)
	{
		$config['upload_path'] = $this->config->item('assets_kategori');
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$ngupload = $this->upload->do_upload('foto_kategori');

		if ($ngupload) {
			$inputan['foto_kategori'] = $this->upload->data('file_name');
		}
		$this->db->where("id_kategori", $id_kategori);
		$this->db->update("kategori", $inputan);
	}
}
