<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->akses != 'admin' and $this->session->akses != 'owner') return redirect('auth', 'refresh');
		$this->load->model('Artikel_model', 'martikel');
	}

	public function index()
	{
		$data['data'] = $this->martikel->all();
		$data['title'] = 'Artikel';
		$data['view'] = 'artikel/index';
		$this->load->view('template/user/index', $data);
	}
}
