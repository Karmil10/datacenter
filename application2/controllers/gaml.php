<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Gaml extends CI_Controller {
public function view_gaml(){
	$data = $this->gaml_model->Getgaml();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('gaml/form_gaml',array('data' => $data));
		$this->load->view('background/foot');
	}


public function insert_gaml(){
	$data = $this->gaml_model->Getgaml();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('gaml/form_add_gaml',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_gaml(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$remaks = $_POST['remaks'];

		$data_insert = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'remaks' => $remaks
		 );
		$res = $this->gaml_model->insertdata('tb_gaml',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_gaml($id){
		$gaml = $this->gaml_model->Getgaml("where id = '$id'");
		$data = array(
			"id" => $gaml[0]['id'],
			"nik" => $gaml[0]['nik'],
			"nama" => $gaml[0]['nama'],
			"tanggal" => $gaml[0]['tanggal'],
			"start_time" => $gaml[0]['start_time'],
			"end_time" => $gaml[0]['end_time'],
			"remaks" => $gaml[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('gaml/form_edit_gaml',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_gaml(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$remaks = $_POST['remaks'];

		$data_update = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'remaks' => $remaks
		 );
		$where = array('id' => $id);
		$res = $this->gaml_model->UpdateData('tb_gaml',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_gaml($id){
		$where = array('id' => $id );
		$res = $this->gaml_model->DeleteData("tb_gaml",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}
}