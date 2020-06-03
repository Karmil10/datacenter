<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Cash extends CI_Controller {
public function view_cash(){
	$data = $this->cash_model->Getcash();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('cash/form_cash',array('data' => $data));
		$this->load->view('background/foot');
	}


public function insert_cash(){
	$data = $this->cash_model->Getcash();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('cash/form_add_cash',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_cash(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$copy_datacash_start = $_POST['copy_datacash_start'];
		$copy_datacash_end = $_POST['copy_datacash_end'];
		$remaks = $_POST['remaks'];

		$data_insert = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'copy_datacash_start' =>$copy_datacash_start,
			'copy_datacash_end' =>$copy_datacash_end,
			'remaks' => $remaks
		 );
		$res = $this->cash_model->insertdata('tb_cash',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_cash($id){
		$cash = $this->cash_model->Getcash("where id = '$id'");
		$data = array(
			"id" => $cash[0]['id'],
			"nik" => $cash[0]['nik'],
			"nama" => $cash[0]['nama'],
			"tanggal" => $cash[0]['tanggal'],
			"start_time" => $cash[0]['start_time'],
			"end_time" => $cash[0]['end_time'],
			"copy_datacash_start" => $cash[0]['copy_datacash_start'],
			"copy_datacash_end" => $cash[0]['copy_datacash_end'],
			"remaks" => $cash[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('cash/form_edit_cash',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_cash(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$copy_datacash_start = $_POST['copy_datacash_start'];
		$copy_datacash_end = $_POST['copy_datacash_end'];
		$remaks = $_POST['remaks'];

		$data_update = array(
			'id' => $id,
			'nik' => $nik,
			'nama' => $nama,
			'tanggal' => $tanggal,
			'start_time' => $start_time,
			'end_time' => $end_time,
			'copy_datacash_start' =>$copy_datacash_start,
			'copy_datacash_end' =>$copy_datacash_end,
			'remaks' => $remaks
		 );
		$where = array('id' => $id);
		$res = $this->cash_model->UpdateData('tb_cash',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_cash($id){
		$where = array('id' => $id );
		$res = $this->cash_model->DeleteData("tb_cash",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}
}