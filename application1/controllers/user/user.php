<?php 
class User extends CI_controller
{
	
	public function index()
	{
		$data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();
		$this->load->view('templates_user/v_head');  
		$this->load->view('templates_user/v_header');  
		$this->load->view('templates_user/v_nav_user'); 
		$this->load->view('user/dashboard_user', $data);  
		$this->load->view('templates_user/v_footer'); 
	}


	// public function dashboard()
	// {
	// 	$data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();
	// 	$data['customer'] = $this->rental_model->get_data('customer')->result();
	

	// 	$this->load->view('templates_user/v_head');  
	// 	$this->load->view('templates_user/v_header');  
	// 	$this->load->view('templates_user/v_nav_user'); 
	// 	$this->load->view('user/dashboard_user', $data);  
	// 	$this->load->view('templates_user/v_footer'); 
	// }

	public function input_form()
	{
		$data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();

		$this->load->view('templates_user/v_head');  
		$this->load->view('templates_user/v_header');  
		$this->load->view('templates_user/v_nav_user'); 
		$this->load->view('user/form_input', $data);  
		$this->load->view('templates_user/v_footer'); 

	}

	public function input_data()
	{
		
			$lokasi     =  $this->input->post('lokasi');
			$nama_tamu     =  $this->input->post('nama_tamu');
			$purpose     =  $this->input->post('purpose');
			$tanggal     =  $this->input->post('tanggal');
			$in     =  $this->input->post('in');
			$out     =  $this->input->post('out');
			$belongings     = $this->input->post('belongings');
			$remark     = $this->input->post('remark');
			$status		= '1';
			$data = array (
				'lokasi'    =>  $lokasi,
				'nama_tamu'    =>  $nama_tamu,
				'purpose'    =>  $purpose,
				'tanggal'    =>  $tanggal,
				'in'    =>  $in,
				'out'    =>  $out,
				'belongings'    =>  $belongings,
				'remark'    =>  $remark,
				'status'  => $status,
			);

			$this->rental_model->insert_data($data, 'tbl_ijin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Request Berhasil DiInput.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			
			
			redirect('user/user');


		}


		public function approved($id)
	{
		$where = array ('id_ijin' => $id);

		// panggil semua data type di db yang di simpan di variable data

		$data['tbl_ijin'] = $this->db->query("SELECT * FROM tbl_ijin WHERE id_ijin='$id'")->result();
		// $data['type'] = $this->rental_model->get_data('type')->result();

		$this->load->view('templates_user/v_head');  
		$this->load->view('templates_user/v_header');  
		$this->load->view('templates_user/v_nav_user'); 
		$this->load->view('user/dashboard', $data);  
		$this->load->view('templates_user/v_footer'); 

	}

	public function approved_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == true )
		{
			$this->approved();
		}else {
			// $id          = $this->input->post('id_ijin');
			// $status   = $this->input->post('status');
			$status   = '2';
			// $nama_type   = $this->input->post('nama_type');
			

			$data = array (
			'status' => $status,
			// 'nama_type' 		=> $nama_type,
			
			
			);

			$where = array (
				'id_ijin'  => $id
			);

			$this->rental_model->update_data($where,$data,'tbl_ijin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				 Data type Berhasil DiUpdate.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('user/adm');

		}
	}

	// public function _rules()
	// {
	// 	$this->form_validation->set_rules('status','Status', 'required');
		// $this->form_validation->set_rules('nama_type','Nama Type', 'required');
		

		

		

		// public function approved($id)
		// {
		// $where = array ('id_ijin' => $id);

		// // panggil semua data mobil di db yang di simpan di variable data
		// $data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();
		//  // $data['tbl_ijin'] = $this->db->query("SELECT * FROM tbl_ijin ij, customer cs WHERE ij.role_id=cs.role_id AND ij.id_ijin='$id'")->result();
		// $data['customer'] = $this->rental_model->get_data('customer')->result();


		// $this->load->view('templates_user/v_head');  
		// $this->load->view('templates_user/v_header');  
		// $this->load->view('templates_user/v_nav_user'); 
		// $this->load->view('auth/login', $data);  
		// $this->load->view('templates_user/v_footer'); 
	// }
		// $data = [
		// 	'title' => 'Update Mobil',
		// 	'mobil' => $this->db->query("SELECT * FROM mobil mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_mobil='$id'")->result(),
		// 	'type' => $this->rental_model->get_data('type')->result(),
			
		// 	'isi' => 'admin/form_update_mobil'
		// ];

		// $this->load->view('layout/v_template', $data);

		// }

	public function _rules()
	{
		$this->form_validation->set_rules('lokasi','Lokasi', 'required');
		$this->form_validation->set_rules('nama_tamu','Nama Tamu', 'required');
		$this->form_validation->set_rules('purpose','Purpose', 'required');
		$this->form_validation->set_rules('tanggal','Tanggal', 'required');
		$this->form_validation->set_rules('in','In', 'required');
		$this->form_validation->set_rules('out','Out', 'required');
		$this->form_validation->set_rules('belongings','Belongings', 'required');
		$this->form_validation->set_rules('remark','Remark', 'required');
		$this->form_validation->set_rules('status','Status', 'required'
		);
		
	}


	
			
		

}