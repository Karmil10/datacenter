<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Daily3 extends CI_Controller {
public function view_daily3(){
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('daily/daily3');
		$this->load->view('background/footer');
	}

}