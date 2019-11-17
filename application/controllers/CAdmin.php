<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		// Load semua model yang dipakai
		// $this->load->model('kategori_model');
	}

	public function index()
	{
        $this->load->view('admin/header');
		$this->load->view('admin/home');

    }
}