<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Models', 'm');
	}
	public function index()
	{
		if ($this->session->userdata('email')) {
			if ($this->session->userdata('role_id') == 1) {
				redirect('administrator');
			}
			if ($this->session->userdata('role_id') == 2) {
				redirect('dashboard');
			}
			 else {
				redirect('login');
			}
		};
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'required' => 'Email Tidak Boleh Kosong',
				'valid_email' => 'Format Email Harus Sesuai'
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim',
			[
				'required' => 'Password Tidak Boleh Kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$data['title'] = "Perpustakaan | Login ";
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login');
			$this->load->view('auth/script');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{

		$user = [
			$email		=	$this->input->post('email'),
			$password	=	$this->input->post('password')

		];


		$user = $this->m->Get_Where(['email' => $email], 'user');

		if ($user) {

			if ($user->is_active == 1) {

				if (password_verify($password, $user->password)) {

					$data = [
						'id_user' => $user->id_user,
						'email' => $user->email,
						'role_id' => $user->role_id,
						'nama' => $user->nama
					];


					$this->session->set_userdata($data);
					if ($user->role_id == 1) {
						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil login <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
						redirect('administrator');
					} else {

						$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil login <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
						redirect('dashboard');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum aktif<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div> ');
			redirect('login');
		}
	}
	
	public function logout()
	{

		session_start();
		session_destroy();
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil logout<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button> </div> ');
		redirect('');
	}
	public function blocked()
	{
		$data['title'] = 'Akses Ditolak';
		$this->load->view('auth/header', $data);
		$this->load->view('auth/blocked');
		$this->load->view('auth/script');
	}
}
