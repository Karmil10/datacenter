<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Tt extends CI_Controller {
public function add_data_tt(){
		$id = $_POST['signaturesubmit'];
		$signature = $_POST['signature'];
        $signatureFileName = $_POST['signaturesubmit'].'.png';
        $signature = str_replace('data:image/png;base64,', '', $signature);
        $signature = str_replace(' ', '+', $signature);
        $data = base64_decode($signature);
        $file = 'ttd_image/'.$signatureFileName;
        file_put_contents($file, $data);
		$data_insert = array(
			'id' => $id,
			'img' => $signatureFileName
		 );
		$res = $this->tt_model->insertdata('signature',$data_insert);
		if($res >= 1){
			$res = $this->session->set_flashdata('message','Data Berhasil Ditambahkan !!!');
			redirect('tamu2/kembali');
		}else{
			$res = $this->session->set_flashdata('message','Penambahan Data Gagal !!!');
			redirect('tamu2/kembali');
		}

	}
	
}