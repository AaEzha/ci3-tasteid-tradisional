<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!isset($this->session->userid)) return redirect('auth', 'refresh');
	}

	public function index()
	{
		session_destroy();
		return redirect('auth', 'refresh');
	}

}
