<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function index()
	{
		# code...
	}

	public function artikel($id = null)
	{
		$this->load->helper('text');
		$this->load->model('Artikel_model', 'martikel');
		$data['data'] = $this->martikel->all();
		if(is_null($id)){
			$data['title'] = 'Daftar Artikel';
			$data['view'] = 'front/artikel';
		}else{
			$data['title'] = 'Artikel Satuan';
			$data['view'] = 'front/artikel-satuan';
			$data['satuan'] = $this->martikel->get($id);
		}

		$this->load->view('template/front/index', $data);
	}

	public function resep($id = null)
	{
		$this->load->helper('text');
		$this->load->model('Artikel_model', 'martikel');
		$data['data'] = $this->martikel->all();
		if(is_null($id)){
			$data['title'] = 'Daftar Resep';
			$data['view'] = 'front/resep';
		}else{
			$data['title'] = 'Artikel Satuan';
			$data['view'] = 'front/artikel-satuan';
			$data['satuan'] = $this->martikel->get($id);
		}

		$this->load->view('front/resep', $data);
	}

	public function maintenance()
	{
		$data['title'] = 'Coming Soon';
		$data['view'] = 'front/maintenance';
		$this->load->view('template/front/index', $data);
	}
}
