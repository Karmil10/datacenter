<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public $table ='dc_access_log';
	public $code	= 'code';
/* Model Access DC */
	public function Getaccess_dc($where=""){
		$data = $this->db->query('select * from dc_access_log '.$where);
		return $data->result_array();
	}

	public function Getaccess_dc2(){
		$data = $this->db->query('select * from dc_access_log order by jam desc limit 1');
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
	public function insert_tamu($data)
	{
		$this->db->insert('dc_access_log', $data);
		return $this->db->insert_id();
	}

	public function insert_foto($data)
	{
		$this->db->insert('foto', $data);
		return $this->db->insert_id();
	}

	public function Getaccess_dc5(){
		$data = $this->db->query('select * from dc_access_log WHERE DAY(jam) = DAY(NOW())');
		return $data;
	}

	public function Getaccess_dc6(){
		$data = $this->db->query('select * from dc_access_log WHERE MONTH(jam) = MONTH(NOW())');
		return $data;
	}
	public function Getaccess_dc7(){
		$data = $this->db->query('select * from dc_access_log WHERE status="ICBC" AND DAY(jam) = DAY(NOW())');
		return $data;
	}
	public function Getaccess_dc8(){
		$data = $this->db->query('select * from dc_access_log WHERE status="VENDOR" AND DAY(jam) = DAY(NOW())');
		return $data;
	}
				
}



