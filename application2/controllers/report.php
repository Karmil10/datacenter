<?php 


/**
 * 
 */
class Report extends Ci_Controller
{
	
	// public function index()
	// {
	// 	$data['']
	// 	$this->load->view('laporan/report');
	// }

	public function index()
	{
		$d['dc_access_log'] = $this->model_report->tampil_data();
		
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('report', $d);
		$this->load->view('background/foot');

	}
	

	public function cari(){
		$keyword = $this->input->post('keyword');
		$data['dc_access_log']=$this->model_report->get_keyword($keyword);
		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top');
		$this->load->view('tamu/form_tamu2',$data);
		$this->load->view('background/foot');
	}

	public function search(){
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		
		$d['dc_access_log']=$this->model_report->search();
		
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('laporan/form_laporan2', $d);
		$this->load->view('background/foot');
	}

	
}

