<?php

class Laporan extends CI_Model
{

	public function get_legalitasusaha()
	{
		$this->db->select('*');
		$this->db->from('db_legalitasusaha');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_strukturorganisasi()
	{
		$this->db->select('*');
		$this->db->from('db_strukturorganisasi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_namaumkm () 
	{
		$this->db->select('*');
		$this->db->from('registrasi');
		$query = $this->db->get();
		return $query->result();
	}

	public function profile () 
	{
		$this->db->select('*');
		$this->db->from('registrasi');
		$this->db->join('db_sektorekonomi', 'db_sektorekonomi.id = registrasi.ID', 'left');
		$this->db->where ('username',  $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function get_jenis () 
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_lembaga () 
	{
		$this->db->select('*');
		$this->db->from('data_kelembagaan');
		$this->db->where('ID_umkm', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_kproduksi()
	{
		$this->db->select('*');
		$this->db->from('k_produksi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_bahanbaku()
	{
		$this->db->select('*');
		$this->db->from('bahan_baku');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_pramahlingkungan()
	{
		$this->db->select('*');
		$this->db->from('ramah_l');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_izin()
	{
		$this->db->select('*');
		$this->db->from('izin');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_kurasiproduk()
	{
		$this->db->select('*');
		$this->db->from('kurasi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_omzet()
	{
		$this->db->select('*');
		$this->db->from('omzet');
		$query = $this->db->get();
		return $query->result();
	}	

	public function get_jpasar()
	{
		$this->db->select('*');
		$this->db->from('pasar');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_penjualan()
	{
		$this->db->select('*');
		$this->db->from('penjualan');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_Lkeuangan()
	{
		$this->db->select('*');
		$this->db->from('l_keuangan');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_rekening()
	{
		$this->db->select('*');
		$this->db->from('rekening');
		$query = $this->db->get();
		return $query->result();
	}	

	public function get_digitalpayment()
	{
		$this->db->select('*');
		$this->db->from('transaksi_sub_sub_sub');
		$this->db->where('id_transaksi_sub_sub',2);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_uangelektronik()
	{
		$this->db->select('*');
		$this->db->from('transaksi_sub_sub_sub_sub');
		$this->db->where('id_transaksi_sub_sub_sub',6);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_fintechK() 
	{
		$this->db->select('*');
		$this->db->from('pnontradisional_sub');
		$this->db->where('id_pnontradisional',2);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_fintechL() 
	{
		$this->db->select('*');
		$this->db->from('pnontradisional_sub');
		$this->db->where('id_pnontradisional',3);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_nama()
	{
		$this->db->select('*');
		$this->db->from('registrasi');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function get_namaadmin ()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function admin_lihatlembaga ($ID) {
		$this->db->select('*');
		$this->db->join('registrasi','data_kelembagaan.id_umkm = registrasi.ID');
		$this->db->from('data_kelembagaan');
		$this->db->where('data_kelembagaan.id_umkm ',$ID);
		$query = $this->db->get();
		return $query->result();
	}
	public function admin_lihatkeuangan ($ID) {
		$this->db->select('*');
		$this->db->join('registrasi','data_keuangan.lembaga_id= registrasi.ID');
		$this->db->from('data_keuangan');
		$this->db->where('data_keuangan.lembaga_id ',$ID);
		$query = $this->db->get();
		return $query->result();
	}

	public function admin_lihatproduksi ($ID) {
		$this->db->select('*');
		$this->db->join('registrasi','data_produksi.id_umkm = registrasi.ID');
		$this->db->from('data_produksi');
		$this->db->where('data_produksi.id_umkm ',$ID);
		$query = $this->db->get();
		return $query->result();
	}

	public function admin_lihatpemasaran ($ID) {
		$this->db->select('*');
		$this->db->join('registrasi','data_pemasaran.id_umkm = registrasi.ID');
		$this->db->from('data_pemasaran');
		$this->db->where('data_pemasaran.id_umkm ',$ID);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_datalembaga () {
		$this->db->select('data_kelembagaan.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_kelembagaan.id_umkm = registrasi.ID');
		$this->db->from('data_kelembagaan');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function get_lembagafull () {
		$this->db->select('data_kelembagaan.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_kelembagaan.id_umkm = registrasi.ID');
		$this->db->from('data_kelembagaan');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_dataproduksi () {
		$this->db->select('data_produksi.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_produksi.id_umkm = registrasi.ID');
		$this->db->from('data_produksi');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function get_produksifull () {
		$this->db->select('data_produksi.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_produksi.id_umkm = registrasi.ID');
		$this->db->from('data_produksi');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_datapemasaran () {
		$this->db->select('data_pemasaran.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_pemasaran.id_umkm = registrasi.ID');
		$this->db->from('data_pemasaran');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function get_pemasaranfull () {
		$this->db->select('data_pemasaran.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_pemasaran.id_umkm = registrasi.ID');
		$this->db->from('data_pemasaran');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_datakeuangan () {
		$this->db->select('data_keuangan.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_keuangan.lembaga_id = registrasi.ID');
		$this->db->from('data_keuangan');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}

	public function get_keuanganfull () {
		$this->db->select('data_keuangan.*, registrasi.ID as ID_umkm, registrasi.nama_umkm');
		$this->db->join('registrasi','data_keuangan.lembaga_id = registrasi.ID');
		$this->db->from('data_keuangan');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_pnontradisional () {
		$this->db->select('*');
		$this->db->from('pnontradisional');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_ptradisional () {
		$this->db->select('*');
		$this->db->from('ptradisional');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_datalembaga ($id) {
		$this->db->select('*, db_legalitasusaha.id as id_legalitasusaha, db_strukturorganisasi.id as id_strukturorganisasi, data_kelembagaan.id as id_datalembaga');
		$this->db->from('data_kelembagaan');
		$this->db->join('registrasi', 'registrasi.ID = data_kelembagaan.id_umkm', 'left');
		$this->db->join('db_legalitasusaha','db_legalitasusaha.id = data_kelembagaan.id_legalitas_usaha', 'left');
		$this->db->join('db_strukturorganisasi', 'db_strukturorganisasi.id = data_kelembagaan.id_struktur_organisasi', 'left');
		$this->db->where('data_kelembagaan.id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_produksi ($id) {
		$this->db->select('*,k_produksi.nama as produksi_nama, bahan_baku.nama as bahan_baku, ramah_l.nama as proses, izin.nama as izin, kurasi.nama as kurasi, k_produksi.id as id_kproduksi, bahan_baku.id as id_pemasok, ramah_l.id as id_proses, izin.id as id_izin, kurasi.id as id_kurasi, data_produksi.id as id_dataproduksi');
		$this->db->from('data_produksi');
		$this->db->join('registrasi', 'registrasi.ID = data_produksi.id_umkm', 'left');
		$this->db->join('k_produksi','k_produksi.id = data_produksi.id_kproduksi', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id = data_produksi.id_pemasok', 'left');
		$this->db->join('ramah_l', 'ramah_l.id = data_produksi.id_proses', 'left');
		$this->db->join('izin', 'izin.id = data_produksi.id_izin', 'left');
		$this->db->join('kurasi', 'kurasi.id = data_produksi.id_kurasi', 'left');
		$this->db->where('data_produksi.id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_keuangan($id) {
		$this->db->select('*, l_keuangan.nama as l_keuangan, rekening.nama as rekening, transaksi.name as transaksi, transaksi_sub.name as transaksi_sub, transaksi_sub_sub.name as transaksi_sub_sub, transaksi_sub_sub_sub.name as transaksi_sub_sub_sub, transaksi_sub_sub_sub_sub.name as transaksi_sub_sub_sub_sub, pnontradisional.name as pnontradisional, pnontradisional_sub.name as pnontradisional_sub, ptradisional.nama as ptradisional, ptradisional_sub.nama as ptradisional_sub, data_keuangan.id_transaksi_sub_sub_sub as id_transaksi_sub_sub_sub, data_keuangan.id_transaksi_sub_sub_sub_sub as id_transaksi_sub_sub_sub_sub, data_keuangan.ptradisional_nama as ptradisional_nama, data_keuangan.pnontradisional_nominal as pnontradisional_nominal, data_keuangan.id as id_datakeuangan, l_keuangan.id as id_lkeuangan, rekening.id as id_rekening');
		$this->db->from('data_keuangan');
		$this->db->join('registrasi', 'registrasi.ID = data_keuangan.lembaga_id', 'left');
		$this->db->join('l_keuangan','l_keuangan.id = data_keuangan.laporan_id', 'left');
		$this->db->join('rekening', 'rekening.id = data_keuangan.rekening_id', 'left');
		$this->db->join('transaksi', 'transaksi.id = data_keuangan.id_transaksi', 'left');
		$this->db->join('transaksi_sub', 'transaksi_sub.id = data_keuangan.id_transaksi_sub', 'left');
		$this->db->join('transaksi_sub_sub', 'transaksi_sub_sub.id = data_keuangan.id_transaksi_sub_sub', 'left');
		$this->db->join('transaksi_sub_sub_sub', 'transaksi_sub_sub_sub.id = data_keuangan.id_transaksi_sub_sub_sub', 'left');	
		$this->db->join('transaksi_sub_sub_sub_sub', 'transaksi_sub_sub_sub_sub.id = data_keuangan.id_transaksi_sub_sub_sub_sub', 'left');
		$this->db->join('pnontradisional', 'pnontradisional.id = data_keuangan.id_pnontradisional', 'left');	
		$this->db->join('pnontradisional_sub', 'pnontradisional_sub.id = data_keuangan.id_pnontradisional_sub', 'left');
		$this->db->join('ptradisional', 'ptradisional.id = data_keuangan.id_ptradisional', 'left');
		$this->db->join('ptradisional_sub', 'ptradisional_sub.id = data_keuangan.id_ptradisional_sub', 'left');
		$this->db->where('data_keuangan.id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_pemasaran ($id) {
		$this->db->select('*,omzet.nama as omzet, pasar.nama as pasar, penjualan.nama as penjualan, data_pemasaran.id as id_datapemasaran, omzet.id as id_omzet, pasar.id as id_pasar, penjualan.id as id_penjualan');
		$this->db->from('data_pemasaran');
		$this->db->join('registrasi', 'registrasi.ID = data_pemasaran.id_umkm', 'left');
		$this->db->join('omzet','omzet.id = data_pemasaran.id_omzet', 'left');
		$this->db->join('pasar', 'pasar.id = data_pemasaran.id_pasar', 'left');
		$this->db->join('penjualan', 'penjualan.id = data_pemasaran.id_penjualan', 'left');
		$this->db->where('data_pemasaran.id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function data_kelembagaan_print () {

		$this->db->select('*, db_legalitasusaha.id as id_legalitasusaha, db_strukturorganisasi.id as id_strukturorganisasi, data_kelembagaan.id as id_datalembaga');
		$this->db->from('data_kelembagaan');
		$this->db->join('registrasi', 'registrasi.ID = data_kelembagaan.id_umkm', 'left');
		$this->db->join('db_legalitasusaha','db_legalitasusaha.id = data_kelembagaan.id_legalitas_usaha', 'left');
		$this->db->join('db_strukturorganisasi', 'db_strukturorganisasi.id = data_kelembagaan.id_struktur_organisasi', 'left');
		$this->db->where('SUBSTR(data_kelembagaan.tanggal,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_kelembagaan.tanggal,1,4)', $this->input->post('tahun'));
		$this->db->where('data_kelembagaan.id_umkm', $this->input->post('id_umkm'));
		$query = $this->db->get();
		return $query->result();
	}

	public function data_kelembagaan_print_triwulan () {
		$bulan = $_POST['bulan'];

		$this->db->select('*, db_legalitasusaha.id as id_legalitasusaha, db_strukturorganisasi.id as id_strukturorganisasi, data_kelembagaan.id as id_datalembaga');
		$this->db->from('data_kelembagaan');
		$this->db->join('registrasi', 'registrasi.ID = data_kelembagaan.id_umkm', 'left');
		$this->db->join('db_legalitasusaha','db_legalitasusaha.id = data_kelembagaan.id_legalitas_usaha', 'left');
		$this->db->join('db_strukturorganisasi', 'db_strukturorganisasi.id = data_kelembagaan.id_struktur_organisasi', 'left');
		$this->db->where('SUBSTR(data_kelembagaan.tanggal,6,2)', $bulan);
		$this->db->where('SUBSTR(data_kelembagaan.tanggal,1,4)', $this->input->post('tahun'));
		$this->db->where('data_kelembagaan.id_umkm', $this->input->post('id_umkm'));
		$query = $this->db->get();
		return $query->result();
	}

	public function data_kelembagaan_print_full () {

		$this->db->select('*, db_legalitasusaha.id as id_legalitasusaha, db_strukturorganisasi.id as id_strukturorganisasi, data_kelembagaan.id as id_datalembaga');
		$this->db->from('data_kelembagaan');
		$this->db->join('registrasi', 'registrasi.ID = data_kelembagaan.id_umkm', 'left');
		$this->db->join('db_legalitasusaha','db_legalitasusaha.id = data_kelembagaan.id_legalitas_usaha', 'left');
		$this->db->join('db_strukturorganisasi', 'db_strukturorganisasi.id = data_kelembagaan.id_struktur_organisasi', 'left');
		$this->db->where('SUBSTR(data_kelembagaan.tanggal,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_kelembagaan.tanggal,1,4)', $this->input->post('tahun'));
		$query = $this->db->get();
		return $query->result_array();
	}

	public function data_produksi_print () {
		$this->db->select('*,k_produksi.nama as produksi_nama, bahan_baku.nama as bahan_baku, ramah_l.nama as proses, izin.nama as izin, kurasi.nama as kurasi, k_produksi.id as id_kproduksi, bahan_baku.id as id_pemasok, ramah_l.id as id_proses, izin.id as id_izin, kurasi.id as id_kurasi, data_produksi.id as id_dataproduksi');
		$this->db->from('data_produksi');
		$this->db->join('registrasi', 'registrasi.ID = data_produksi.id_umkm', 'left');
		$this->db->join('k_produksi','k_produksi.id = data_produksi.id_kproduksi', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id = data_produksi.id_pemasok', 'left');
		$this->db->join('ramah_l', 'ramah_l.id = data_produksi.id_proses', 'left');
		$this->db->join('izin', 'izin.id = data_produksi.id_izin', 'left');
		$this->db->join('kurasi', 'kurasi.id = data_produksi.id_kurasi', 'left');
		$this->db->where('SUBSTR(data_produksi.tanggal,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_produksi.tanggal,1,4)', $this->input->post('tahun'));
		$this->db->where('data_produksi.id_umkm', $this->input->post('id_umkm'));
		$query = $this->db->get();
		return $query->result();
	}

	public function data_produksi_print_full () {
		$this->db->select('*,k_produksi.nama as produksi_nama, bahan_baku.nama as bahan_baku, ramah_l.nama as proses, izin.nama as izin, kurasi.nama as kurasi, k_produksi.id as id_kproduksi,k_produksi.nama as nama_kproduksi, bahan_baku.id as id_pemasok, ramah_l.id as id_proses, izin.id as id_izin, kurasi.id as id_kurasi, data_produksi.id as id_dataproduksi');
		$this->db->from('data_produksi');
		$this->db->join('registrasi', 'registrasi.ID = data_produksi.id_umkm', 'left');
		$this->db->join('k_produksi','k_produksi.id = data_produksi.id_kproduksi', 'left');
		$this->db->join('bahan_baku', 'bahan_baku.id = data_produksi.id_pemasok', 'left');
		$this->db->join('ramah_l', 'ramah_l.id = data_produksi.id_proses', 'left');
		$this->db->join('izin', 'izin.id = data_produksi.id_izin', 'left');
		$this->db->join('kurasi', 'kurasi.id = data_produksi.id_kurasi', 'left');
		$this->db->where('SUBSTR(data_produksi.tanggal,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_produksi.tanggal,1,4)', $this->input->post('tahun'));
		$query = $this->db->get();
		return $query->result_array();
	}

		public function detail_profil ($id) {
		$this->db->select('*');
		$this->db->from('registrasi');
		$this->db->where('registrasi.ID', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function data_pemasaran_print () {
		$this->db->select('*,omzet.nama as omzet, pasar.nama as pasar, penjualan.nama as penjualan, data_pemasaran.id as id_datapemasaran, omzet.id as id_omzet, pasar.id as id_pasar, penjualan.id as id_penjualan');
		$this->db->from('data_pemasaran');
		$this->db->join('registrasi', 'registrasi.ID = data_pemasaran.id_umkm', 'left');
		$this->db->join('omzet','omzet.id = data_pemasaran.id_omzet', 'left');
		$this->db->join('pasar', 'pasar.id = data_pemasaran.id_pasar', 'left');
		$this->db->join('penjualan', 'penjualan.id = data_pemasaran.id_penjualan', 'left');
		$this->db->where('SUBSTR(data_pemasaran.tanggal,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_pemasaran.tanggal,1,4)', $this->input->post('tahun'));
		$this->db->where('data_pemasaran.id_umkm', $this->input->post('id_umkm'));
		$query = $this->db->get();
		return $query->result();
	}

	public function data_pemasaran_print_full () {
		$this->db->select('*,omzet.nama as omzet, pasar.nama as pasar, penjualan.nama as penjualan, data_pemasaran.id as id_datapemasaran, omzet.id as id_omzet, pasar.id as id_pasar, penjualan.id as id_penjualan');
		$this->db->from('data_pemasaran');
		$this->db->join('registrasi', 'registrasi.ID = data_pemasaran.id_umkm', 'left');
		$this->db->join('omzet','omzet.id = data_pemasaran.id_omzet', 'left');
		$this->db->join('pasar', 'pasar.id = data_pemasaran.id_pasar', 'left');
		$this->db->join('penjualan', 'penjualan.id = data_pemasaran.id_penjualan', 'left');
		$this->db->where('SUBSTR(data_pemasaran.tanggal,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_pemasaran.tanggal,1,4)', $this->input->post('tahun'));
		$query = $this->db->get();
		return $query->result_array();
	}
	

	public function data_keuangan_print () {
		$this->db->select('*, l_keuangan.nama as l_keuangan, rekening.nama as rekening, transaksi.name as transaksi, transaksi_sub.name as transaksi_sub, transaksi_sub_sub.name as transaksi_sub_sub, transaksi_sub_sub_sub.name as transaksi_sub_sub_sub, transaksi_sub_sub_sub_sub.name as transaksi_sub_sub_sub_sub, pnontradisional.name as pnontradisional, pnontradisional_sub.name as pnontradisional_sub, ptradisional.nama as ptradisional, ptradisional_sub.nama as ptradisional_sub, data_keuangan.id_transaksi_sub_sub_sub as id_transaksi_sub_sub_sub, data_keuangan.id_transaksi_sub_sub_sub_sub as id_transaksi_sub_sub_sub_sub, data_keuangan.ptradisional_nama as ptradisional_nama, data_keuangan.pnontradisional_nominal as pnontradisional_nominal, data_keuangan.id as id_datakeuangan, l_keuangan.id as id_lkeuangan, rekening.id as id_rekening');
		$this->db->from('data_keuangan');
		$this->db->join('registrasi', 'registrasi.ID = data_keuangan.lembaga_id', 'left');
		$this->db->join('l_keuangan','l_keuangan.id = data_keuangan.laporan_id', 'left');
		$this->db->join('rekening', 'rekening.id = data_keuangan.rekening_id', 'left');
		$this->db->join('transaksi', 'transaksi.id = data_keuangan.id_transaksi', 'left');
		$this->db->join('transaksi_sub', 'transaksi_sub.id = data_keuangan.id_transaksi_sub', 'left');
		$this->db->join('transaksi_sub_sub', 'transaksi_sub_sub.id = data_keuangan.id_transaksi_sub_sub', 'left');
		$this->db->join('transaksi_sub_sub_sub', 'transaksi_sub_sub_sub.id = data_keuangan.id_transaksi_sub_sub_sub', 'left');	
		$this->db->join('transaksi_sub_sub_sub_sub', 'transaksi_sub_sub_sub_sub.id = data_keuangan.id_transaksi_sub_sub_sub_sub', 'left');
		$this->db->join('pnontradisional', 'pnontradisional.id = data_keuangan.id_pnontradisional', 'left');	
		$this->db->join('pnontradisional_sub', 'pnontradisional_sub.id = data_keuangan.id_pnontradisional_sub', 'left');
		$this->db->join('ptradisional', 'ptradisional.id = data_keuangan.id_ptradisional', 'left');
		$this->db->join('ptradisional_sub', 'ptradisional_sub.id = data_keuangan.id_ptradisional_sub', 'left');
		$this->db->where('SUBSTR(data_keuangan.periode,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_keuangan.periode,1,4)', $this->input->post('tahun'));
		$this->db->where('data_keuangan.lembaga_id', $this->input->post('id_umkm'));
		$query = $this->db->get();
		return $query->result();
	}

	public function data_keuangan_print_full () {
		$this->db->select('*, l_keuangan.nama as l_keuangan, rekening.nama as rekening, transaksi.name as transaksi, transaksi_sub.name as transaksi_sub, transaksi_sub_sub.name as transaksi_sub_sub, transaksi_sub_sub_sub.name as transaksi_sub_sub_sub, transaksi_sub_sub_sub_sub.name as transaksi_sub_sub_sub_sub, pnontradisional.name as pnontradisional, pnontradisional_sub.name as pnontradisional_sub, ptradisional.nama as ptradisional, ptradisional_sub.nama as ptradisional_sub, data_keuangan.id_transaksi_sub_sub_sub as id_transaksi_sub_sub_sub, data_keuangan.id_transaksi_sub_sub_sub_sub as id_transaksi_sub_sub_sub_sub, data_keuangan.ptradisional_nama as ptradisional_nama, data_keuangan.pnontradisional_nominal as pnontradisional_nominal, data_keuangan.id as id_datakeuangan, l_keuangan.id as id_lkeuangan, rekening.id as id_rekening');
		$this->db->from('data_keuangan');
		$this->db->join('registrasi', 'registrasi.ID = data_keuangan.lembaga_id', 'left');
		$this->db->join('l_keuangan','l_keuangan.id = data_keuangan.laporan_id', 'left');
		$this->db->join('rekening', 'rekening.id = data_keuangan.rekening_id', 'left');
		$this->db->join('transaksi', 'transaksi.id = data_keuangan.id_transaksi', 'left');
		$this->db->join('transaksi_sub', 'transaksi_sub.id = data_keuangan.id_transaksi_sub', 'left');
		$this->db->join('transaksi_sub_sub', 'transaksi_sub_sub.id = data_keuangan.id_transaksi_sub_sub', 'left');
		$this->db->join('transaksi_sub_sub_sub', 'transaksi_sub_sub_sub.id = data_keuangan.id_transaksi_sub_sub_sub', 'left');	
		$this->db->join('transaksi_sub_sub_sub_sub', 'transaksi_sub_sub_sub_sub.id = data_keuangan.id_transaksi_sub_sub_sub_sub', 'left');
		$this->db->join('pnontradisional', 'pnontradisional.id = data_keuangan.id_pnontradisional', 'left');	
		$this->db->join('pnontradisional_sub', 'pnontradisional_sub.id = data_keuangan.id_pnontradisional_sub', 'left');
		$this->db->join('ptradisional', 'ptradisional.id = data_keuangan.id_ptradisional', 'left');
		$this->db->join('ptradisional_sub', 'ptradisional_sub.id = data_keuangan.id_ptradisional_sub', 'left');
		$this->db->where('SUBSTR(data_keuangan.periode,6,2)', $this->input->post('bulan'));
		$this->db->where('SUBSTR(data_keuangan.periode,1,4)', $this->input->post('tahun'));
		$query = $this->db->get();
		return $query->result_array();
	}

	
	public function profil_admin () {
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where ('NIP',  $this->session->userdata('NIP'));
		$query = $this->db->get();
		return $query->result();
	}

	public function periodelaporan () {
		$this->db->select('*');
		$this->db->from('periode_laporan');
		$query = $this->db->get();
		return $query->result();
	}

	public function lihat_laporanfull () {
		$this->db->select('*');
		$this->db->join('registrasi','laporan_full.lembaga_id = registrasi.ID');
		$this->db->from('laporan_full');
		$this->db->where('username', $this->session->userdata('username'));
		$query = $this->db->get();
		return $query->result();
	}
	

}