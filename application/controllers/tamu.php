<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

function __construct() {
		parent::__construct();
		if (!isset($this->session->userdata['username']))
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Silahkan Login
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('administrator/auth');
		}
	}
	
	public function view_tamu(){
		$data = $this->mymodel->Getaccess_dc();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('tamu/form_tamu',array('data' => $data));
		$this->load->view('background/foot');
	}

	public function detail_tamu($code){
		$detail = $this->mymodel->Getaccess_dc("where code = '$code'");
		$tt = $this->tt_model->Gettt("where id = '$code'");
		$data = array(
			"id" => $detail[0]['id'],
			"nama" => $detail[0]['nama'],
			"departemen" => $detail[0]['departemen'],
			"jam1" => $detail[0]['jam1'],
			"tanggal" => $detail[0]['tanggal'],
			"keperluan" => $detail[0]['keperluan'],
			"remaks" => $detail[0]['remaks'],
			"code" => $detail[0]['code'],
			"img" => $tt[0]['img'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('tamu/form_detail_tamu',$data);
		$this->load->view('background/foot');
	}
	public function view_tamu1(){
		$data = $this->mymodel->Getaccess_dc();
		$this->load->view('background/header');
		$this->load->view('background/sidebar');
		$this->load->view('background/top');
		$this->load->view('tamu/form_add_tamu');
		$this->load->view('background/foot');
	}

	public function edit_tamu($code){
		$tamu = $this->mymodel->Getaccess_dc("where code = '$code'");
		$data = array(
			"code" => $tamu[0]['code'],
			"id" => $tamu[0]['id'],
			"nama" => $tamu[0]['nama'],
			"departemen" => $tamu[0]['departemen'],
			"image" => $tamu[0]['image'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top');
		$this->load->view('tamu/form_edit_tamu',$data);
		$this->load->view('background/foot');
	}

	public function update_tamu(){
		$code = $_POST['code'];
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$keperluan = $_POST['keperluan'];
		$tanggal = $_POST['tanggal'];
		$check_list = $_POST['check_list'];
		$image = $_POST['image'];
		$data_update = array(
			'code' => $code,
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'keperluan' => $keperluan,
			'tanggal' => $tanggal,
			'check_list' => $check_list,
			'image' => $image
		 );

		$where = array('code' => $code);
		$res = $this->mymodel->UpdateData('dc_access_log',$data_update,$where);
		if($res >= 1){
			echo "<script>alert('Update Data sukses');history.go(-2);</script>";
		}else{
			echo "<script>alert('Update Data Gagal');history.go(-2);</script>";
		}
	}

	public function delete_tamu($code){
		$where = array('code' => $code );
		$who = array('id' => $code );
		$whi = array('id' => $code );
		$res = $this->mymodel->DeleteData("dc_access_log",$where);
		$this->tt_model->DeleteData("signature",$who);
		$this->mymodel->DeleteData("foto",$whi);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}


	public function save(){
		$code = $this->input->post('code', true);
		$id = $this->input->post('id', true);
		$nama = $this->input->post('nama', true);
		$departemen = $this->input->post('departemen', true);
		$keperluan = $this->input->post('keperluan', true);
		$tanggal = $this->input->post('tanggal', true);
		$jam = $this->input->post('jam', true);
		$check_list = $this->input->post('check_list',true);
		$image = $this->input->post('image');
		$image = str_replace('data:image/png;base64,','', $image);
		$image = base64_decode($image);
		$filename = 'image_'.time().'.png';
		file_put_contents(FCPATH.'/foto_karyawan/'.$filename,$image);
		$data = array(
			'code' => $code,
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'keperluan' => $keperluan,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'check_list' => $check_list,
			'image' => $filename,
		);

		$this->load->model('mymodel');
		$res = $this->mymodel->insert_tamu($data);
		redirect('tamu/view_tamu');
	}

		

}