<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Daily2 extends CI_Controller {
public function view_daily2(){
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('daily/daily2');
		$this->load->view('background/footer');
	}

}