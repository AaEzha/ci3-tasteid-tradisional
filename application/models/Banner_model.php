<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model {
	private $table = "banner";

	public function all()
	{
		$query = $this->db->query("select * from banner");
		return $query->result();
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}

	public function get($id)
	{
		$query = $this->db->get_where($this->table, array('id' => $id));
		return $query->row();
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array('id' => $id));
	}

}
