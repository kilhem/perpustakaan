<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
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


		$data['title'] = 'Perpustakaan | Peminjaman';
		$select = $this->db->select('*, anggota.nama_lengkap, buku.judul');
		$select = $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota ');
		$select = $this->db->join('user', 'user.id_user = peminjaman.id_user ');
		$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
		$select = $this->db->join('buku', 'buku.id_buku = peminjaman_detail.id_buku');
		$select = $this->db->order_by('peminjaman.tgl_pinjam');
		$data['read'] = $this->m->Get_All('peminjaman', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/peminjaman/listpeminjaman', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}

	function addlistbuku()
	{
		if ( $this->input->post('persediaanawal') == 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Stok buku kosong <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('tambahpeminjaman');
		}
		else{
			$data = array(

			'id_peminjaman' =>	"2",
			'id_buku'  		=>	$this->input->post('idbuku'),

		);

		$this->m->Save($data, 'peminjaman_detail');

		$table = 'buku';
			$where = array(
				'id_buku'		=>	$this->input->post('idbuku')
			);
			$data = array(
				'buku_keluar'          => $this->input->post('bukukeluar')+1
			);
			$this->m->Update($where, $data, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahpeminjaman');
		}
		
	}
	function deletelistbuku()
	{
		
		$table = 'peminjaman_detail';
		$where = array(
			'id'		=>	$this->input->post('id')		
		);
		$this->m->Delete($where, $table);

		$table = 'buku';
			$where = array(
				'id_buku'		=>	$this->input->post('idbuku')
			);
			$data = array(
				'buku_keluar'          => $this->input->post('jumlahbuku')-1
			);
			$this->m->Update($where, $data, $table);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('tambahpeminjaman');
	}

	function Createpeminjaman()
	{


		$this->form_validation->set_rules(
			'idanggota',
			'ID Anggota',
			'required|trim',
			[
				'required' => 'Field id anggota tidak boleh kosong'
			]
		);

		if ($this->form_validation->run() == false) {
			$role_id = $this->session->userdata('role_id');

			$table = 'user';
			$where = array(
				'id_user'		=>	$this->session->userdata('id_user')
			);


			$data['id_peminjaman'] = $this->m->kodepeminjaman();


			$idpeminjaman 	 			= $this->input->post('idpeminjaman');

			$select = $this->db->select('*, buku.judul, buku.penerbit, buku.tahun_terbit');
			$select = $this->db->join('buku', 'buku.id_buku = peminjaman_detail.id_buku ');
			$select          = $this->db->where('tbl_peminjaman_detail.id_peminjaman', 2);
			$data['read'] = $this->m->Get_All('peminjaman_detail', $select);

			$select          = $this->db->select('*');
			$data['anggota'] = $this->m->Get_All('anggota', $select);

			$select = $this->db->select('*, nama_kategori');
			$select = $this->db->join('tbl_kategoribuku', 'kategoribuku.id_kategori = buku.id_kategori ');
			$data['buku'] = $this->m->Get_All('buku', $select);

			$data['user'] = $this->m->Get_Where($where, $table);

			$data['title'] = 'Perpustakaan | Peminjaman';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('templates_admin/sidebar', $data);
			$this->load->view('templates_admin/navigation', $data);
			$this->load->view('admin/peminjaman/createpeminjaman', $data);
			$this->load->view('templates_admin/script');
			$this->load->view('templates_admin/footer', $data);
		} else {
			$data = array(
				'id_peminjaman'     =>	$this->input->post('idpeminjaman'),
				'id_anggota'        =>	$this->input->post('idanggota'),
				'tgl_pinjam'        =>	date("Y-m-d"),
				'tgl_batas_kembali' =>	date("Y-m-d", time() + (7 * 24 * 60 * 60)),
				'id_user'           =>	$this->input->post('iduser'),

			);

			$this->m->Save($data, 'peminjaman');


			$table = 'peminjaman_detail';
			$where = array(
				'id_peminjaman'		=>	"2"
			);

			$data = array(
				'id_peminjaman'			=>	$this->input->post('idpeminjaman')
			);
			$this->m->Update($where, $data, $table);

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Peminjaman berhasil ditambah <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
			redirect('peminjaman');
		}
	}
	

	function pengembalian($id_buku, $id_peminjaman, $buku_keluar)
	{
		$table = 'peminjaman_detail';
		$where = [
			'id_peminjaman' => $id_peminjaman,
			'id_buku' => $id_buku
		];

		$this->m->Update($where, ['returned' => 1], $table);

		$table1 = 'buku';
			$where = array(
				'id_buku' => $id_buku	
			);

			$data = array(
				'buku_keluar'			=>	$buku_keluar-1
			);
			$this->m->Update($where, $data, $table1);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Buku telah dikembalikan <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
		redirect('peminjaman');
	}
	function detailpeminjaman($id_peminjaman)
	{


		$data = [
			'title' => 'Perpustakaan | Detail Peminjaman'
		];
		$role_id = $this->session->userdata('role_id');

		$table = 'user';
		$where = array(
			'id_user'		=>	$this->session->userdata('id_user')
		);

		$data['user'] = $this->m->Get_Where($where, $table);

		$select = $this->db->select('*, anggota.id_anggota, anggota.nama_lengkap, anggota.kelas, anggota.jenis_kelamin, user.nama, peminjaman_detail.returned');
		$select = $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota ');
		$select = $this->db->join('user', 'user.id_user = peminjaman.id_user ');
		$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
		$select          = $this->db->where('tbl_peminjaman.id_peminjaman', $id_peminjaman);
		$data['head'] = $this->m->Get_All('peminjaman', $select);

		$select = $this->db->select('*, buku.judul, buku.penerbit, buku.tahun_terbit');
		$select = $this->db->join('buku', 'buku.id_buku = peminjaman_detail.id_buku ');
		$select          = $this->db->where('tbl_peminjaman_detail.id_peminjaman', $id_peminjaman);
		$data['detail'] = $this->m->Get_All('peminjaman_detail', $select);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/peminjaman/detailpeminjaman', $data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer', $data);
	}
}
