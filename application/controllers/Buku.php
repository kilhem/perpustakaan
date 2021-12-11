<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
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



		$data['title'] = 'Perpustakaan | Buku';
		$select = $this->db->select('*, nama_kategori');
		$select = $this->db->join('tbl_kategoribuku', 'kategoribuku.id_kategori = buku.id_kategori ');
		$data['read'] = $this->m->Get_All('buku', $select);


		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/buku/listbuku', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}

	function Createbuku()
	{
		$this->form_validation->set_rules(
			'isbn',
			'ISBN',
			'required|trim',
			[
				'required' => 'Field ISBN tidak boleh kosong',
			]
		);

		$this->form_validation->set_rules(
			'judul',
			'judul',
			'required|trim',
			[
				'required' => 'Field judul buku tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'penerbit',
			'penerbit',
			'required|trim',
			[
				'required' => 'Field penerbit tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'tahunterbit',
			'Tahun Terbit',
			'required|numeric|trim',
			[
				'required' => 'Field penerbit tidak boleh kosong',
				'numeric'  => 'Harus diisi dengan angka',
			]
		);
		$this->form_validation->set_rules(
			'stok',
			'Stok',
			'required|trim',
			[
				'required' => 'Field stok buku tidak boleh kosong'
			]
		);
		$this->form_validation->set_rules(
			'kategoribuku',
			'KategoriBuku',
			'required|trim',
			[
				'required' => 'Field kategori buku tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

			$select = $this->db->select('*');
			$data['kategori'] = $this->m->Get_All('kategoribuku', $select);

			$data['user'] = $this->m->Get_Where($where, $table);
			$data['title'] = 'Perpustakaan | Tambah Data Buku';


			$data['id_buku'] = $this->m->kodebuku();

			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('admin/buku/createbuku', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} else {

			$data = array(
				'id_buku'         =>	$this->input->post('isbn'),
				'judul'           =>	$this->input->post('judul'),
				'penerbit'        =>	$this->input->post('penerbit'),
				'tahun_terbit'    =>	$this->input->post('tahunterbit'),
				'id_kategori'     =>	$this->input->post('kategoribuku'),
				'persediaan_awal' =>	$this->input->post('stok'),
				'buku_keluar'     =>	0,
				

			);

			$this->m->Save($data, 'buku');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('buku');
		}
	}
	function editbuku($id_buku)
	{

		$data = [
			'title' => 'Perpustakaan | Edit Data Buku'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'email'		=>	$this->session->userdata('email')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*, kategoribuku.nama_kategori, kategoribuku.id_kategori');
		$select = $this->db->join('tbl_kategoribuku', 'kategoribuku.id_kategori = buku.id_kategori ');
		$select = $this->db->where('id_buku', $id_buku);
		$data['buku'] = $this->m->Get_All('buku', $select);


		$select = $this->db->select('*');
		$data['kategori'] = $this->m->Get_All('kategoribuku', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/buku/editbuku', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
	function Update()
	{
		$table = 'buku';
		$where = array(
			'id_buku'		=>	$this->input->post('isbn')
		);
		$data = array(
				'judul'         =>	$this->input->post('judul'),
				'penerbit'      =>	$this->input->post('penerbit'),
				'tahun_terbit'  =>	$this->input->post('tahunterbit'),
				'id_kategori'   =>	$this->input->post('kategoribuku'),
			);

		$this->m->Update($where, $data, $table);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('buku');
	}
	function delete()
	{
		$table = 'buku';
		$where = array(
			'id_buku'		=>	$this->input->post('id')
		);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('buku');
	}

	
}
