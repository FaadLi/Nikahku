<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMember extends CI_Controller {

	public function index()
	{
		$this->load->view('member/Home');
		$this->load->view('member/sidebar/Profil');
		$this->load->view('member/sidebar/Kategori');

		$this->load->view('member/Footer');
	}
}
