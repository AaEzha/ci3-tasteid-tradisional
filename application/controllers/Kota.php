<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->akses != 'admin' and $this->session->akses != 'owner') return redirect('auth', 'refresh');
		$this->load->model('Daerah_model', 'mdaerah');
		$this->load->model('Kota_model', 'mkota');
	}

	public function index()
	{
		return redirect('daerah');
	}

	public function detail($id = null)
	{
		if(is_null($id)) return redirect('daerah');

		$data['prov'] = $this->mdaerah->get($id);
		$data['data'] = $this->mkota->all($data['prov']->provinsi);
		$data['title'] = 'Kota/Kabupaten | Provinsi '. $data['prov']->provinsi;
		$data['view'] = 'kota/index';
		$this->load->view('template/user/index', $data);
	}

	public function tambah($id = null)
	{
		if(is_null($id)) return redirect('daerah');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('kab_kota', 'Nama Kota/Kabupaten', 'required');
		$this->form_validation->set_rules('provinsi', 'Nama Provinsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Kota/Kabupaten';
			$data['view'] = 'kota/form';
			$data['prov'] = $this->mdaerah->get($id);
			$this->load->view('template/user/index', $data);
		} else {
			$data = [
				'provinsi' => $this->input->post('provinsi'),
				'kab_kota' => $this->input->post('kab_kota'),
			];

			
			$this->mkota->save($data);
			
			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('kota/detail/'. $id);
		}
	}

	public function edit($id = null)
	{
		if(is_null($id)) return redirect('daerah');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kab_kota', 'NamaKota/Kabupaten', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = $this->mkota->get($id);
			if($data['data'] == null) return redirect('daerah');
			$data['title'] = 'Edit Kota/Kabupaten';
			$data['view'] = 'kota/form';
			$this->load->view('template/user/index', $data);
		} else {
			$data = [
				'kab_kota' => $this->input->post('kab_kota')
			];
			$this->mkota->update($data, $id);


			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('kota/detail/'.$id);
		}
	}

	public function hapus($id = null)
	{
		if(is_null($id)) return redirect('daerah');

		$hapus = $this->mkota->delete($id);
		if($hapus){
			$this->session->set_flashdata('msg', 'Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('msg', 'Data gagal dihapus');
		}
		return redirect('daerah');
	}

}
