<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class bersama extends CI_Controller {
public function view_bersama(){
	$data = $this->bersama_model->Getbersama();
		// $this->load->view('background/header');
		// $this->load->view('background/sidebar');
		// $this->load->view('background/top');
		// $this->load->view('bersama/form_bersama',array('data' => $data));
		// $this->load->view('background/foot')
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		// $this->load->view('layout/dashboard');
		$this->load->view('bersama/form_bersama',array('data' => $data));
		$this->load->view('layout/footer');
	;
	}
public function detail_bersama($id){
	$data = $this->bersama_model->Getbersama("where id = '$id'");
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('bersama/bersama_detail',array('data' => $data));
		$this->load->view('background/foot');
	}

public function insert_bersama(){
	$data = $this->bersama_model->Getbersama();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('bersama/form_add_bersama',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_bersama(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$download_bersama_start  = $_POST['download_bersama_start'];
		$download_bersama_end  = $_POST['download_bersama_end'];
		$upload_bersama_start  = $_POST['upload_bersama_start'];
		$upload_bersama_end  = $_POST['upload_bersama_end'];
		$batch_1_start  = $_POST['batch_1_start'];
		$batch_1_end  = $_POST['batch_1_end'];
		$batch_2_start  = $_POST['batch_1_start'];
		$batch_2_end  = $_POST['batch_1_end'];
		$batch_3_start  = $_POST['batch_1_start'];
		$batch_3_end  = $_POST['batch_1_end'];
		$batch_4_start  = $_POST['batch_1_start'];
		$batch_4_end  = $_POST['batch_1_end'];
		$batch_5_start  = $_POST['batch_1_start'];
		$batch_5_end  = $_POST['batch_1_end'];
		$remaks  = $_POST['remaks'];

		$data_insert = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'download_bersama_start'=> $download_bersama_start,  
		 'download_bersama_end' => $download_bersama_end,  
		 'upload_bersama_start' => $upload_bersama_start,  
		 'upload_bersama_end' => $upload_bersama_end,  
		 'batch_1_start' => $batch_1_start,  
		 'batch_1_end' => $batch_1_end,  
		 'batch_2_start' => $batch_2_start,  
		 'batch_2_end' => $batch_2_end,  
		 'batch_3_start' => $batch_3_start,  
		 'batch_3_end' => $batch_3_end,  
		 'batch_4_start' => $batch_4_start,  
		 'batch_4_end' => $batch_4_end,  
		 'batch_5_start' => $batch_5_start,  
		 'batch_5_end' => $batch_5_end,
		 'remaks' => $remaks  
		 );
		$res = $this->bersama_model->insertdata('tb_bersama',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_bersama($id){
		$bersama = $this->bersama_model->Getbersama("where id = '$id'");
		$data = array(
		'id' => $bersama[0]['id'],
		'nik' => $bersama[0]['nik'],
		'nama' => $bersama[0]['nama'],
		'tanggal' => $bersama[0]['tanggal'],
		'download_bersama_start'  => $bersama[0]['download_bersama_start'],
		'download_bersama_end'  => $bersama[0]['download_bersama_end'],
		'upload_bersama_start'  => $bersama[0]['upload_bersama_start'],
		'upload_bersama_end'  => $bersama[0]['upload_bersama_end'],
		'batch_1_start'  => $bersama[0]['batch_1_start'],
		'batch_1_end'  => $bersama[0]['batch_1_end'],
		'batch_2_start'  => $bersama[0]['batch_1_start'],
		'batch_2_end'  => $bersama[0]['batch_1_end'],
		'batch_3_start'  => $bersama[0]['batch_1_start'],
		'batch_3_end'  => $bersama[0]['batch_1_end'],
		'batch_4_start'  => $bersama[0]['batch_1_start'],
		'batch_4_end'  => $bersama[0]['batch_1_end'],
		'batch_5_start'  => $bersama[0]['batch_1_start'],
		'batch_5_end'  => $bersama[0]['batch_1_end'],
		'remaks'  => $bersama[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('bersama/form_edit_bersama',$data);
		$this->load->view('background/footer');
		
	}
	public function do_update_bersama(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama']; 
		$tanggal = $_POST['tanggal'];
		$download_bersama_start  = $_POST['download_bersama_start'];
		$download_bersama_end  = $_POST['download_bersama_end'];
		$upload_bersama_start  = $_POST['upload_bersama_start'];
		$upload_bersama_end  = $_POST['upload_bersama_end'];
		$batch_1_start  = $_POST['batch_1_start'];
		$batch_1_end  = $_POST['batch_1_end'];
		$batch_2_start  = $_POST['batch_1_start'];
		$batch_2_end  = $_POST['batch_1_end'];
		$batch_3_start  = $_POST['batch_1_start'];
		$batch_3_end  = $_POST['batch_1_end'];
		$batch_4_start  = $_POST['batch_1_start'];
		$batch_4_end  = $_POST['batch_1_end'];
		$batch_5_start  = $_POST['batch_1_start'];
		$batch_5_end  = $_POST['batch_1_end'];
		$remaks  = $_POST['remaks'];

		$data_update = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'download_bersama_start'=> $download_bersama_start,  
		 'download_bersama_end' => $download_bersama_end,  
		 'upload_bersama_start' => $upload_bersama_start,  
		 'upload_bersama_end' => $upload_bersama_end,  
		 'batch_1_start' => $batch_1_start,  
		 'batch_1_end' => $batch_1_end,  
		 'batch_2_start' => $batch_2_start,  
		 'batch_2_end' => $batch_2_end,  
		 'batch_3_start' => $batch_3_start,  
		 'batch_3_end' => $batch_3_end,  
		 'batch_4_start' => $batch_4_start,  
		 'batch_4_end' => $batch_4_end,  
		 'batch_5_start' => $batch_5_start,  
		 'batch_5_end' => $batch_5_end,
		 'remaks' => $remaks   
		 );
		$where = array('id' => $id);
		$res = $this->bersama_model->UpdateData('tb_bersama',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_bersama($id){
		$where = array('id' => $id );
		$res = $this->bersama_model->DeleteData("tb_bersama",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}
	
}