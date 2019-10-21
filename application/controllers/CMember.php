<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMember extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Load custom helper applications/helpers/MY_helper.php
		// $this->load->helper('MY');
		$this->load->model('kategori_model');
	}

	public function index()
	{
		$this->load->view('member/sidebar/Sidebar');
		$this->load->view('member/Home');
		$this->load->view('member/sidebar/Profil');
		$this->load->view('member/sidebar/Kategori');

		$this->load->view('member/sidebar/dataTabel/DataTabel');
		$this->load->view('member/sidebar/dataTabel/Tabel');

		$this->load->view('member/Footer');
	}

	public function datatabel(){
		$this->load->view('member/sidebar/Sidebar');

		$this->load->view('member/Home');
		$this->load->view('member/sidebar/Profil');
		$this->load->view('member/sidebar/Kategori');

		$this->load->view('member/sidebar/dataTabel/DataTabel');
		$this->load->view('member/sidebar/dataTabel/Tabel');

		$this->load->view('member/Footer');
	}
	// Mendapatkan data Kategori dari database
	
	// DEKORASI
	public function getDekorasi(){
		$data= $this->kategori_model->get_all_dekorasi();
		echo json_encode($data);
	}
	public function createDekorasi()
	{
        // id_member
        // nama
        // keterangan 
        // harga
        // kat_warna
		// kat_jenis

		// $tabel = "dekorasi";
		// $id_member = "9";
		// $nama = "coba2";
		// $keterangan = "ini keterangan ke 2";
		// $harga = 9999;
		// $kat_warna = 2;
		// $kat_jenis = 2;

		$tabel =$this->input->post('tabel');
		$id_member = "9";
		$nama = $this->input->post('nama');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$kat_warna = $this->input->post('kat_warna');
		$kat_jenis = $this->input->post('kat_jenis');

		$result = $this->kategori_model->create_dekorasi($tabel,$id_member,$nama,$keterangan,$harga,$kat_warna,$kat_jenis);
		echo json_encode($result);
		// echo json_encode($tabel);
	}

	public function getPakaian(){
		$data= $this->kategori_model->get_all_pakaian();
		echo json_encode($data);
	}
	public function getUndangan(){
		$data= $this->kategori_model->get_all_undangan();
		echo json_encode($data);
	}
	public function getDokumentasi(){
		$data= $this->kategori_model->get_all_dokumentasi();
		echo json_encode($data);
	}
	public function getSouvenir(){
		$data= $this->kategori_model->get_all_souvenir();
		echo json_encode($data);
	}
	public function getCatering(){
		$data= $this->kategori_model->get_all_catering();
		echo json_encode($data);
	}

}
