<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	public function index()
	{
        $this->load->view('login/Login_member');
        
    }
    public function loginAdmin(){
        $this->load->view('login/Login_admin');
    }
}