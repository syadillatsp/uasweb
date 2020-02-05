<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login ($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', sha1($post['password']));
		$query = $this->db->get();
		return $query;

	}
	public function get($id = null)
	{
		 $this->db->from('user');
		 if($id != null){
		 	$this->db->where('user_id', $id);
		 }
		 $query = $this->db->get();
		 return $query;

	}
	public function add($post)
	{
		$param['name'] = $post['fullname'];
		$param['username'] = $post['username'];
		$param['password'] = sha1($post['password']);
		$param['alamat'] = $post['alamat'] != "" ? $post['alamat'] : null;
		$param['level'] = $post['level'];
		$this->db->insert('user', $param);
	}

	public function edit($id)
	{

		
	}

	public function del($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');


	}
}