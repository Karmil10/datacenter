<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query=$this->db->get();
		return $query;

	}

	public function get($id=null)
	{
		$this->db->from('tb_user');
		if($id != null) {
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$param['nama']=$post['nama'];
		$param['username']=$post['username'];
		$param['password']=sha1($post['password']);

		$param['level']='2';
		$this->db->insert('tb_user',$param);
	}

	public function edit($post)
	{
		$param['nama']=$post['fullname'];
		$param['username']=$post['username'];
		if (!empty($post['password'])) {
			$param['password']=sha1($post['password']);
		}
		
		$this->db->where('user_id', $post['user_id']);
		$this->db->update('tb_user',$param);
	}

	public function edituser($post)
	{
		
		$param['password']=sha1($post['password']);
		$this->db->where('user_id', $post['user_id']);
		$this->db->update('tb_user',$param);
	}

	public function del($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('tb_user');
	}

	public function ambil_data($id)
	{
		$this->db->where('username', $id);
		return $this->db->get('tb_user')->row();
	}
}