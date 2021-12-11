<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Models', 'm');
		cekuser();
	}
	public function index()
	{
		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);



		$data['title'] = 'Perpustakaan | Petugas';
		$select = $this->db->select('*');
		$data['read'] = $this->m->Get_All('petugas', $select);


		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/petugas/listpetugas', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}

	function Createpetugas()
	{
		$this->form_validation->set_rules(
			'nip',
			'NIP',
			'required|trim',
			[
				'required' => 'Field NIS tidak boleh kosong',
			]
		);

		$this->form_validation->set_rules(
			'nama',
			'NamaLengkap',
			'required|trim',
			[
				'required' => 'Field nama lengkap tidak boleh kosong'
			]
		);

		$this->form_validation->set_rules(
			'jeniskelamin',
			'JenisKelamin',
			'required|trim',
			[
				'required' => 'Field jenis kelamin tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'telepon',
			'Telepon',
			'required|trim|numeric',
			[
				'required' => 'Field telepon tidak boleh kosong',
				'numeric'  => 'Harus diisi dengan angka',
			]
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[user.email]',

			[
				'required'    => 'Field email tidak boleh kosong',
				'valid_email' => 'Format email harus sesuai',
				'is_unique'   => 'Email sudah terdaftar'
			]
		);
	
		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required|trim',
			[
				'required' => 'Field alamat tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$data['id_petugas'] = $this->m->kodepetugas();

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'Perpustakaan | Tambah Data Anggota';


			$data['kodeuser'] = $this->m->kodeuser();

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('admin/petugas/createpetugas', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} else {

			$data = array(
				'id_user'       =>	$this->input->post('iduser'),
				'nama_petugas'  =>	$this->input->post('nama'),
				'id_petugas'    =>	$this->input->post('nip'),
				'jenis_kelamin' =>	$this->input->post('jeniskelamin'),
				'telepon'       =>	$this->input->post('telepon'),
				'alamat'        =>	$this->input->post('alamat'),

			);

			$this->m->Save($data, 'petugas');

			$data = array(

				'id_user'      	    =>	$this->input->post('iduser'),
				'nama'				=>	htmlspecialchars($this->input->post('nama', true)),
				'email'				=>	htmlspecialchars($this->input->post('email', true)),
				'image'				=>	'default.png',
				'password'			=>	password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id'			=>	'1',
				'is_active'			=>	'1',
				'tanggal_daftar'	=>	date('y-m-d'),

			);

			$this->m->Save($data, 'user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Petugas berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('petugas');
		}
	}
	function editpetugas($id_petugas)
	{

		$data = [
			'title' => 'Perpustakaan | Edit Data Petugas'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_petugas', $id_petugas);
		$data['petugas'] = $this->m->Get_All('petugas', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/petugas/editpetugas', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Update()
	{
		$table = 'petugas';
		$where = array(
			'id_petugas'		=>	$this->input->post('nip')
		);
		$data = array(
				'nama_petugas'  =>	$this->input->post('nama'),
				'jenis_kelamin' =>	$this->input->post('jeniskelamin'),
				'telepon'       =>	$this->input->post('telepon'),
				'alamat'        =>	$this->input->post('alamat'),
			);

		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Petugas berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('petugas');
	}
	function delete()
	{
		$table = 'petugas';
		$where = array(
			'id_petugas'		=>	$this->input->post('idpetugas')
		);
		$this->m->Delete($where, $table);

		$table1 = 'user';
		$where = array(
			'id_user'		=>	$this->input->post('iduser')
		);
		$this->m->Delete($where, $table1);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Petugas berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('petugas');
	}

	
}
