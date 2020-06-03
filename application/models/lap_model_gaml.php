<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lap_gaml extends CI_Model {
	
/* Report DC */
	

   	public function Getlapgaml($where=""){
		$data = $this->db->query('select * from tb_gaml '.$where);
		return $data->result_array();
	}
}