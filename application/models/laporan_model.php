<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_model extends CI_Model {
	
/* Report DC */
	public function Getlaporan($rowno,$rowperpage,$where=""){
		$data = $this->db->query('select * from dc_access_log'.$where);
		$this->db->select('*');
		$this->db->from('laporan');
        $this->db->limit($rowperpage, $rowno);   
		$query = $this->db->get();
		return $data->result_array();
	}

	public function Getlaporan2($where=""){
		$data = $this->db->query('select * from dc_access_log order by tanggal asc'.$where);
		return $data->result_array();
	}

	public function Getlaporan3($where=""){
		$data = $this->db->query('select * from dc_access_log'.$where);
		return $data->result_array();
	}

	public function sign($where=""){
		$data = $this->db->query('select * from signature'.$where);
		return $data->result_array();
	}
	public function search(){
		$bulan = $this->input->GET('bulan', TRUE);
		$data = $this->db->query("SELECT * from dc_access_log where tanggal ");
		return $data->result();
	}
	public function __construct() {
		parent::__construct(); 
	}

	// Fetch records
	// public function getData($rowno,$rowperpage) {
			
	// 	$this->db->select('*');
	// 	$this->db->from('laporan');
 //        $this->db->limit($rowperpage, $rowno);   
	// 	$query = $this->db->get();
       
	// 	return $query->result_array();
	// }

	// Select total records
    public function getrecordCount() {

      $this->db->select('count(*) as allcount');
      $this->db->from('');
      $query = $this->db->get();
      $result = $query->result_array();
      
      return $result[0]['allcount'];
    }
	// protected $table = 'authors';

 //    public function __construct() {
 //        parent::__construct();
 //    }

    // public function get_count() {
    //     return $this->db->count_all($this->table);
    // }

    // public function get_authors($limit, $start) {
    //     $this->db->limit($limit, $start);
    //     $query = $this->db->get($this->table);

    //     return $query->result();
    // }

}

