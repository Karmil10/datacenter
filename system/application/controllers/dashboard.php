<?php 
defined ('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
function __construct()
	{
		parent::__construct();
		check_not_login();
		
	
		// $this->load->model('item_m');  kalo load 1 doank
	}

	public function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		// $this->load->view('layout/dashboard');
		$this->load->view('background/dashboard');
		$this->load->view('layout/footer');
		
		// $this->load->view('background/header');
		// $this->load->view('background/sidebar');
		// $this->load->view('background/top');
		// $this->load->view('background/dashboard');
		// $this->load->view('background/foot');
	}
	
}