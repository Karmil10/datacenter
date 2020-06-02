<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ej_model extends CI_Model {
	public function Getej($where=""){
		$data = $this->db->query('select * from tb_ej '.$where);
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

}

