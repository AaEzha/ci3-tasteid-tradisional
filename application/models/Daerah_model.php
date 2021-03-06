<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model {
	private $table = "daerah";

	public function provinsi()
	{
		$this->db->select('provinsi, id');
		$this->db->group_by("provinsi");
		$query = $this->db->get($this->table);

		return $query->result();
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $awal)
	{
		$this->db->where('provinsi', $awal);
		return $this->db->update($this->table, $data);
	}

	public function get($id)
	{
		$query = $this->db->get_where($this->table, array('id' => $id));
		return $query->row();
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, array('provinsi' => $id));
	}
}
