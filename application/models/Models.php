<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models extends CI_Model
{
	public function Get_All($table, $select)
	{
		$select;
		$query = $this->db->get($table);
		return $query->result();
	}
	public function Get_Where($where, $table)
	{
		$query = $this->db->get_where($table, $where);
		return $query->row();
	}
	function Save($data, $table)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}
	function Update($where, $data, $table)
	{
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}
	function Update_All($data, $table)
	{
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}
	function Delete($where, $table)
	{
		$result = $this->db->delete($table, $where);
		return $result;
	}
	function Delete_All($table)
	{
		$result = $this->db->delete($table);
		return $result;
	}
	public function Masuk($username, $userpass)
	{
		$this->db->select('*');
		$this->db->from('user');

		$this->db->where('id', $username);
		$this->db->where('password', $userpass);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function get_by_id($id, $table)
	{
		$this->db->from($table);
		$this->db->where('id_absensi', $id);
		$query = $this->db->get();

		return $query->row();
	}
	public function kodepetugas()
	{

		$this->db->select('RIGHT(tbl_petugas.id_petugas,5)as id_petugas', FALSE);
		$this->db->order_by('id_petugas', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_petugas');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_petugas) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function kodeuser()
	{

		$this->db->select('RIGHT(tbl_user.id_user,5)as id_user', FALSE);
		$this->db->order_by('id_user', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_user');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_user) + 1;
			}
			else{
				$kode = 1;
			}
		return $kode;
	}
	public function kodeanggota()
	{

		$this->db->select('RIGHT(tbl_anggota.id_anggota,5)as id_anggota', FALSE);
		$this->db->order_by('id_anggota', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_anggota');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_anggota) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function kodebuku()
	{

		$this->db->select('RIGHT(tbl_buku.id_buku,5)as id_buku', FALSE);
		$this->db->order_by('id_buku', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_buku');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_buku) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}

	public function kodepeminjaman()
	{

		$this->db->select('RIGHT(tbl_peminjaman.id_peminjaman,5)as id_peminjaman', FALSE);
		$this->db->order_by('id_peminjaman', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_peminjaman');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_peminjaman) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function kodepengadaan()
	{

		$this->db->select('RIGHT(tbl_pengadaan.id_pengadaan,5)as id_pengadaan', FALSE);
		$this->db->order_by('id_pengadaan', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_pengadaan');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_pengadaan) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function kodekerusakan()
	{

		$this->db->select('RIGHT(tbl_kerusakan.id_transaksi,5)as id_transaksi', FALSE);
		$this->db->order_by('id_transaksi', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_kerusakan');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_transaksi) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}
	public function kodekehilangan()
	{

		$this->db->select('RIGHT(tbl_kehilangan.id_transaksi,5)as id_transaksi', FALSE);
		$this->db->order_by('id_transaksi', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_kehilangan');
			if ($query->num_rows() <> 0) {
				$data = $query->row();
				$kode = intval($data->id_transaksi) + 1;
			}
			else{
				$kode = 1;
			}
		$batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kodetampil = $batas;
		return $kodetampil;
	}


	public function get_by_tanggal($dari, $sampai, $table1)
	{
		$this->db->from($table1);
		$this->db->where('tanggal_pengajuan BETWEEN "' . date('Y-m-d', strtotime($dari)) . '" and "' . date('Y-m-d', strtotime($sampai)) . '"');
		$query = $this->db->get();
		return $query->result();
	}
}
