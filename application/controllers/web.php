<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	/* controler Karyawan */
	public function index(){
		$data = $this->mymodel->Getkaryawan();
		$this->load->view('heri/view_karyawan',array('data' => $data));
	}
	public function detail_karyawan($id){
		$detail = $this->mymodel->Getkaryawan("where id = '$id'");
		$data = array(
			"id" => $detail[0]['id'],
			"nama" => $detail[0]['nama'],
			"departemen" => $detail[0]['departemen'],
			"image" => $detail[0]['image'],
		);
		$this->load->view('heri/view_detail_karyawan',$data);
	}
	public function insert_karyawan(){
		/*$this->load->view('bersama/view_add_karyawan'); */
		$this->load->view('bersama/head');
		$this->load->view('bersama/sidebar');
		$this->load->view('bersama/top');
		$this->load->view('bersama/form_add_karyawan');
		$this->load->view('bersama/foot');
	}
	public function add_data_karyawan(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$image = $_FILES['image'];
			$config1['upload_path']	='./image_karyawan/';
			$config1['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config1);
			$this->upload->do_upload('image');
			$image=$this->upload->data('file_name');

		$data_insert = array(
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'image' => $image
		 );
		$res = $this->mymodel->insertdata('karyawan',$data_insert);
		if($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			redirect('web/index');
		}else{
			echo "<h2>Insert Data Gagal !!!</h2>";
		}
	}
	public function edit_data_karyawan($id){
		$mhs = $this->mymodel->Getkaryawan("where id = '$id'");
		$data = array(
			"id" => $mhs[0]['id'],
			"nama" => $mhs[0]['nama'],
			"departemen" => $mhs[0]['departemen'],
			"image" => $mhs[0]['image'],
		);
		$this->load->view('heri/view_edit_karyawan',$data);
	}

	public function do_update_karyawan(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$image = $_FILES['image'];
			$config['upload_path']	='./foto_karyawan/';
			$config['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('image');
			$image=$this->upload->data('file_name');
		$data_update = array(
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'image' => $image
		 );
		$where = array('id' => $id);
		$res = $this->mymodel->UpdateData('karyawan',$data_update,$where);
		if($res >= 1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('web/index');
		}else{
			echo "<h2>Updata Data Gagal !!!</h2>";
		}
	}

	public function do_delete_karyawan($id){
		$where = array('id' => $id );
		$res = $this->mymodel->DeleteData("karyawan",$where);
		if($res >= 1){
			$this->session->set_flashdata('pesan','Delete data sukses');
			redirect('web/index');
		}else{
			echo "<h2>Delete Data Gagal !!!</h2>";
		}
	}
	
	/* controler Vendor */
	public function vendor(){
		$data = $this->mymodel->Getvendor();
		$this->load->view('heri/view_vendor',array('data' => $data));
	}
	public function detail_vendor($ktp){
		$detail = $this->mymodel->Getvendor("where ktp = '$ktp'");
		$data = array(
			"ktp" => $detail[0]['ktp'],
			"nama" => $detail[0]['nama'],
			"perusahaan" => $detail[0]['perusahaan'],
			"foto" => $detail[0]['foto'],
		);
		$this->load->view('heri/view_detail_vendor',$data);
	}
	public function insert_vendor(){
		$this->load->view('heri/view_add_vendor');
	}
	public function add_data_vendor(){
		$ktp = $_POST['ktp'];
		$nama = $_POST['nama'];
		$perusahaan = $_POST['perusahaan'];
		$foto = $_FILES['foto'];
			$config1['upload_path']	='./foto_vendor/';
			$config1['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config1);
			$this->upload->do_upload('foto');
			$foto=$this->upload->data('file_name');

		$data_insert = array(
			'ktp' => $ktp,
			'nama' => $nama,
			'perusahaan' => $perusahaan,
			'foto' => $foto
		 );
		$res = $this->mymodel->insertdatavendor('vendor',$data_insert);
		if($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			redirect('web/vendor');
		}else{
			echo "<h2>Insert Data Gagal !!!</h2>";
		}
	}
	public function edit_data_vendor($ktp){
		$mhs = $this->mymodel->Getvendor("where ktp = '$ktp'");
		$data = array(
			"ktp" => $mhs[0]['ktp'],
			"nama" => $mhs[0]['nama'],
			"perusahaan" => $mhs[0]['perusahaan'],
			"foto" => $mhs[0]['foto'],
		);
		$this->load->view('heri/view_edit_vendor',$data);
	}

	public function do_update_vendor(){
		$ktp = $_POST['ktp'];
		$nama = $_POST['nama'];
		$perusahaan = $_POST['perusahaan'];
		$foto = $_FILES['foto'];
			$config['upload_path']	='./foto_vendor/';
			$config['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto');
			$foto=$this->upload->data('file_name');
		$data_update = array(
			'ktp' => $ktp,
			'nama' => $nama,
			'perusahaan' => $perusahaan,
			'foto' => $foto
		 );
		$where = array('ktp' => $ktp);
		$res = $this->mymodel->UpdateDatavendor('vendor',$data_update,$where);
		if($res >= 1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('web/vendor');
		}else{
			echo "<h2>Updata Data Gagal !!!</h2>";
		}
	}

	public function do_delete_vendor($ktp){
		$where = array('ktp' => $ktp );
		$res = $this->mymodel->DeleteDatavendor("vendor",$where);
		if($res >= 1){
			$this->session->set_flashdata('pesan','Delete data sukses');
			redirect('web/vendor');
		}else{
			echo "<h2>Delete Data Gagal !!!</h2>";
		}
	}
	
	
	/* Tabel Access DC */
	public function access_dc(){
		$data = $this->mymodel->Getaccess_dc();
		$this->load->view('akses/DC_access',array('data' => $data));
	}
	public function insert_dc(){
		$this->load->view('akses/form_add_new_dc');
	}
	public function add_data_dc(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$pic = $_POST['pic'];
		$job = $_POST['job'];
		$tanggal = $_POST['tanggal'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$foto = $_FILES['foto'];
		if($foto=""){}else{
			$config['upload_path']	='./uploads/';
			$config['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				echo "Upload Gagal"; die();
			}else{
				$foto_user=$this->upload->data('file_name');
				}
		    }
		    
		$foto2 = $_FILES['foto2'];
			$config1['upload_path']	='./uploads/';
			$config1['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config1);
			$this->upload->do_upload('foto2');
			$foto_pic=$this->upload->data('file_name');
				

		$data_insert_dc = array(
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'pic' => $pic,
			'job' => $job,
			'tanggal' => $tanggal,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'foto_user' => $foto_user,
			'foto_pic' => $foto_pic
			
		 );
		$res = $this->mymodel->insertdata('dc_access_log',$data_insert_dc);
		if($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			redirect('web/access_dc');
		}else{
			echo "<h2>Insert Data Gagal !!!</h2>";
		}
	}
	public function edit_data_dc($id){
		$mhs = $this->mymodel->Getaccess_dc("where id = '$id'");
		$data = array(
			"id" => $mhs[0]['id'],
			"nama" => $mhs[0]['nama'],
			"departemen" => $mhs[0]['departemen'],
			"pic" => $mhs[0]['pic'],
			"job" => $mhs[0]['job'],
			"jam_masuk" => $mhs[0]['jam_masuk'],
			"jam_keluar" => $mhs[0]['jam_keluar'],
		);
		$this->load->view('akses/form_edit_new',$data);
	}

	public function do_update_dc(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$pic = $_POST['pic'];
		$job = $_POST['job'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$foto = $_FILES['foto'];
			$config['upload_path']	='./uploads/';
			$config['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto');
			$foto_user=$this->upload->data('file_name');
		    
		$foto2 = $_FILES['foto2'];
			$config1['upload_path']	='./uploads/';
			$config1['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config1);
			$this->upload->do_upload('foto2');
			$foto_pic=$this->upload->data('file_name');

		$data_update_dc = array(
			'nama' => $nama,
			'departemen' => $departemen,
			'pic' => $pic,
			'job' => $job,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'foto_user' => $foto_user,
			'foto_pic' => $foto_pic,
		 );
		$where = array('id' => $id);
		$res = $this->mymodel->UpdateData_dc('dc_access_log',$data_update_dc,$where);
		if($res >= 1){
			$this->session->set_flashdata('pesan','Update data sukses');
			redirect('web/access_dc');
		}else{
			echo "<h2>Updata Data Gagal !!!</h2>";
		}
	}

	public function do_delete_dc($id){
		$where = array('id' => $id );
		$res = $this->mymodel->DeleteData("dc_access_log",$where);
		if($res >= 1){
			$this->session->set_flashdata('pesan','Delete data sukses');
			redirect('web/access_dc');
		}else{
			echo "<h2>Delete Data Gagal !!!</h2>";
		}
	}
	public function add_data_dco($id){
		$mhs = $this->mymodel->Getkaryawan("where id = '$id'");
		$data = array(
			"id" => $mhs[0]['id'],
			"nama" => $mhs[0]['nama'],
			"departemen" => $mhs[0]['departemen'],
			"image" => $mhs[0]['image'],
		);
		$this->load->view('akses/form_add_new_dc2',$data);
	}

	public function do_add_dco(){
		$no = $_POST['no'];
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$pic = $_POST['pic'];
		$job = $_POST['job'];
		$tanggal = $_POST['tanggal'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$image = $_POST['image'];


		$data_insert_dc = array(
			'no' => $no,
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'pic' => $pic,
			'job' => $job,
			'tanggal' => $tanggal,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'foto_user' => $image,
		 );
		$res = $this->mymodel->insertdata('dc_access_log',$data_insert_dc);
		if($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			redirect('web/access_dc');
		}else{
			echo "<h2>Insert Data Gagal !!!</h2>";
		}
	}

	public function add_data_dco2($id){
		$mhs = $this->mymodel->Getkaryawan("where id = '$id'");
		$data = array(
			"id" => $mhs[0]['id'],
			"nama" => $mhs[0]['nama'],
			"departemen" => $mhs[0]['departemen'],
		);
		$this->load->view('akses/form_add_new_dc3',$data);
	}

	public function do_add_dco2(){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$pic = $_POST['pic'];
		$job = $_POST['job'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$foto_user = $_POST['foto_user'];
		$foto_pic = $_POST['foto_pic'];
		$foto = $_FILES['foto'];
			$config['upload_path']	='./uploads/';
			$config['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config);
			$this->upload->do_upload('foto');
			$foto_user=$this->upload->data('file_name');
		    
		$foto2 = $_FILES['foto2'];
			$config1['upload_path']	='./uploads/';
			$config1['allowed_types']	='jpg|png|gif';
			$this->load->library('upload',$config1);
			$this->upload->do_upload('foto2');
			$foto_pic=$this->upload->data('file_name');

		$data_insert_dc = array(
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'pic' => $pic,
			'job' => $job,
			'jam_masuk' => $jam_masuk,
			'jam_keluar' => $jam_keluar,
			'foto_user' => $foto_user,
			'foto_pic' => $foto_pic,
		 );
		$res = $this->mymodel->insertdata('dc_access_log',$data_insert_dc);
		if($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			redirect('web/access_dc');
		}else{
			echo "<h2>Insert Data Gagal !!!</h2>";
		}
	}
	public function save()
	{
		$id = $this->input->post('id', true);
		$nama = $this->input->post('nama', true);
		$departemen = $this->input->post('departemen', true);
		$image = $this->input->post('image');
		$image = str_replace('data:image/jpeg;base64,','', $image);
		$image = base64_decode($image);
		$filename = 'image_'.time().'.jpg';
		file_put_contents(FCPATH.'/foto_karyawan/'.$filename,$image);
		$data = array(
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'image' => $filename,
		);

		$this->load->model('mymodel');
		$res = $this->mymodel->insert($data);
	if($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			redirect('web/index');
		}else{
			echo "<h2>Insert Data Gagal !!!</h2>";
		}
		echo json_encode($res);
	}

}

