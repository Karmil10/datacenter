<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Ej extends CI_Controller {
public function view_ej(){
	$data = $this->ej_model->Getej();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('ej/form_ej',array('data' => $data));
		$this->load->view('background/foot');
	}


public function insert_ej(){
	$data = $this->ej_model->Getej();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('ej/form_add_ej',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_ej(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$copy_dataej_start = $_POST['copy_dataej_start'];
		$copy_dataej_end = $_POST['copy_dataej_end'];
		$remaks = $_POST['remaks'];

		$data_insert = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'copy_dataej_start' =>$copy_dataej_start,
			'copy_dataej_end' =>$copy_dataej_end,
			'remaks' => $remaks
		 );
		$res = $this->ej_model->insertdata('tb_ej',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_ej($id){
		$ej = $this->ej_model->Getej("where id = '$id'");
		$data = array(
			"id" => $ej[0]['id'],
			"nik" => $ej[0]['nik'],
			"nama" => $ej[0]['nama'],
			"tanggal" => $ej[0]['tanggal'],
			"start_time" => $ej[0]['start_time'],
			"end_time" => $ej[0]['end_time'],
			"copy_dataej_start" => $ej[0]['copy_dataej_start'],
			"copy_dataej_end" => $ej[0]['copy_dataej_end'],
			"remaks" => $ej[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('ej/form_edit_ej',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_ej(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$copy_dataej_start = $_POST['copy_dataej_start'];
		$copy_dataej_end = $_POST['copy_dataej_end'];
		$remaks = $_POST['remaks'];

		$data_update = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'copy_dataej_start' =>$copy_dataej_start,
			'copy_dataej_end' =>$copy_dataej_end,
			'remaks' => $remaks
		 );
		$where = array('id' => $id);
		$res = $this->ej_model->UpdateData('tb_ej',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_ej($id){
		$where = array('id' => $id );
		$res = $this->ej_model->DeleteData("tb_ej",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}
}