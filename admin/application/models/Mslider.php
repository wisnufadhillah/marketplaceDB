<?php
class Mslider extends CI_Model
{

	function tampil()
	{
		$q = $this->db->get("slider")->result_array();
		$d = $q;
		return $d;
	}


	function simpan($inputan)
	{
		$config['upload_path'] = $this->config->item('assets_slider');
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$ngupload = $this->upload->do_upload('foto_slider');

		if ($ngupload) {
			$inputan['foto_slider'] = $this->upload->data('file_name');
		}
		$this->db->insert("slider", $inputan);
	}

	function hapus($id_slider)
	{
		$this->db->where("id_slider", $id_slider);
		$this->db->delete("slider");
	}

	function detail($id_slider)
	{
		$this->db->where("id_slider", $id_slider);
		return $this->db->get("slider")->row_array();
	}

	function edit($inputan, $id_slider)
	{
		$config['upload_path'] = $this->config->item('assets_slider');
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$ngupload = $this->upload->do_upload('foto_slider');

		if ($ngupload) {
			$inputan['foto_slider'] = $this->upload->data('file_name');
		}
		$this->db->where("id_slider", $id_slider);
		$this->db->update("slider", $inputan);
	}
}