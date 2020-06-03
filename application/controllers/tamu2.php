<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Tamu2 extends CI_Controller {

	public function view_tamu(){
		$date = date("d/m/Y h:i:s");
		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top2');
		$this->load->view('tamu2/form_add_icbc',array('date' => $date));
		$this->load->view('background/footer');
	}

	public function view_tamu1(){
		$date = date("d/m/Y h:i:s");
		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top2');
		$this->load->view('tamu2/form_add_tamu',array('date' => $date));
		$this->load->view('background/footer');
	}

public function add_tamu2(){
		
		$code = $_POST['code'];
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$departemen = $_POST['departemen'];
		$keperluan	= $_POST['keperluan'];
		$tanggal	= $_POST['tanggal'];
		$jam	= $_POST['jam'];
		$jam1	= $_POST['jam1'];
		$check_list	= $_POST['check_list'];
		$remaks = $_POST['remaks'];
		$status = $_POST['status'];


		$data = array(
			'code' => $code,
			'id' => $id,
			'nama' => $nama,
			'departemen' => $departemen,
			'keperluan' => $keperluan,
			'tanggal' => $tanggal,
			'jam' => $jam,
			'jam1' => $jam1,
			'check_list' => $check_list,
			'remaks' => $remaks,
			'status' => $status
		 );
		$res = $this->mymodel->insertdata('dc_access_log',$data);
		redirect('tamu2/view_foto');
	}

	public function kembali(){
		$dt['s']=$this->mymodel->Getaccess_dc5()->num_rows();
		$dt['w']=$this->mymodel->Getaccess_dc6()->num_rows();
		$dt['r']=$this->mymodel->Getaccess_dc7()->num_rows();
		$dt['z']=$this->mymodel->Getaccess_dc8()->num_rows();

		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top2');
		$this->load->view('background/dashboard3',$dt);
		$this->load->view('background/footer');
	}

public function view_foto(){
			$foto = $this->mymodel->Getaccess_dc2();
			$data = array( "code" => $foto[0]['code'],);
				$this->load->view('background/header');
				$this->load->view('background/sidebar2');
				$this->load->view('background/top');
				$this->load->view('tamu2/form_add_foto',$data);
				$this->load->view('background/footer');
			}

public function view_foto2(){
			$foto = $this->mymodel->Getaccess_dc2();
			$data = array( "code" => $foto[0]['code'],);
				$this->load->view('background/header');
				$this->load->view('background/sidebar2');
				$this->load->view('background/top');
				$this->load->view('tamu2/form_add_foto_2',$data);
				$this->load->view('background/footer');
			}
	public function view_foto3(){
			$foto = $this->mymodel->Getaccess_dc2();
			$data = array( "code" => $foto[0]['code'],);
				$this->load->view('background/header');
				$this->load->view('background/sidebar2');
				$this->load->view('background/top');
				$this->load->view('tamu2/form_add_foto_3',$data);
				$this->load->view('background/footer');
			}
	public function view_tt(){
		$tt = $this->mymodel->Getaccess_dc2();
		$data = array( "code" => $tt[0]['code'],);
			$this->load->view('background/header');
			$this->load->view('background/sidebar2');
			$this->load->view('background/top');
			$this->load->view('tt/tt1',$data);
			$this->load->view('background/footer');
		}

	public function view_tt2(){
			$tt = $this->mymodel->Getaccess_dc2();
			$data = array( "code" => $tt[0]['code'],);
				$this->load->view('background/header');
				$this->load->view('background/sidebar2');
				$this->load->view('background/top');
				$this->load->view('tt/tt2',$data);
				$this->load->view('background/footer');
			}

	public function detail_tamu($code){
		$detail = $this->mymodel->Getaccess_dc("where code = '$code'");
		$data = array(
			"id" => $detail[0]['id'],
			"nama" => $detail[0]['nama'],
			"departemen" => $detail[0]['departemen'],
			"keperluan" => $detail[0]['keperluan'],
			"image" => $detail[0]['image'],
		);
		$this->load->view('background/header');
		$this->load->view('background/sidebar2');
		$this->load->view('background/top');
		$this->load->view('tamu2/form_detail_tamu',$data);
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
		$this->load->view('tamu2/form_edit_tamu',$data);
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
		$res = $this->mymodel->DeleteData("dc_access_log",$where);
		if($res >= 1){
			echo "<script>alert('Delete Data sukses');history.go(-1);</script>";
		}else{
			echo "<script>alert('Delete Data Gagal');history.go(-1);</script>";
		}
	}

public function delete_foto($code){
		$image = $this->mymodel->Getaccess_dc2();
		$where = array( "code" => $image[0]['code'],);
		$res = $this->mymodel->DeleteData("foto",$where);
		redirect('tamu2/view_foto');
	}	

	public function save2(){
		$code = $this->input->post('code', true);
		$id = $this->input->post('id', true);
		$nama = $this->input->post('nama', true);
		$departemen = $this->input->post('departemen', true);
		$keperluan = $this->input->post('keperluan', true);
		$tanggal = $this->input->post('tanggal', true);
		$jam = $this->input->post('jam', true);
		$jam1 = $this->input->post('jam1', true);
		$remaks = $this->input->post('remaks', true);
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
			'jam1' => $jam1,
			'remaks' => $remaks,
			'check_list' => $check_list,
			'image' => $filename,
		);

		$this->load->model('mymodel');
		$res = $this->mymodel->insert_tamu($data);
		redirect('tamu2/view_tamu1');
	}

	

	public function save(){
		$id = $this->input->post('id', true);
		$image = $this->input->post('image');
		$image = str_replace('data:image/png;base64,','', $image);
		$image = base64_decode($image);
		$filename = $this->input->post('id', true).'.png';
		file_put_contents(FCPATH.'/foto_karyawan/'.$filename,$image);
		$data = array(
			'id' => $id,
			'image' => $filename,
		);

		$this->load->model('mymodel');
		$res = $this->mymodel->insert_foto($data);
	}


}