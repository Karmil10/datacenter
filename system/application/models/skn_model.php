<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class skn_model extends CI_Model {
	public function Getsknsod($where=""){
		$data = $this->db->query('select * from tb_skn_sod '.$where);
		return $data->result_array();
	}
	public function Getskneod($where=""){
		$data = $this->db->query('select * from tb_skn_eod '.$where);
		return $data->result_array();
	}

	public function InsertData($tableName,$data){
		$res = $this->db->insert($tableName,$data);
		return $res;
	
	}
	public function UpdateData($tableName,$data,$where){
		$res = $this->db->update($tableName,$data,$where);
		return $res;

	}
	public function DeleteData($tableName,$where){
		$res = $this->db->delete($tableName,$where);
		return $res;
	}

	public function tampil_data()
	{
		return $this->db->get('tb_skn_sod');

	}

}

