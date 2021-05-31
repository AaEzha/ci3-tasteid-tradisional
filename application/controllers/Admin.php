<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->akses != 'admin') return redirect('auth', 'refresh');
		$this->load->model('Admin_model', 'madmin');
	}

	public function index()
	{
		$data['data'] = $this->madmin->all();
		$data['title'] = 'Admin';
		$data['view'] = 'admin/index';
		$this->load->view('template/user/index', $data);
	}

}
