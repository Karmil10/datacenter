<?php 


class model_report extends CI_Model
{
	
	public function tampil_data(){
		return $this->db->get('dc_access_log')->result();
	}

	public function search(){
		$this->db->select('*');
		$this->db->from('dc_access_log');
		$this->db->where('tanggal >=',$this->input->post('tgl_awal'));
		$this->db->where('tanggal <=',$this->input->post('tgl_akhir'));
		return $this->db->get()->result();
	}


}