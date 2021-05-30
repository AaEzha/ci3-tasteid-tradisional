<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(!isset($this->session->userid)) return redirect('auth', 'refresh');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['view'] = 'dashboard/index';
		$this->load->view('template/user/index', $data);
	}

}
