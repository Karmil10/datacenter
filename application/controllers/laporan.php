<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller {
public function view_laporan(){
	$data = $this->laporan_model->Getlaporan2();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('laporan/form_laporan',array('data' => $data));
		$this->load->view('background/foot');

		// $config = array();
  //       // $config["base_url"] = base_url() . "laporan/view_laporan";
  //       $config["total_rows"] = $this->laporan->record_count();
  //       $config["per_page"] = 20;
  //       $config["uri_segment"] = 3;

  //       $this->pagination->initialize($config);

  //       $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
  //       // $data["results"] = $this->laporan->
  //       //     fetch_countries($config["per_page"], $page);
  //       $data["links"] = $this->pagination->create_links();

        // $this->load->view("example1", $data);
	}

public function laporan_tamu($code){
		$detail = $this->laporan_model->Getlaporan("where code = '$code'");
		$tt = $this->tt_model->Gettt("where id = '$code'");
		$data = array(
			"id" => $detail[0]['id'],
			"nama" => $detail[0]['nama'],
			"departemen" => $detail[0]['departemen'],
			"keperluan" => $detail[0]['keperluan'],
			"image" => $detail[0]['image'],
			"img" => $tt[0]['img'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('laporan/form_laporan_tamu',$data);
		$this->load->view('background/foot');
	}

	public function hasil(){
        $tgl_awal = $this->input->post('tgl_awal');
       $tgl_akhir = $this->input->post('tgl_akhir');
		$data['cari'] = $this->laporan_model->search();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('laporan/form_laporan2',$data);
	    $this->load->view('background/foot');
	// public function search(){
	// $tgl_awal = $this->input->post('tgl_awal');
	// $tgl_akhir = $this->input->post('tgl_akhir');
		
	// 	$d['dc_access_log']=$this->laporan_model->search();
		
	// 	$this->load->view('background/header');
	// 	$this->load->view('background/sidebar');
	// 	$this->load->view('background/top');
	// 	$this->load->view('laporan', $d);
	// 	$this->load->view('background/foot');
	
	}
	// public function __construct() {
 //        parent:: __construct();
 //        $this->load->helper("url");
 //        $this->load->model("laporan");
 //        $this->load->library("pagination");
 //    }
	public function __construct(){
		
        parent::__construct();
        $this->load->helper('url');

        // Load Pagination library
		$this->load->library('pagination');

		// Load model
		$this->load->model('laporan_model');
	}
	public function laporan()
	{
		redirect('laporan/loadRecord');
	}

	public function loadRecord($rowno=0){

		// Row per page
		$rowperpage = 5;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->laporan_model->getrecordCount();

      	// Get  records
      	$laporan = $this->laporan_model->getData($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'laporan/loadRecord';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $laporan;
		$data['row'] = $rowno;

}
}
	// public function __construct() {
 //        parent:: __construct();

 //        $this->load->helper('url');
 //        $this->load->model('laporan_model');
 //        $this->load->library("pagination");
 //    }

    // public function index() {
    //     $config = array();
    //     // $config["base_url"] = base_url() . "authors";
    //     $config["total_rows"] = $this->laporan_model->get_count();
    //     $config["per_page"] = 10;
    //     $config["uri_segment"] = 2;

    //     $this->pagination->initialize($config);

    //     $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

    //     $data["links"] = $this->pagination->create_links();

    //     $data['authors'] = $this->authors_model->get_authors($config["per_page"], $page);

    //     $this->load->view('authors/index', $data);
    // }

	// public function search(){
	// 	$tgl_awal = $this->input->post('tgl_awal');
	// 	$tgl_akhir = $this->input->post('tgl_akhir');
	// 	$bulan = $this->input->post('bulan');
		
	// 	$data=$this->laporan_model->search();
	// 	$this->load->view('background/header');
	// 	$this->load->view('background/sidebar');
	// 	$this->load->view('background/top');
	// 	$this->load->view('laporan',$data);
	// 	$this->load->view('background/foot');
	// }
	// public function cari(){
	// 	$keyword = $this->input->post('keyword');
	// 	$tgl_awal = $this->input->post('tgl_awal');
	// 	$tgl_akhir = $this->input->post('tgl_akhir');
	// 	$data=$this->laporan_model->Getsearch($keyword);
	// 	$this->load->view('background/header');
	// 	$this->load->view('background/sidebar2');
	// 	$this->load->view('background/top');
	// 	$this->load->view('laporan',$data);
	// 	$this->load->view('background/foot');
	// }





// class Laporan extends CI_Controller {
// 		public function cetakBulan()
// {
//      	$this->_is_admin();
//      	if($this->input->post('btnKirim'))
//      {
//      	$bulan = $this->input->post('bulan');
//      	$tahun = $this->input->post('tahun');
//      	$triwulan = $this->input->post('triwulan');
 
// 		$v_array = $this->input->post();
 
// 		$data['tb_laporan1'] = $this->db->query("SELECT * FROM tb_lapreport 
// 		WHERE MONTH(a.tanggal)='$bulan' AND YEAR(a.tanggal)='$tahun' AND a.id_organisasi
// 		GROUP BY suburusan2 ASC");
 
// 		$data['tb_laporanGroup'] = $this->db->query("SELECT * FROM tb_lapreport
// 		WHERE MONTH(a.tanggal)='$bulan' AND YEAR(a.tanggal)='$tahun' AND a.id_organisasi
// 		GROUP BY d.id_program ASC");
 
// 		$data['tb_laporan'] = $this->db->query("SELECT * FROM tb_lapreport 
// 		WHERE MONTH(a.tanggal)='$bulan' AND YEAR(a.tanggal)='$tahun' AND a.id_organisasi");
 
// 		}
// 			$data['nama_bulan'] = $v_array['bulan'];
// 			$data['nama_tahun'] = $v_array['tahun'];
// 			$data['nama_triwulan'] = $v_array['triwulan'];
//             $this->load->view('background/head');
// 			$this->load->view('background/sidebar');
// 			$this->load->view('background/top',$ses);
// 			$this->load->view('laporan/form_laporan',array('data' => $data));
// 			$this->load->view('background/foot');



		    // $this->load->view('template/header-report',$data);
		    // $this->load->view('admin/cetak',$data);
		    // $this->load->view('template/foot-report',$data);
 
	

	    