<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	
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
		$data['title'] = 'Perpustakaan | Laporan';
		// echo "Selamat Datang" . $data->nama;

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar',$data);
		$this->load->view('templates_admin/navigation', $data);
		$this->load->view('admin/laporan/laporan',$data);
		$this->load->view('templates_admin/script');
		$this->load->view('templates_admin/footer',$data);
	}
	function laporanbuku()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
	            'title' => 'Laporan Keseluruhan Data Buku',
	        ];


			$select = $this->db->select('*, nama_kategori');
			$select = $this->db->join('tbl_kategoribuku', 'kategoribuku.id_kategori = buku.id_kategori ');
			$data['buku'] = $this->m->Get_All('buku', $select);


			$this->load->view('admin/laporan/keseluruhan/buku', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporankeseluruhandatabuku", array('Attachment' =>0));
	}
	function laporananggota()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
	            'title' => 'Laporan Keseluruhan Data Anggota',
	        ];


			$select       = $this->db->select('*');
			$data['anggota'] = $this->m->Get_All('anggota', $select);


			$this->load->view('admin/laporan/keseluruhan/anggota', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporankeseluruhandataanggota", array('Attachment' =>0));
	}
	function laporanpetugas()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
	            'title' => 'Laporan Keseluruhan Data Petugas',
	        ];


			$select = $this->db->select('*');
			$data['petugas'] = $this->m->Get_All('petugas', $select);


			$this->load->view('admin/laporan/keseluruhan/petugas', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporankeseluruhandatapetugas", array('Attachment' =>0));
	}
	function laporanpeminjaman()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
	            'title' => 'Laporan Keseluruhan Data Peminjaman',
	        ];


			$select = $this->db->select('*, anggota.nama_lengkap');
			$select = $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota ');
			$select = $this->db->join('user', 'user.id_user = peminjaman.id_user ');
			$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
			$select = $this->db->where('tbl_peminjaman_detail.returned', 0);
			$select = $this->db->order_by('peminjaman.tgl_pinjam');
			$data['peminjaman'] = $this->m->Get_All('peminjaman', $select);


			$this->load->view('admin/laporan/keseluruhan/peminjaman', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporankeseluruhandatapeminjaman", array('Attachment' =>0));
	}
	function laporanpengembalian()
	{
		$this->load->library('dompdf_gen');
			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);
	        $data = [
	            'title' => 'Laporan Keseluruhan Data Pengembalian',
	        ];


			$select = $this->db->select('*, anggota.nama_lengkap');
			$select = $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota ');
			$select = $this->db->join('user', 'user.id_user = peminjaman.id_user ');
			$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
			$select = $this->db->where('tbl_peminjaman_detail.returned', 1);
			$select = $this->db->order_by('peminjaman.tgl_pinjam');
			$data['pengembalian'] = $this->m->Get_All('peminjaman', $select);


			$this->load->view('admin/laporan/keseluruhan/pengembalian', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporankeseluruhandatapengembalian", array('Attachment' =>0));
	}
	function laporanpeminjamanperperiode()
	{
		$dari 	= $this->input->post('dari');
	    	$sampai = $this->input->post('sampai');
	    	
	    	$this->load->library('dompdf_gen');

			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

	        $data = [
	            'title' 	=> 'Laporan Data Peminjaman Per Periode',
	            'subtitle'  => 'Dari Tanggal : '.format_indo(date('Y-m-d', strtotime($dari))). ' Sampai Tanggal : '.format_indo(date('Y-m-d', strtotime($sampai))),
	            'user' 	 	=> $this->m->Get_Where($where, $table),
	        ];

	        $select = $this->db->select('*, anggota.nama_lengkap');
			$select = $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota ');
			$select = $this->db->join('user', 'user.id_user = peminjaman.id_user ');
			$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
			$select = $this->db->where('tbl_peminjaman_detail.returned', 0);
			$select = $this->db->where('tgl_pinjam BETWEEN "' . date('Y-m-d', strtotime($dari)) . '" and "' . date('Y-m-d', strtotime($sampai)) . '"');
			$select = $this->db->order_by('peminjaman.tgl_pinjam');
			$data['peminjaman'] = $this->m->Get_All('peminjaman', $select);

	        $this->load->view('admin/laporan/periode/peminjaman', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporanperperiodedatapeminjaman", array('Attachment' =>0));
	}
	function laporanpengembalianperperiode()
	{
		$dari 	= $this->input->post('dari');
	    	$sampai = $this->input->post('sampai');
	    	
	    	$this->load->library('dompdf_gen');

			$table = 'user';
			$where=array(
				'id_user'		=>	$this->session->userdata('id_user')
			);

	        $data = [
	            'title' 	=> 'Laporan Data Pengembalian Per Periode',
	            'subtitle'  => 'Dari Tanggal : '.format_indo(date('Y-m-d', strtotime($dari))). ' Sampai Tanggal : '.format_indo(date('Y-m-d', strtotime($sampai))),
	            'user' 	 	=> $this->m->Get_Where($where, $table),
	        ];

	        $select = $this->db->select('*, anggota.nama_lengkap');
			$select = $this->db->join('anggota', 'anggota.id_anggota = peminjaman.id_anggota ');
			$select = $this->db->join('user', 'user.id_user = peminjaman.id_user ');
			$select = $this->db->join('peminjaman_detail', 'peminjaman_detail.id_peminjaman = peminjaman.id_peminjaman ');
			$select = $this->db->where('tbl_peminjaman_detail.returned', 1);
			$select = $this->db->where('tgl_pinjam BETWEEN "' . date('Y-m-d', strtotime($dari)) . '" and "' . date('Y-m-d', strtotime($sampai)) . '"');
			$select = $this->db->order_by('peminjaman.tgl_pinjam');
			$data['pengembalian'] = $this->m->Get_All('peminjaman', $select);

	        $this->load->view('admin/laporan/periode/pengembalian', $data);

			$paper_size = 'A4';
			$orintation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orintation);
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporanperperiodedatapengembalian", array('Attachment' =>0));
	}
}
