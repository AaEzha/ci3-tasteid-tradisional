<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	private $table = "user";
	
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
