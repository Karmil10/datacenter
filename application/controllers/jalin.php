<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class jalin extends CI_Controller {
public function view_jalin(){
	$data = $this->jalin_model->Getjalin();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('jalin/form_jalin',array('data' => $data));
		$this->load->view('background/foot');
	}
public function detail_jalin($id){
	$data = $this->jalin_model->Getjalin("where id = '$id'");
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('jalin/jalin_detail',array('data' => $data));
		$this->load->view('background/foot');
	}

public function insert_jalin(){
	$data = $this->jalin_model->Getjalin();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('jalin/form_add_jalin',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_jalin(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$download_jalin_start  = $_POST['download_jalin_start'];
		$download_jalin_end  = $_POST['download_jalin_end'];
		$upload_jalin_start  = $_POST['upload_jalin_start'];
		$upload_jalin_end  = $_POST['upload_jalin_end'];
		$batch_1_start  = $_POST['batch_1_start'];
		$batch_1_end  = $_POST['batch_1_end'];
		$batch_2_start  = $_POST['batch_2_start'];
		$batch_2_end  = $_POST['batch_2_end'];
		$batch_3_start  = $_POST['batch_3_start'];
		$batch_3_end  = $_POST['batch_3_end'];
		$batch_4_start  = $_POST['batch_4_start'];
		$batch_4_end  = $_POST['batch_4_end'];
		$batch_5_start  = $_POST['batch_5_start'];
		$batch_5_end  = $_POST['batch_5_end'];
		$remaks  = $_POST['remaks'];

		$data_insert = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'download_jalin_start'=> $download_jalin_start,  
		 'download_jalin_end' => $download_jalin_end,  
		 'upload_jalin_start' => $upload_jalin_start,  
		 'upload_jalin_end' => $upload_jalin_end,  
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
		$res = $this->jalin_model->insertdata('tb_jalin',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_jalin($id){
		$jalin = $this->jalin_model->Getjalin("where id = '$id'");
		$data = array(
		'id' => $jalin[0]['id'],
		'nik' => $jalin[0]['nik'],
		'nama' => $jalin[0]['nama'],
		'tanggal' => $jalin[0]['tanggal'],
		'download_jalin_start'  => $jalin[0]['download_jalin_start'],
		'download_jalin_end'  => $jalin[0]['download_jalin_end'],
		'upload_jalin_start'  => $jalin[0]['upload_jalin_start'],
		'upload_jalin_end'  => $jalin[0]['upload_jalin_end'],
		'batch_1_start'  => $jalin[0]['batch_1_start'],
		'batch_1_end'  => $jalin[0]['batch_1_end'],
		'batch_2_start'  => $jalin[0]['batch_2_start'],
		'batch_2_end'  => $jalin[0]['batch_2_end'],
		'batch_3_start'  => $jalin[0]['batch_3_start'],
		'batch_3_end'  => $jalin[0]['batch_3_end'],
		'batch_4_start'  => $jalin[0]['batch_4_start'],
		'batch_4_end'  => $jalin[0]['batch_4_end'],
		'batch_5_start'  => $jalin[0]['batch_5_start'],
		'batch_5_end'  => $jalin[0]['batch_5_end'],
		'remaks'  => $jalin[0]['remaks'],
		);
		$this->load->view('background/head');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('jalin/form_edit_jalin',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_jalin(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama']; 
		$tanggal = $_POST['tanggal'];
		$download_jalin_start  = $_POST['download_jalin_start'];
		$download_jalin_end  = $_POST['download_jalin_end'];
		$upload_jalin_start  = $_POST['upload_jalin_start'];
		$upload_jalin_end  = $_POST['upload_jalin_end'];
		$batch_1_start  = $_POST['batch_1_start'];
		$batch_1_end  = $_POST['batch_1_end'];
		$batch_2_start  = $_POST['batch_2_start'];
		$batch_2_end  = $_POST['batch_2_end'];
		$batch_3_start  = $_POST['batch_3_start'];
		$batch_3_end  = $_POST['batch_3_end'];
		$batch_4_start  = $_POST['batch_4_start'];
		$batch_4_end  = $_POST['batch_4_end'];
		$batch_5_start  = $_POST['batch_5_start'];
		$batch_5_end  = $_POST['batch_5_end'];
		$remaks  = $_POST['remaks'];

		$data_update = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'download_jalin_start'=> $download_jalin_start,  
		 'download_jalin_end' => $download_jalin_end,  
		 'upload_jalin_start' => $upload_jalin_start,  
		 'upload_jalin_end' => $upload_jalin_end,  
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
		$res = $this->jalin_model->UpdateData('tb_jalin',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_jalin($id){
		$where = array('id' => $id );
		$res = $this->jalin_model->DeleteData("tb_jalin",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}
	
}

