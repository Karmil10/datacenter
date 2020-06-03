<?php 

class Dashboard2 extends CI_Controller
{
	function __construct() {
		parent::__construct();
		if (!isset($this->session->userdata['username']))
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Silahkan Login
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('administrator/auth');
		}
	}


	public function index()
	{
		$data = $this->user_model->ambil_data($this->session->userdata['username']);
		$data = array(
				'username' => $data->username,
				'level'   => $data->level
			);
		$dt['s']=$this->mymodel->Getaccess_dc5()->num_rows();
		$dt['w']=$this->mymodel->Getaccess_dc6()->num_rows();
		$dt['r']=$this->mymodel->Getaccess_dc7()->num_rows();
		$dt['z']=$this->mymodel->Getaccess_dc8()->num_rows();

		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top2',$data);
		$this->load->view('background/dashboard3',$dt);
		$this->load->view('background/footer');
	}

	// public function tanggal()
	// {
	// 	$data = $this->
	// }

	
}