<?php 
class Adm extends CI_controller
{
	
	public function index()
	{
		$data['tbl_ijin'] = $this->rental_model->get_data('tbl_ijin')->result();
		$this->load->view('templates_user/v_head');  
		$this->load->view('templates_user/v_header');  
		$this->load->view('templates_user/v_nav_adm'); 
		$this->load->view('user/dashboard_adm', $data);  
		$this->load->view('templates_user/v_footer'); 
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
		$this->load->view('user/approved_form', $data);  
		$this->load->view('templates_user/v_footer'); 
	}

	public function approved_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == true )
		{
			$this->approved();
		}else { 
		
			$id =  $this->input->post('id_ijin');
			$lokasi     =  $this->input->post('lokasi');
			$nama_tamu     =  $this->input->post('nama_tamu');
			$purpose     =  $this->input->post('purpose');
			$tanggal     =  $this->input->post('tanggal');
			$in     =  $this->input->post('in');
			$out     =  $this->input->post('out');
			$belongings     = $this->input->post('belongings');
			$remark     = $this->input->post('remark');
			
			$status   = '2';
	
			

			
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
			
			
			
			

			$where = array (
				'id_ijin'  => $id
			);

			$this->rental_model->update_data($where,$data,'tbl_ijin');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				ijin Berhasil Di approved.
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('user/adm');

		}
	}

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
		$this->form_validation->set_rules('status','Status', 'required');
		
	}

	public function detail($id)
		{
			$data['detail'] = $this->rental_model->ambil_id_ijin($id);
			$data['customer'] = $this->rental_model->get_data('customer');

			$this->load->view('templates_user/v_head');  
			$this->load->view('templates_user/v_header');  
			$this->load->view('templates_user/v_nav_adm'); 
			$this->load->view('user/detail', $data);  
			$this->load->view('templates_user/v_footer'); 
			// $this->load->view('templates_admin/header');
			// $this->load->view('templates_admin/sidebar');
			// $this->load->view('admin/detail_mobil', $data);
			// $this->load->view('templates_admin/footer');

			// $data = [
			// 	'title' => 'Dewtail Mobil',
			// 	'detail' => $this->rental_model->ambil_id_mobil($id),
				
			// 	'isi' => 'admin/detail_mobil'
			// ];
	
			// $this->load->view('layout/v_template', $data);
		}


}


	

