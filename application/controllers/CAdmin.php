<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		// Load semua model yang dipakai
		$this->load->model('kategori_model');
	}

	public function index()
	{

    $tabel = "catering";
    $data['catering'] = $this->kategori_model->get_count_kategori($tabel);

    $tabel = "dekorasi";
    $data['dekorasi'] = $this->kategori_model->get_count_kategori($tabel);

    $tabel = "undangan";
    $data['undangan'] = $this->kategori_model->get_count_kategori($tabel);

    $tabel = "pakaian";
    $data['pakaian'] = $this->kategori_model->get_count_kategori($tabel);

    $tabel = "souvenir";
    $data['souvenir'] = $this->kategori_model->get_count_kategori($tabel);

    $tabel = "dokumentasi";
    $data['dokumentasi'] = $this->kategori_model->get_count_kategori($tabel);

    $this->load->view('admin/template/header');
    $this->load->view('admin/home',$data);

    $this->load->view('admin/sidebar/dataKategori');
    $this->load->view('admin/sidebar/dataMember');
    $this->load->view('admin/sidebar/dataPesan');

    $this->load->view('admin/template/footer');

  }
}