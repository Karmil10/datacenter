<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {
public function view_sms(){
	$data = $this->sms_model->Getsms();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('sms/form_sms',array('data' => $data));
		$this->load->view('background/foot');
	}


public function insert_sms(){
	$data = $this->sms_model->Getsms();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('sms/form_add_sms',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_sms(){
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
		$res = $this->sms_model->insertdata('tb_sms',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_sms($id){
		$sms = $this->sms_model->Getsms("where id = '$id'");
		$data = array(
			"id" => $sms[0]['id'],
			"nik" => $sms[0]['nik'],
			"nama" => $sms[0]['nama'],
			"tanggal" => $sms[0]['tanggal'],
			"start_time" => $sms[0]['start_time'],
			"end_time" => $sms[0]['end_time'],
			"remaks" => $sms[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('sms/form_edit_sms',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_sms(){
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
			'copy_datasms_start' =>$copy_datasms_start,
			'copy_datasms_end' =>$copy_datasms_end,
			'remaks' => $remaks
		 );
		$where = array('id' => $id);
		$res = $this->sms_model->UpdateData('tb_sms',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_sms($id){
		$where = array('id' => $id );
		$res = $this->sms_model->DeleteData("tb_sms",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}
}