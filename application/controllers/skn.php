<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class skn extends CI_Controller {
public function view_skn(){
	$tabel1 = $this->skn_model->Getsknsod();
	$tabel2 = $this->skn_model->Getskneod();
	
	
	$viewData = array();
			$data['tabel1']=$tabel1;
			$data['tabel2']=$tabel2;
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_skn',$data);
		$this->load->view('background/foot');
	}

	public function detail_skn($id){
	$data = $this->skn_model->Getsknsod("where id = '$id'");
	
	
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/skn_detail',array('data' => $data));
		$this->load->view('background/foot');
	}




/* skn Start day */
	public function view_skn_sod(){
	$data = $this->skn_model->Getsknsod();
	
	
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_skn_sod',array('data' => $data));
		$this->load->view('background/foot');
	}


public function insert_skn_sod(){
	$data = $this->skn_model->Getsknsod();
	
	
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_add_skn_sod',array('data' => $data));
		$this->load->view('background/foot');
	}
public function add_data_skn_sod(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$sod_start  = $_POST['sod_start'];
		$sod_end  = $_POST['sod_end'];
		$kredit_start  = $_POST['kredit_start'];
		$kredit_end  = $_POST['kredit_end'];
		$buka_kredit_start  = $_POST['buka_kredit_start'];
		$buka_kredit_end = $_POST['buka_kredit_end'];
		$debet_start  = $_POST['debet_start'];
		$debet_end = $_POST['debet_end'];
		$serah_start  = $_POST['serah_start'];
		$serah_end = $_POST['serah_end'];
		$beli_start  = $_POST['beli_start'];
		$beli_end = $_POST['beli_end'];
		$remaks  = $_POST['remaks'];

		$data_insert = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'sod_start'=> $sod_start,  
		 'sod_end' => $sod_end,  
		 'kredit_start' => $kredit_start,  
		 'kredit_end' => $kredit_end,  
		 'buka_kredit_start' => $buka_kredit_start,  
		 'buka_kredit_end' => $buka_kredit_end,  
		 'debet_start' => $debet_start,  
		 'debet_end' => $debet_end,
		 'serah_start' => $serah_start,  
		 'serah_end' => $serah_end,
		 'beli_start' => $beli_start,  
		 'beli_end' => $beli_end,
		 'remaks' => $remaks  
		 );
		$res = $this->skn_model->insertdata('tb_skn_sod',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_skn_sod($id){
		
		
		$skn = $this->skn_model->Getsknsod("where id = '$id'");
		$data = array(	
		'id' => $skn[0]['id'],
		'nik' => $skn[0]['nik'],
		'nama' => $skn[0]['nama'],
		'tanggal' => $skn[0]['tanggal'],
		'sod_start'=> $skn[0]['sod_start'],  
		 'sod_end' => $skn[0]['sod_end'],  
		 'kredit_start' => $skn[0]['kredit_start'],  
		 'kredit_end' => $skn[0]['kredit_end'],  
		 'buka_kredit_start' => $skn[0]['buka_kredit_start'],  
		 'buka_kredit_end' => $skn[0]['buka_kredit_end'], 
		 'debet_start' => $skn[0]['debet_start'],  
		 'debet_end' => $skn[0]['debet_end'],
		 'serah_start' => $skn[0]['serah_start'],  
		 'serah_end' => $skn[0]['serah_end'], 
		 'beli_start' => $skn[0]['beli_start'],  
		 'beli_end' => $skn[0]['beli_end'], 
     	'remaks'  => $skn[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_edit_skn_sod',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_skn_sod(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$sod_start  = $_POST['sod_start'];
		$sod_end  = $_POST['sod_end'];
		$kredit_start  = $_POST['kredit_start'];
		$kredit_end  = $_POST['kredit_end'];
		$buka_kredit_start  = $_POST['buka_kredit_start'];
		$buka_kredit_end = $_POST['buka_kredit_end'];
		$debet_start  = $_POST['debet_start'];
		$debet_end = $_POST['debet_end'];
		$serah_start  = $_POST['serah_start'];
		$serah_end = $_POST['serah_end'];
		$beli_start  = $_POST['beli_start'];
		$beli_end = $_POST['beli_end'];
		$remaks  = $_POST['remaks'];

		$data_update = array(	
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'sod_start'=> $sod_start,  
		 'sod_end' => $sod_end,  
		 'kredit_start' => $kredit_start,  
		 'kredit_end' => $kredit_end,  
		 'buka_kredit_start' => $buka_kredit_start,  
		 'buka_kredit_end' => $buka_kredit_end, 
		  'debet_start' => $debet_start,  
		 'debet_end' => $debet_end,
		 'serah_start' => $serah_start,  
		 'serah_end' => $serah_end,
		 'beli_start' => $beli_start,  
		 'beli_end' => $beli_end,
		 'remaks' => $remaks
		 );
		$where = array('id' => $id);
		$res = $this->skn_model->UpdateData('tb_skn_sod',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_skn_sod($id){
		$where = array('id' => $id );
		$res = $this->skn_model->DeleteData("tb_skn_sod",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}


/* skn eod */

	public function view_skn_eod(){
	$data = $this->skn_model->Getskneod();
	
	
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_skn_eod',array('data' => $data));
		$this->load->view('background/foot');
	}

	public function insert_skn_eod(){
	$data = $this->skn_model->Getskneod();
	
	
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_add_skn_eod',array('data' => $data));
		$this->load->view('background/foot');
	}
	public function add_data_skn_eod(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$tutup_kredit_start  = $_POST['tutup_kredit_start'];
		$tutup_kredit_end  = $_POST['tutup_kredit_end'];
		$tutup_serah_start  = $_POST['tutup_serah_start'];
		$tutup_serah_end  = $_POST['tutup_serah_end'];
		$tutup_kembali_start  = $_POST['tutup_kembali_start'];
		$tutup_kembali_end  = $_POST['tutup_kembali_end'];
		$proses_akhir_start  = $_POST['proses_akhir_start'];
		$proses_akhir_end  = $_POST['proses_akhir_end'];
		$offline_start  = $_POST['offline_start'];
		$offline_end = $_POST['offline_end'];
		$remaks  = $_POST['remaks'];
		$data_insert = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'tutup_kredit_start'=> $tutup_kredit_start,  
		 'tutup_kredit_end' => $tutup_kredit_end, 
		 'tutup_serah_start' => $tutup_serah_start,  
		 'tutup_serah_end' => $tutup_serah_end,
		 'tutup_kembali_start' => $tutup_kembali_start,  
		 'tutup_kembali_end' => $tutup_kembali_end,
		 'proses_akhir_start' => $proses_akhir_start,  
		 'proses_akhir_end' => $proses_akhir_end,  
		 'offline_start' => $offline_start,  
		 'offline_end' => $offline_end,  
		 'remaks' => $remaks  
		 );
		$res = $this->skn_model->insertdata('tb_skn_eod',$data_insert);
		if($res >= 1){
			echo "<script>alert('Input Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Input Data Gagal');history.go(-2);</script>";
		}

	}
	public function edit_data_skn_eod($id){
		
		
		$skn = $this->skn_model->Getskneod("where id = '$id'");
		$data = array(
		'id' => $skn[0]['id'],
		'nik' => $skn[0]['nik'],
		'nama' => $skn[0]['nama'],
		'tanggal' => $skn[0]['tanggal'],
		'tutup_kredit_start'=> $skn[0]['tutup_kredit_start'],  
		 'tutup_kredit_end' => $skn[0]['tutup_kredit_end'],  
		 'tutup_serah_start' => $skn[0]['tutup_serah_start'],  
		 'tutup_serah_end' => $skn[0]['tutup_serah_end'],
		 'tutup_kembali_start' => $skn[0]['tutup_kembali_start'],  
		 'tutup_kembali_end' => $skn[0]['tutup_kembali_end'],  
		 'proses_akhir_start' => $skn[0]['proses_akhir_start'], 
		 'proses_akhir_end' => $skn[0]['proses_akhir_end'],  
		 'offline_start' => $skn[0]['offline_start'],  
		 'offline_end' => $skn[0]['offline_end'], 
		'remaks'  => $skn[0]['remaks'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('skn/form_edit_skn_eod',$data);
		$this->load->view('background/foot');
		
	}
	public function do_update_skn_eod(){
		$id = $_POST['id'];
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tanggal = $_POST['tanggal'];
		$tutup_kredit_start  = $_POST['tutup_kredit_start'];
		$tutup_kredit_end  = $_POST['tutup_kredit_end'];
		$tutup_serah_start  = $_POST['tutup_serah_start'];
		$tutup_serah_end  = $_POST['tutup_serah_end'];
		$tutup_kembali_start  = $_POST['tutup_kembali_start'];
		$tutup_kembali_end  = $_POST['tutup_kembali_end'];
		$proses_akhir_start  = $_POST['proses_akhir_start'];
		$proses_akhir_end  = $_POST['proses_akhir_end'];
		$offline_start  = $_POST['offline_start'];
		$offline_end = $_POST['offline_end'];
		$remaks  = $_POST['remaks'];

		$data_update = array(
		'id' => $id,
		'nik' => $nik,
		'nama' => $nama,
		'tanggal' => $tanggal,
		'tutup_kredit_start'=> $tutup_kredit_start,  
		 'tutup_kredit_end' => $tutup_kredit_end, 
		 'tutup_serah_start' => $tutup_serah_start,  
		 'tutup_serah_end' => $tutup_serah_end,
		 'tutup_kembali_start' => $tutup_kembali_start,  
		 'tutup_kembali_end' => $tutup_kembali_end,
		 'proses_akhir_start' => $proses_akhir_start,  
		 'proses_akhir_end' => $proses_akhir_end,  
		 'offline_start' => $offline_start,  
		 'offline_end' => $offline_end,  
		 'remaks' => $remaks  
		 );
		$where = array('id' => $id);
		$res = $this->skn_model->UpdateData('tb_skn_eod',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}
	public function do_delete_skn_eod($id){
		$where = array('id' => $id );
		$res = $this->skn_model->DeleteData("tb_skn_eod",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}


}