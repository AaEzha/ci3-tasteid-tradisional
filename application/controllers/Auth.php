<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(isset($this->session->userid)) return redirect('dashboard', 'refresh');
	}

	public function index()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('auth/login');
		}else{
			$this->load->model('user_model', 'muser');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			// cek username
			$cek_username = $this->muser->cek_username($username);
			$cek_password = $this->muser->cek_password($username, $password);

			if(!$cek_username){
				$this->session->set_flashdata('msg', 'Email tidak ditemukan');
				return $this->load->view('auth/login');
			}

			if(!$cek_password){
				$this->session->set_flashdata('msg', 'Password tidak sama');
				return $this->load->view('auth/login');
			}else{
				$data = [
					'userid' => $cek_password->id_user,
					'nama' => $cek_password->nama_user,
					'email' => $cek_password->email_user,
					'akses' => $cek_password->hak_akses,
				];
				$this->session->set_userdata($data);

				$this->session->set_flashdata('msg', 'Selamat datang, ' . $cek_password->nama_user);

				return redirect('auth', 'refresh');
			}
		}
	}
}
