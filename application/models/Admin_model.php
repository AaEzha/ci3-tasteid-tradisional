<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	private $table = "user";

	public function all()
	{
		$this->db->where('hak_akses', 'admin');
		$query = $this->db->get($this->table);
		return $query->result();
	}
}
