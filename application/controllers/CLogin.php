<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
				
		$this->load->library('form_validation');
		// $this->load->helper('MY');
		$this->load->model('member_model');
		$this->load->model('admin_model');
    }
    

	// >>> Login Member <<<
	public function index()
	{
		// $this->load->view('login/Login_member');
		$data['page_title'] = 'LogIn Member';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('login/Login_member', $data);
			
		}else{
		// $oi = 10;
		//  if ($oi==10) {

			// Get username
			$nama = $this->input->post('username');
			// Get password
			$password = $this->input->post('password');

			// $nama= "saya";
			// $password="123";
			// Login user
			$id = $this->member_model->login($nama, $password);
			echo json_encode($nama);

			if($id){
				// Buat session
				$user_data = array(
                    'id' => $id,
                    'nama' => $nama,
                    'namaWo' => $namaWo,
					'logged_in' => true,
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				redirect('CMember');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'Login invalid');

				redirect('CLogin');
			}		
		 }
        
	}
	// Member Logout
	public function logoutMember(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('namaWo');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

		redirect('CLogin');
	}
	
	// >>> Login Admin <<<
    public function loginAdmin(){
		// $this->load->view('login/Login_admin');
		
		$data['page_title'] = 'LogIn Admin';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('login/Login_admin', $data);
			
		}else{
		// $oi = 10;
		//  if ($oi==10) {

			// Get username
			$nama = $this->input->post('username');
			// Get password
			$password = $this->input->post('password');

			// $nama= "saya";
			// $password="123";
			// Login user
			$id = $this->admin_model->login($nama, $password);
			echo json_encode($nama);

			if($id){
				// Buat session
				$user_data = array(
                    'id' => $id,
                    'nama' => $nama,
					'logged_in' => true,
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'Anda sudah login');

				redirect('CAdmin');
			} else {
				// Set message
				$this->session->set_flashdata('login_failed', 'Login invalid');

				redirect('CLogin/loginAdmin');
			}		
		 }
	}
	
	public function logoutAdmin(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('namaWo');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

		redirect('CLogin/loginAdmin');
	}

}