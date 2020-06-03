<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rtgs_model extends CI_Model {
	public function Getrtgsstartday($where=""){
		$data = $this->db->query('select * from tb_rtgs_startday '.$where);
		return $data->result_array();
	}
	public function Getrtgsbackup($where=""){
		$data = $this->db->query('select * from tb_rtgs_backup '.$where);
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
		return $this->db->get('tb_rtgs_startday');

	}

}

