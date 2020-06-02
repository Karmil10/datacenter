
<?php 


class Dashboard extends CI_controller
{

public function index()
	{
		$data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();
		$this->load->view('templates_user/v_head');  
		$this->load->view('templates_user/v_header');  
		$this->load->view('templates_user/v_nav_user'); 
		$this->load->view('user/dashboard_user', $data);  
		$this->load->view('templates_user/v_footer'); 
	}

}