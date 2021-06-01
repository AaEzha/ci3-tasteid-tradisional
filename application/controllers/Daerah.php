<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daerah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->akses != 'admin' and $this->session->akses != 'owner') return redirect('auth', 'refresh');
		$this->load->model('Daerah_model', 'mdaerah');
	}

	public function index()
	{
		$data['data'] = $this->mdaerah->provinsi();
		$data['title'] = 'Provinsi';
		$data['view'] = 'daerah/index';
		$this->load->view('template/user/index', $data);
	}

	public function tambah()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('provinsi', 'Nama Provinsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Provinsi';
			$data['view'] = 'daerah/form';
			$this->load->view('template/user/index', $data);
		} else {
			$data = [
				'provinsi' => $this->input->post('provinsi'),
				'kab_kota' => 'Contoh Kota/Kabupaten'
			];

			$this->mdaerah->save($data);

			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('daerah');
		}
	}

	public function edit($id = null)
	{
		if(is_null($id)) return redirect('daerah');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('provinsi', 'Nama Provinsi', 'required');

		if(!is_null($this->input->post('id'))) $this->form_validation->set_rules('provinsi_awal', 'Provinsi Awal', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = $this->mdaerah->get($id);
			if($data['data'] == null) return redirect('daerah');
			$data['title'] = 'Edit Provinsi';
			$data['view'] = 'daerah/form';
			$this->load->view('template/user/index', $data);
		} else {
			$data = [
				'provinsi' => $this->input->post('provinsi')
			];
			$this->mdaerah->update($data, $this->input->post('provinsi_awal'));


			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('daerah');
		}
	}

	public function hapus($id = null)
	{
		if(is_null($id)) return redirect('daerah');

		$data = $this->mdaerah->get($id);
		$hapus = $this->mdaerah->delete($data->provinsi);
		if($hapus){
			$this->session->set_flashdata('msg', 'Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('msg', 'Data gagal dihapus');
		}
		return redirect('daerah');
	}

}
