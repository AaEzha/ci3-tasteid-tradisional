<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->akses != "admin" and $this->session->akses != 'owner') return redirect('dashboard', 'refresh');
		$this->load->model('Banner_model', 'mbanner');
	}

	public function index()
	{
		$data['data'] = $this->mbanner->all();
		$data['title'] = 'Banner';
		$data['view'] = 'banner/index';
		$this->load->view('template/user/index', $data);
	}

	public function tambah()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Banner', 'required');
		$this->form_validation->set_rules('url', 'URL Banner', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Banner';
			$data['view'] = 'banner/form';
			$this->load->view('template/user/index', $data);
		} else {
			$config['upload_path']          = './assets/uploads/images/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['encrypt_name']         = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('msg', 'Terjadi kesalahan pada pemilihan gambar');
				return redirect('banner/form', 'refresh');
			} else {
				$data = [
					'nama' => $this->input->post('nama'),
					'url' => $this->input->post('url'),
					'gambar' => "images/".$this->upload->data("file_name"),
				];

				$this->mbanner->save($data);

				$this->session->set_flashdata('msg', 'Data berhasil disimpan');
				return redirect('banner');
			}
		}
	}

	public function edit($id = null)
	{
		if(is_null($id)) return redirect('banner');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama Banner', 'required');
		$this->form_validation->set_rules('url', 'URL Banner', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = $this->mbanner->get($id);
			$data['title'] = 'Edit Banner';
			$data['view'] = 'banner/form';
			$this->load->view('template/user/index', $data);
		} else {
			$data = $this->mbanner->get($id);

			if(!empty($_FILES['gambar']['name']))
			{
				$config['upload_path']          = './assets/uploads/images/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['encrypt_name']         = true;
	
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('msg', 'Terjadi kesalahan pada pemilihan gambar');
					return redirect('banner/edit', 'refresh');
				} else {
					unlink("assets/uploads/". $data->gambar);
					$data = [
						'nama' => $this->input->post('nama'),
						'url' => $this->input->post('url'),
						'gambar' => "images/".$this->upload->data("file_name"),
					];
				}
			}else{
				$data = [
					'nama' => $this->input->post('nama'),
					'url' => $this->input->post('url'),
				];
			}
			$this->mbanner->update($data, $id);

			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('banner');

		}
	}

	public function hapus($id = null)
	{
		if(is_null($id)) return redirect('banner');

		$data = $this->mbanner->get($id);
		unlink("assets/uploads/". $data->gambar);
		$hapus = $this->mbanner->delete($id);
		if($hapus){
			$this->session->set_flashdata('msg', 'Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('msg', 'Data gagal dihapus');
		}
		return redirect('banner');
	}
}
