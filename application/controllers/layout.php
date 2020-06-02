<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class layout extends CI_Controller {
public function index(){
	
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('layout/dashboard');
		// $this->load->view('bersama/form_bersama',array('data' => $data));
		$this->load->view('layout/footer');
	}
}