<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->akses != 'owner') return redirect('auth', 'refresh');
		$this->load->model('User_model', 'muser');
	}

	public function index()
	{
		$data['data'] = $this->muser->all();
		$data['title'] = 'Pengguna';
		$data['view'] = 'pengguna/index';
		$this->load->view('template/user/index', $data);
	}

	public function tambah()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('daerah', 'Daerah', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Pengguna';
			$data['view'] = 'pengguna/form';
			$this->load->model('Daerah_model', 'mdaerah');
			$data['provs'] = $this->mdaerah->provinsi();
			$this->load->view('template/user/index', $data);
		} else {
			$config['upload_path']          = './assets/uploads/users/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['encrypt_name']         = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('msg', 'Terjadi kesalahan pada pemilihan gambar');
				return redirect('pengguna/tambah', 'refresh');
			} else {
				$data = [
					'nama_user' => $this->input->post('nama'),
					'email_user' => $this->input->post('email'),
					'password_user' => md5($this->input->post('password')),
					'provinsi' => $this->input->post('daerah'),
					'img_user' => "users/".$this->upload->data("file_name"),
					'hak_akses' => 'member'
				];

				$this->muser->save($data);

				$this->session->set_flashdata('msg', 'Data berhasil disimpan');
				return redirect('pengguna');
			}
		}
	}

	public function edit($id = null)
	{
		if(is_null($id)) return redirect('pengguna');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('daerah', 'Daerah', 'required');

		if(is_null($this->input->post('id'))) $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = $this->muser->get($id);
			if($data['data'] == null) return redirect('pengguna');
			$this->load->model('Daerah_model', 'mdaerah');
			$data['provs'] = $this->mdaerah->provinsi();
			$data['title'] = 'Edit Pengguna';
			$data['view'] = 'pengguna/form';
			$this->load->view('template/user/index', $data);
		} else {
			$data = $this->muser->get($id);

			if(!empty($_FILES['gambar']['name']))
			{
				$config['upload_path']          = './assets/uploads/users/';
				$config['allowed_types']        = 'gif|jpg|png|jpeg';
				$config['encrypt_name']         = true;
	
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('msg', 'Terjadi kesalahan pada pemilihan gambar');
					return redirect('banner/edit', 'refresh');
				} else {
					unlink("assets/uploads/". $data->gambar);
					$data = [
						'nama_user' => $this->input->post('nama'),
						'provinsi' => $this->input->post('daerah'),
						'img_user' => "users/".$this->upload->data("file_name"),
					];
				}
			}else{
				$data = [
					'nama_user' => $this->input->post('nama'),
					'provinsi' => $this->input->post('daerah'),
				];
			}

			$this->muser->update($data, $id);
			
			if(!is_null($this->input->post('password'))){
				$data = [
					'password_user' => md5($this->input->post('password'))
				];
				$this->muser->update($data, $id);
			}


			$this->session->set_flashdata('msg', 'Data berhasil disimpan');
			return redirect('pengguna');
		}
	}

	public function hapus($id = null)
	{
		if(is_null($id)) return redirect('pengguna');

		$data = $this->muser->get($id);
		unlink("assets/uploads/". $data->gambar);
		$hapus = $this->muser->delete($id);
		if($hapus){
			$this->session->set_flashdata('msg', 'Data berhasil dihapus');
		}else{
			$this->session->set_flashdata('msg', 'Data gagal dihapus');
		}
		return redirect('pengguna');
	}
}
