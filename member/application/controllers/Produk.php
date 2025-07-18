<?php
class Produk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("id_member")) {
			$this->session->set_flashdata('pesan_gagal', 'Anda harus login terlebih dahulu');
			redirect('/', 'refresh');
		}
	}
	function index()
	{

		$this->load->model("Mproduk");
		$data["produk"] = $this->Mproduk->tampil();

		$this->load->view("header");
		$this->load->view("produk_tampil", $data);
		$this->load->view("footer");
	}
	function detail($id_produk)
	{
		$this->load->model('Mproduk');
		$data['produk'] = $this->Mproduk->detail_umum($id_produk);



		$inputan = $this->input->post();
		if ($inputan) {
			$this->load->model('Mkeranjang');
			$this->Mkeranjang->simpan($inputan, $id_produk);


			$this->session->set_flashdata('pesan_sukses', 'Produk berhasil ditambahkan ke keranjang');
			redirect('keranjang', 'refresh');
		}

		$this->load->view('header');
		$this->load->view('produk_detail', $data);
		$this->load->view('footer');
	}
	function cari()
	{
		$keyword = $this->input->get('keyword');
		$this->load->model('Mproduk');
		$data['produk'] = $this->Mproduk->cari($keyword);
		$data['keyword'] = $keyword;		

		if (empty($data['produk'])) {
			$this->session->set_flashdata('pesan_gagal', 'Produk tidak ditemukan');
			redirect('welcome', 'refresh');
		} else {
			$this->load->view('header');
			$this->load->view('produk_cari', $data);
			$this->load->view('footer');
		}
	}
}