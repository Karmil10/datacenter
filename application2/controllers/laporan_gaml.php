<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class lapgaml extends CI_Controller {
public function view_laporan_gaml(){
	$data = $this->lap_gaml_model->Getlapgaml();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('laporan/form_laporan_gaml',array('data' => $data));
		$this->load->view('background/foot');
	}


// public function insert_gaml(){
// 	$data = $this->gaml_model->Getgaml();
// 		$this->load->view('background/header');
// 		$this->load->view('background/sidebar');
// 		$this->load->view('background/top');
// 		$this->load->view('gaml/form_add_gaml',array('data' => $data));
// 		$this->load->view('background/foot');
	}
public function laporan1($id){
		$gaml = $this->lap_gaml_model->Getlapgaml1("where id = '$id'");
		   'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'remaks' => $remaks
		// $data = array(
		// $id = $_POST['id'];
		// $nik = $_POST['nik'];
		// $nama = $_POST['nama'];
		// $tanggal = $_POST['tanggal'];
		// $start_time = $_POST['start_time'];
		// $end_time = $_POST['end_time'];
		// $remaks = $_POST['remaks'];

		// $data_insert = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'remaks' => $remaks
		 );
$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('laporan/form_laporan1',$data);
		$this->load->view('background/foot');
	}
}