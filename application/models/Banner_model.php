<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model {

	public function all()
	{
		$query = $this->db->query("select * from banner");
		return $query->result();
	}

	public function save($data)
	{
		return $this->db->insert('banner', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id', $id);
		return $this->db->update('banner', $data);
	}

	public function get($id)
	{
		$query = $this->db->get_where('banner', array('id' => $id));
		return $query->row();
	}

	public function delete($id)
	{
		return $this->db->delete('banner', array('id' => $id));
	}

}
