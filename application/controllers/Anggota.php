<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
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



		$data['title'] = 'Perpustakaan | Anggota';
		$select = $this->db->select('*');
		$data['read'] = $this->m->Get_All('anggota', $select);


		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/anggota/listanggota', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}

	function Createanggota()
	{
		$this->form_validation->set_rules(
			'nis',
			'NIS',
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
			'kelas',
			'Kelas',
			'required|trim',
			[
				'required' => 'Field kelas tidak boleh kosong'
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

			$data['id_anggota'] = $this->m->kodeanggota();

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'Perpustakaan | Tambah Data Anggota';


			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('admin/anggota/createanggota', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} else {

			$data = array(
				'id_anggota'    =>	$this->input->post('nis'),
				'nama_lengkap'  =>	$this->input->post('nama'),
				'jenis_kelamin' =>	$this->input->post('jeniskelamin'),
				'kelas'         =>	$this->input->post('kelas'),
				'alamat'        =>	$this->input->post('alamat'),

			);

			$this->m->Save($data, 'anggota');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anggota berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('anggota');
		}
	}
	function editanggota($id_anggota)
	{


		$data = [
			'title' => 'Perpustakaan | Edit Data Anggota'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*');
		$select = $this->db->where('id_anggota', $id_anggota);
		$data['anggota'] = $this->m->Get_All('anggota', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/anggota/editanggota', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Update()
	{
		$table = 'anggota';
		$where = array(
			'id_anggota'		=>	$this->input->post('nis')
		);
		$data = array(
				'nama_lengkap'  =>	$this->input->post('nama'),
				'jenis_kelamin' =>	$this->input->post('jeniskelamin'),
				'kelas'         =>	$this->input->post('kelas'),
				'alamat'        =>	$this->input->post('alamat'),

			);

		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anggota berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('anggota');
	}
	function delete()
	{
		$table = 'anggota';
		$where = array(
			'id_anggota'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anggota berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('anggota');
	}

	
}
