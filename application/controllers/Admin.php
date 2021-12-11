<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Models','m');
        cekuser();
    }
	public function index()
	{
		$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

		$data['user'] = $this->m->Get_Where($where, $table);
		$data['title'] = 'Perpustakaan | Dashboard';

		$select = $this->db->select('*,count(tbl_buku.id_buku) as jumlahbuku');
		$data['read']=$this->m->Get_All('buku',$select);

		$select = $this->db->select('*,count(tbl_anggota.id_anggota) as jumlahanggota');
		$data['read2']=$this->m->Get_All('anggota',$select);

		$select = $this->db->select('*,count(tbl_petugas.id_petugas) as jumlahpetugas');
		$data['read3']=$this->m->Get_All('petugas',$select);

		$select = $this->db->select('*,count(tbl_peminjaman.id_peminjaman) as jumlahpeminjaman');
		$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
		$select = $this->db->where('tbl_peminjaman_detail.returned', 0);
		$data['read4']=$this->m->Get_All('peminjaman',$select);
		// echo "Selamat Datang" . $data->nama;

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('templates_admin/dashboard',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}
}
