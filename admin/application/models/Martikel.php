<?php
class Martikel extends CI_Model
{

	function tampil()
	{
		$q = $this->db->get("artikel")->result_array();
		$d = $q;
		return $d;
	}


	function simpan($inputan)
	{
		$config['upload_path'] = $this->config->item('assets_artikel');
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$ngupload = $this->upload->do_upload('foto_artikel');

		if ($ngupload) {
			$inputan['foto_artikel'] = $this->upload->data('file_name');
		}
		$this->db->insert("artikel", $inputan);
	}

	function hapus($id_artikel)
	{
		$this->db->where("id_artikel", $id_artikel);
		$this->db->delete("artikel");
	}

	function detail($id_artikel)
	{
		$this->db->where("id_artikel", $id_artikel);
		return $this->db->get("artikel")->row_array();
	}

	function edit($inputan, $id_artikel)
	{
		$config['upload_path'] = $this->config->item('assets_artikel');
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$ngupload = $this->upload->do_upload('foto_artikel');

		if ($ngupload) {
			$inputan['foto_artikel'] = $this->upload->data('file_name');
		}
		$this->db->where("id_artikel", $id_artikel);
		$this->db->update("artikel", $inputan);
	}
}