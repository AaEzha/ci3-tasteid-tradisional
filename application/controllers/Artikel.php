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

	public function tambah()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('isi', 'Isi Artikel', 'required');
		$this->form_validation->set_rules('judul', 'Judul Artikel', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tulis Artikel';
			$data['view'] = 'artikel/form';
			$this->load->view('template/user/index', $data);
		} else {
			$config['upload_path']          = './assets/uploads/articles/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['encrypt_name']         = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('msg', 'Terjadi kesalahan pada pemilihan gambar');
				return redirect('artikel/form', 'refresh');
			} else {
				$is_admin = 0;

				if($this->session->akses == 'owner' || $this->session->akses == 'admin') $is_admin = 1;

				$data = [
					'user_id' => $this->session->userid,
					'penerbit' => $this->session->nama,
					'tanggal' => date('Y-m-d H:i:s'),
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),
					'gambar' => "articles/".$this->upload->data("file_name"),
					'is_admin' => $is_admin
				];

				$this->martikel->save($data);

				$this->session->set_flashdata('msg', 'Data berhasil disimpan');
				return redirect('artikel');
			}
		}
	}

	public function edit($id = null)
	{
		if(is_null($id)) return redirect('artikel');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('isi', 'Isi Artikel', 'required');
		$this->form_validation->set_rules('judul', 'Judul Artikel', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = $this->martikel->get($id);
			$data['title'] = 'Edit Artikel';
			$data['view'] = 'artikel/form';
			$this->load->view('template/user/index', $data);
		} else {
			$data = $this->martikel->get($id);

			if(!empty($_FILES['gambar']['name']))
			{
				$config['upload_path']          = './assets/uploads/articles/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['encrypt_name']         = true;
	
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('msg', 'Terjadi kesalahan pada pemilihan gambar');
					return redirect('artikel/edit', 'refresh');
				} else {
					unlink("assets/uploads/". $data->gambar);
					$data = [
						'judul' => $this->input->post('judul'),
						'isi' => $this->input->post('isi'),
						'gambar' => "articles/".$this->upload->data("file_name"),
					];
				}
			}else{
				$data = [
					'judul' => $this->input->post('judul'),
					'isi' => $this->input->post('isi'),
				];
			}
			$this->martikel->update($data, $id);

			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('artikel');

		}
	}

	public function hapus($id = null)
	{
		if(is_null($id)) return redirect('artikel');

		$data = $this->martikel->get($id);
		unlink("assets/uploads/". $data->gambar);
		$hapus = $this->martikel->delete($id);
		if($hapus){
			$this->session->set_flashdata('msg', 'Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('msg', 'Data gagal dihapus');
		}
		return redirect('artikel');
	}

	public function status($id = null)
	{
		if(is_null($id)) return redirect('artikel');

		$data = $this->martikel->get($id);

		$status = ($data->status == 0) ? 1 : 0;

		$data = [
			'status' => $status
		];

		$ubah = $this->martikel->update($data, $id);

		if($ubah){
			$this->session->set_flashdata('msg', 'Status berhasil diubah');
		}else{
			$this->session->set_flashdata('msg', 'Status gagal diubah');
		}

		return redirect('artikel');
	}
}
