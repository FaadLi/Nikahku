<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdmin extends CI_Controller {

		public function __construct()
	{
		parent::__construct();

		// Load semua model yang dipakai
		$this->load->model('admin_model');
	}

	public function index()
	{

		// Must login
		if(!$this->session->userdata('logged_in')) 
			redirect('CLogin/LoginAdmin');

		$id = $this->session->userdata('id');

		
		// Dapatkan detail dari User
		$data['user'] = $this->admin_model->get_user_details( $id );



    $tabel = "catering";
    $data['catering'] = $this->admin_model->get_count_kategori($tabel);

    $tabel = "dekorasi";
    $data['dekorasi'] = $this->admin_model->get_count_kategori($tabel);

    $tabel = "undangan";
    $data['undangan'] = $this->admin_model->get_count_kategori($tabel);

    $tabel = "pakaian";
    $data['pakaian'] = $this->admin_model->get_count_kategori($tabel);

    $tabel = "souvenir";
    $data['souvenir'] = $this->admin_model->get_count_kategori($tabel);

    $tabel = "dokumentasi";
    $data['dokumentasi'] = $this->admin_model->get_count_kategori($tabel);

    // Dapatkan kategori
		$tabel = "dekorasi";
		// $tabel = $tabel;

		$data['categories'] = $this->admin_model->get_kategori($tabel);

    $this->load->view('admin/template/header',$data, FALSE);
    $this->load->view('admin/home',$data, FALSE);

    $this->load->view('admin/sidebar/dataKategori',$data, FALSE);
    $this->load->view('admin/sidebar/dataMember',$data, FALSE);
    $this->load->view('admin/sidebar/dataPesan',$data, FALSE);

    $this->load->view('admin/template/footer',$data, FALSE);

  }

  // DEKORASI
	public function getMember(){
		$data= $this->admin_model->get_member();
		echo json_encode($data);
	}
	public function createMember()
	{
		// nama namaWO email password
		// $nama			= "cobaya"; 
		// $namaWo 	= "WO";
		// $email 		= "WO@gmail.com";
		// $password = "123";

		
		$namaWo 	= $this->input->post('namaWo');
		$nama			= $this->input->post('nama');
		$email 		= $this->input->post('email');
		$password = $this->input->post('password');

		$result = $this->admin_model->create_member($namaWo,$nama,$email,$password);
		echo json_encode($result);
		// echo json_encode($tabel);
	}

	public function deleteMember()
	{
		// $id = 12;
		$id 	= $this->input->post('id');


		$data = $this->admin_model->delete_member($id);
			echo json_encode($data);
		
	}
  
}