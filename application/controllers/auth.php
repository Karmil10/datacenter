<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	public function login()
	{	
		check_already_login();
		$this->load->view('administrator/login');
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		//bisa juga spti ini -> if (isset($_POST['login'])) {
		if (isset($post['login'])) {
			$this->load->model('user_m');
			$query=$this->user_m->login($post);
			if ($query->num_rows() > 0 ){
				$row=$query->row();
				$param=array (
				'userid'=>$row->user_id,
				'level'=>$row->level
				);
				$this->session->set_userdata($param);
				echo "<script>
						
						window.location='".base_url('dashboard')."';
					 </script>";
			} else {
				echo "<script>
						alert('Login Gagal, Username / Password Anda Salah');
						window.location='".base_url('auth/login')."';
					 </script>";
			}
		}
	}

	public function logout()
	{
		$param=array('userid','level');
		$this->session->unset_userdata($param);
		redirect('auth/login');
	}
}
