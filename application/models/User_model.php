<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	private $table = "user";

	public function all()
	{
		$this->db->where('hak_akses', 'member');
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_user', $id);
		return $this->db->update($this->table, $data);
	}

	public function get($id)
	{
		$query = $this->db->get_where($this->table, array('id_user' => $id, 'hak_akses' => 'member'));
		return $query->row();
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array('id_user' => $id));
	}
	
	public function cek_username($username)
	{
		$query = $this->db->query("select id_user from user where email_user='$username'");

		return $query->row();
	}

	public function cek_password($username, $password)
	{
		$query = $this->db->query("select * from user where email_user='$username' and password_user='$password'");

		return $query->row();
	}
}
