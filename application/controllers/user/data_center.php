<?php 

/**
 * 
 */
class Data_center extends CI_controller
{
	

	public function index()
	{
		$data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();
		$this->load->view('templates_user/header');
		
		$this->load->view('user/dc', $data);
		$this->load->view('templates_user/footer');
	}

	// public function detail_mobil($id)
	// {
	// 	$data['detail'] = $this->rental_model->ambil_id_mobil($id);

	// 	$this->load->view('templates_customer/header');
		
	// 	$this->load->view('customer/detail_mobil', $data);
	// 	$this->load->view('templates_customer/footer');
	// }

	
}