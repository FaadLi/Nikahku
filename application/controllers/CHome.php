<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CHome extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		// Load semua model yang dipakai
		$this->load->model('kategori_model');
	}

	public function index()
	{
		// $this->load->view('Home');
		$this->load->view('Kategori');
	}
	public function kategori() 
	{

		// Dapatkan semua kategori
		$data['categories'] = $this->kategori_model->get_all_dekorasi();


		$this->load->view('Kategori', $data);

	}
}
