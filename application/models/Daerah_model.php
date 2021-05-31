<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah_model extends CI_Model {
	public function provinsi()
	{
		$this->db->select('provinsi');
		$this->db->group_by("provinsi");
		$query = $this->db->get('daerah');

		return $query->result();
	}
}
