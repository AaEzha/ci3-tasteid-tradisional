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
			$this->load->view('template/guest/v_auth_header');
			$this->load->view('auth/v_login');
			$this->load->view('template/guest/v_auth_footer');
		}else{
			$this->load->model('user_model', 'muser');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			// cek username
			$cek_username = $this->muser->cek_username($username);
			$cek_password = $this->muser->cek_password($username, $password);

			if(!$cek_username){
				$this->session->set_flashdata('msg', 'Email tidak ditemukan');
				$this->load->view('template/guest/v_auth_header');
				$this->load->view('auth/v_login');
				$this->load->view('template/guest/v_auth_footer');
				return true;
			}

			if(!$cek_password){
				$this->session->set_flashdata('msg', 'Password tidak sama');
				$this->load->view('template/guest/v_auth_header');
				$this->load->view('auth/v_login');
				$this->load->view('template/guest/v_auth_footer');
				return true;
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

	public function register()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama_user', 'Nama', 'required');
		$this->form_validation->set_rules('email_user', 'Email', 'required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('password_user', 'Password', 'required');
		$this->form_validation->set_rules('password_konf', 'Password', 'required|matches[password_user]');

		if ($this->form_validation->run() == FALSE){
			$this->load->model('Daerah_model', 'mdaerah');
			$data['provs'] = $this->mdaerah->provinsi();
			$this->load->view('template/guest/v_auth_header');
			$this->load->view('auth/v_register', $data);
			$this->load->view('template/guest/v_auth_footer');
		}else{
			$this->load->model('user_model', 'muser');

			$data = [
				'nama_user' => $this->input->post('nama_user'),
				'email_user' => $this->input->post('email_user'),
				'provinsi' => $this->input->post('provinsi'),
				'password_user' => md5($this->input->post('password_user'))
			];

			$daftar = $this->db->insert('user', $data);

			if(!$daftar){
				$this->session->set_flashdata('msg', 'Password tidak sama');
				$this->load->view('template/guest/v_auth_header');
				$this->load->view('auth/v_register');
				$this->load->view('template/guest/v_auth_footer');
				return true;
			}else{
				$this->session->set_flashdata('msg', 'Pendaftaran berhasil!');
				return redirect('auth', 'refresh');
			}
		}
	}
}
