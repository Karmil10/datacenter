<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Rtgs extends CI_Controller {
public function view_rtgs(){
	$tabel1 = $this->rtgs_model->Getrtgsstartday();
	$tabel2 = $this->rtgs_model->Getrtgsbackup();
	$viewData = array();
			$data['tabel1']=$tabel1;
			$data['tabel2']=$tabel2;

		// $this->load->view('layout/header');
		// $this->load->view('layout/header');
		// $this->load->view('layout/nav');
		// $this->load->view('rtgs/form_rtgs',$data);
		// $this->load->view('layout/footer');


		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		// $this->load->view('layout/dashboard');
		$this->load->view('rtgs/form_rtgs',$data);
		$this->load->view('layout/footer');
	}




	public function detail_rtgs($id){
	$data = $this->rtgs_model->Getrtgsstartday("where id = '$id'");
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/rtgs_detail',array('data' => $data));
		$this->load->view('layout/footer');
	}




/* RTGS Start day */
	public function view_rtgs_startday(){
	$data = $this->rtgs_model->Getrtgsstartday();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/form_rtgs_startday',array('data' => $data));
		$this->load->view('layout/footer');
	}


public function insert_rtgs_startday(){
	$data = $this->rtgs_model->Getrtgsstartday();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/form_add_rtgs_startday',array('data' => $data));
		$this->load->view('layout/footer');
	}
public function add_data_rtgs_startday(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$cek_depo_web_start  = $_POST['cek_depo_web_start'];
		$cek_depo_web_end  = $_POST['cek_depo_web_end'];
		$cek_depo_rtsx_start  = $_POST['cek_depo_rtsx_start'];
		$cek_depo_rtsx_end  = $_POST['cek_depo_rtsx_end'];
		$cek_depo_tradx_start  = $_POST['cek_depo_tradx_start'];
		$cek_depo_tradx_end  = $_POST['cek_depo_tradx_end'];
		$tes_login_rtgs_start  = $_POST['tes_login_rtgs_start'];
		$tes_login_rtgs_end = $_POST['tes_login_rtgs_end'];
		$remaks  = $_POST['remaks'];

		$data_insert = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'cek_depo_web_start'=> $cek_depo_web_start,  
		 'cek_depo_web_end' => $cek_depo_web_end,  
		 'cek_depo_rtsx_start' => $cek_depo_rtsx_start,  
		 'cek_depo_rtsx_end' => $cek_depo_rtsx_end,  
		 'cek_depo_tradx_start' => $cek_depo_tradx_start,  
		 'cek_depo_tradx_end' => $cek_depo_tradx_end,  
		 'tes_login_rtgs_start' => $tes_login_rtgs_start,  
		 'tes_login_rtgs_end' => $tes_login_rtgs_end,  
		 'remaks' => $remaks  
		 );
		$res = $this->rtgs_model->insertdata('tb_rtgs_startday',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_rtgs_startday($id){
		$rtgs = $this->rtgs_model->Getrtgsstartday("where id = '$id'");
		$data = array(	
		'id' => $rtgs[0]['id'],
		'nik' => $rtgs[0]['nik'],
		'nama' => $rtgs[0]['nama'],
		'tanggal' => $rtgs[0]['tanggal'],
		'cek_depo_web_start'=> $rtgs[0]['cek_depo_web_start'],  
		 'cek_depo_web_end' => $rtgs[0]['cek_depo_web_end'],  
		 'cek_depo_rtsx_start' => $rtgs[0]['cek_depo_rtsx_start'],  
		 'cek_depo_rtsx_end' => $rtgs[0]['cek_depo_rtsx_end'],  
		 'cek_depo_tradx_start' => $rtgs[0]['cek_depo_tradx_start'],  
		 'cek_depo_tradx_end' => $rtgs[0]['cek_depo_tradx_end'],  
		 'tes_login_rtgs_start' => $rtgs[0]['tes_login_rtgs_start'],  
		 'tes_login_rtgs_end' => $rtgs[0]['tes_login_rtgs_end'],  
		'remaks'  => $rtgs[0]['remaks'],
		);
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/form_edit_rtgs_startday',$data);
		$this->load->view('layout/footer');
		
	}
	public function do_update_rtgs_startday(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$cek_depo_web_start  = $_POST['cek_depo_web_start'];
		$cek_depo_web_end  = $_POST['cek_depo_web_end'];
		$cek_depo_rtsx_start  = $_POST['cek_depo_rtsx_start'];
		$cek_depo_rtsx_end  = $_POST['cek_depo_rtsx_end'];
		$cek_depo_tradx_start  = $_POST['cek_depo_tradx_start'];
		$cek_depo_tradx_end  = $_POST['cek_depo_tradx_end'];
		$tes_login_rtgs_start  = $_POST['tes_login_rtgs_start'];
		$tes_login_rtgs_end = $_POST['tes_login_rtgs_end'];
		$remaks  = $_POST['remaks'];

		$data_update = array(	
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'cek_depo_web_start'=> $cek_depo_web_start,  
		 'cek_depo_web_end' => $cek_depo_web_end,  
		 'cek_depo_rtsx_start' => $cek_depo_rtsx_start,  
		 'cek_depo_rtsx_end' => $cek_depo_rtsx_end,  
		 'cek_depo_tradx_start' => $cek_depo_tradx_start,  
		 'cek_depo_tradx_end' => $cek_depo_tradx_end,  
		 'tes_login_rtgs_start' => $tes_login_rtgs_start,  
		 'tes_login_rtgs_end' => $tes_login_rtgs_end,  
		 'remaks' => $remaks
		 );
		$where = array('id' => $id);
		$res = $this->rtgs_model->UpdateData('tb_rtgs_startday',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_rtgs_startday($id){
		$where = array('id' => $id );
		$res = $this->rtgs_model->DeleteData("tb_rtgs_startday",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}


/* RTGS backup */

	public function view_rtgs_backup(){
	$data = $this->rtgs_model->Getrtgsbackup();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/form_rtgs_backup',array('data' => $data));
		$this->load->view('layout/footer');
	}

	public function insert_rtgs_backup(){
	$data = $this->rtgs_model->Getrtgsbackup();
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/form_add_rtgs_backup',array('data' => $data));
		$this->load->view('layout/footer');
	}
	public function add_data_rtgs_backup(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$export_depo_start  = $_POST['export_depo_start'];
		$export_depo_end  = $_POST['export_depo_end'];
		$export_rtgs_start  = $_POST['export_rtgs_start'];
		$export_rtgs_end  = $_POST['export_rtgs_end'];
		$cek_result_backup_start  = $_POST['cek_result_backup_start'];
		$cek_result_backup_end  = $_POST['cek_result_backup_end'];
		$copy_file_backup_start  = $_POST['copy_file_backup_start'];
		$copy_file_backup_end = $_POST['copy_file_backup_end'];
		$remaks  = $_POST['remaks'];

		$data_insert = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'export_depo_start'=> $export_depo_start,  
		 'export_depo_end' => $export_depo_end,  
		 'export_rtgs_start' => $export_rtgs_start,  
		 'export_rtgs_start' => $export_rtgs_end,  
		 'cek_result_backup_start' => $cek_result_backup_start,  
		 'cek_result_backup_end' => $cek_result_backup_end,  
		 'copy_file_backup_start' => $copy_file_backup_start,  
		 'copy_file_backup_end' => $copy_file_backup_end,  
		 'remaks' => $remaks  
		 );
		$res = $this->rtgs_model->insertdata('tb_rtgs_backup',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_rtgs_backup($id){
		$rtgs = $this->rtgs_model->Getrtgsbackup("where id = '$id'");
		$data = array(
		'id' => $rtgs[0]['id'],
		'nik' => $rtgs[0]['nik'],
		'nama' => $rtgs[0]['nama'],
		'tanggal' => $rtgs[0]['tanggal'],
		'export_depo_start'=> $rtgs[0]['export_depo_start'],  
		 'export_depo_end' => $rtgs[0]['export_depo_end'],  
		 'export_rtgs_start' => $rtgs[0]['export_rtgs_start'],  
		 'export_rtgs_end' => $rtgs[0]['export_rtgs_end'],  
		 'cek_result_backup_start' => $rtgs[0]['cek_result_backup_start'], 
		 'cek_result_backup_end' => $rtgs[0]['cek_result_backup_end'],  
		 'copy_file_backup_start' => $rtgs[0]['copy_file_backup_start'],  
		 'copy_file_backup_end' => $rtgs[0]['copy_file_backup_end'],  
		'remaks'  => $rtgs[0]['remaks'],
		);
		$this->load->view('layout/head');
		$this->load->view('layout/header');
		$this->load->view('layout/nav');
		$this->load->view('rtgs/form_edit_rtgs_backup',$data);
		$this->load->view('layout/footer');
		
	}
	public function do_update_rtgs_backup(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$export_depo_start  = $_POST['export_depo_start'];
		$export_depo_end  = $_POST['export_depo_end'];
		$export_rtgs_start  = $_POST['export_rtgs_start'];
		$export_rtgs_end  = $_POST['export_rtgs_end'];
		$cek_result_backup_start  = $_POST['cek_result_backup_start'];
		$cek_result_backup_end  = $_POST['cek_result_backup_end'];
		$copy_file_backup_start  = $_POST['copy_file_backup_start'];
		$copy_file_backup_end = $_POST['copy_file_backup_end'];
		$remaks  = $_POST['remaks'];

		$data_update = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'export_depo_start'=> $export_depo_start,  
		 'export_depo_end' => $export_depo_end,  
		 'export_rtgs_start' => $export_rtgs_start,  
		 'export_rtgs_start' => $export_rtgs_end,  
		 'cek_result_backup_start' => $cek_result_backup_start,  
		 'cek_result_backup_end' => $cek_result_backup_end,  
		 'copy_file_backup_start' => $copy_file_backup_start,  
		 'copy_file_backup_end' => $copy_file_backup_end,  
		 'remaks' => $remaks  
		 );
		$where = array('id' => $id);
		$res = $this->rtgs_model->UpdateData('tb_rtgs_backup',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_rtgs_backup($id){
		$where = array('id' => $id );
		$res = $this->rtgs_model->DeleteData("tb_rtgs_backup",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}


}