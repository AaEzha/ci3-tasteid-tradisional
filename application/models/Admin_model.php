<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	private $table = "user";

	public function all()
	{
		$this->db->where('hak_akses', 'admin');
		$this->db->or_where('hak_akses', 'owner');
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
		$query = $this->db->get_where($this->table, array('id_user' => $id, 'hak_akses' => 'admin'));
		return $query->row();
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array('id_user' => $id));
	}
}
