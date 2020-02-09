<?php

class LaporanKeuangan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Laporan');
		$this->load->model('global_model');

		if($this->session->userdata('username') == null) {
            redirect('http://localhost/surveyumkm/');
        }
	}

	public function notif () {
		$this->load->view('user/header_beranda');
		$this->load->view('user/notif');
	}

	public function index () {
		$this->load->view('user/header_beranda');
		$data['data1'] = $this->Laporan->get_legalitasusaha();
		$data['data2'] = $this->Laporan->get_strukturorganisasi();
		$data['data3'] = $this->Laporan->get_nama();
		$data['data4'] = $this->Laporan->get_jenis();

		$data['data5'] = $this->Laporan->get_kproduksi();
		$data['data6'] = $this->Laporan->get_bahanbaku();
		$data['data7'] = $this->Laporan->get_pramahlingkungan();
		$data['data8'] = $this->Laporan->get_izin();
		$data['data9'] = $this->Laporan->get_kurasiproduk();

		$data['data10'] = $this->Laporan->get_omzet();
		$data['data11'] = $this->Laporan->get_jpasar();
		$data['data12'] = $this->Laporan->get_penjualan();

		$data['data13'] = $this->Laporan->get_Lkeuangan();
		$data['data14'] = $this->Laporan->get_rekening();
		
		$data['data15'] = $this->Laporan->get_pnontradisional();
		$data['data16'] = $this->Laporan->get_ptradisional();

 
		$this->load->view('user/coba_isi', $data);

	}

	public function notif_gagalinput() {
		$this->load->view('user/header_beranda');
		$this->load->view('user/notif_gagalinput');
	}

	public function tambah_lembaga() {
		$id_umkm = $_POST['nama_umkm'];
		$tanggal = substr(date('Y-m-d'), 5,2) ;

		$cek = $this->db->query("select * from data_kelembagaan where id_umkm='$id_umkm' and substr(tanggal,6,2) = $tanggal");	
		$jatah = $cek->num_rows();	
		if ($jatah > 0) {
			redirect('user/LaporanKeuangan/notif_gagalinput'); 

		} else {
			$data = array(
			'id_umkm' => $this->input->post('nama_umkm'),
			'tanggal' => $this->input->post('tanggal'),
			'id_legalitas_usaha' => $this->input->post('legalitas_usaha'),
			'id_struktur_organisasi' => $this->input->post('struktur_organisasi'),
		);

		$data = $this->global_model->Insert('data_kelembagaan', $data);
		redirect('user/LaporanKeuangan/notif'); 
		 
		}
	}

	public function tambah_produksi()
	{
		$tanggal = date('Y-m-d');
		$this->load->model('global_model');
		$data = array(
			'id_umkm' => $this->input->post('nama_umkm'),
			'tanggal' => $this->input->post('tanggal'),
			'id_kproduksi' => $this->input->post('k_produksi'),
			'id_pemasok' => $this->input->post('pemasok'),
			'id_proses' => $this->input->post('proses'),
			'id_izin' => $this->input->post('izin'),
			'id_kurasi' => $this->input->post('kurasi'),
		);

		$data = $this->global_model->Insert('data_produksi', $data);
		redirect('user/LaporanKeuangan/notif');
	}
  
	public function tambah_pemasaran() {
		$this->load->model('global_model');
		$data = array (
			'id_umkm' => $this->input->post('nama_umkm'),
			'tanggal' => $this->input->post('tanggal'),
			'id_omzet' => $this->input->post('omzet'),
			'id_pasar' => $this->input->post('pasar'),
			'internet' => $this->input->post('internet'),
			'id_penjualan' => $this->input->post('penjualan'),
			'nominal' => $this->input->post('nominal'),
			'kontrak' => $this->input->post('kontrak'),		
		);

		$data = $this->global_model->Insert('data_pemasaran', $data);
		redirect('user/LaporanKeuangan/notif');
	}

	public function lihat_laporan() {
		$this->load->model('Laporan');

		$data = $this->Laporan->periodelaporan();
		$data = array(
			'periode_awal' => $data[0]->periode_awal,
			'periode_akhir' => $data[0]->periode_akhir,
		);

        $data ['data1'] = $this->Laporan->get_datalembaga();
        $data ['data2'] = $this->Laporan->get_dataproduksi();
        $data ['data3'] = $this->Laporan->get_datapemasaran();
        $data ['data4'] = $this->Laporan->get_datakeuangan();


		$this->load->view('user/header_beranda');
		$this->load->view('user/lihat_laporan', $data);
	}

	public function insert()
	{
		$transaksi_sub = !empty($this->input->post("transaksi_sub")) ? $this->input->post("transaksi_sub") : 0;
		$transaksi_sub_sub = !empty($this->input->post("transaksi_sub_sub")) ? $this->input->post("transaksi_sub_sub") : 0;
		$transaksi_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub") : 0;
		$transaksi_sub_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub_sub") : 0;
		$pnontradisional_sub = !empty($this->input->post("pnontradisional_sub")) ? $this->input->post("pnontradisional_sub") : 0;
		$ptradisional_sub = !empty($this->input->post("ptradisional_sub")) ? $this->input->post("ptradisional_sub") : 0;

		$this->load->model("global_model");
		$data = array (
			"lembaga_id" => $this->input->post('lembaga_id'),
			"periode" => $this->input->post('periode'),
			"laporan_id" => $this->input->post('laporan_id'),
			"rekening_id" => $this->input->post('rekening_id'),
			"id_transaksi" => $this->input->post("transaksi"),
			"id_transaksi_sub" => $transaksi_sub,
			"id_transaksi_sub_sub" => $transaksi_sub_sub,
			"id_transaksi_sub_sub_sub" => $transaksi_sub_sub_sub,
			"id_transaksi_sub_sub_sub_sub" => $transaksi_sub_sub_sub_sub,
			"id_pnontradisional" => $this->input->post("pnontradisional"),
			"id_pnontradisional_sub" => $pnontradisional_sub,
			"id_ptradisional" => $this->input->post("ptradisional"),
			"id_ptradisional_sub" => $ptradisional_sub,
			'pnontradisional_nominal' => $this->input->post('nominal_pnontradisional'),
			'ptradisional_nama' => $this->input->post('nama_lembaga'),
		);

		$data = $this->global_model->Insert("data_keuangan", $data);
		redirect(base_url('user/LaporanKeuangan/notif'));
	}


	public function alvri()
	{
		$id = 1;
		$data = $this->Laporan->get_datakeuangan($id);
		$data = array (
			"azis" => $data[0]->id,
			"isal" => $data[0]->lembaga,
			"alvri" => $data[0]->periode,
			"riyan" => $data[0]->laporan_id,
		);
		print_r($data);
	}

	public function detail_lembaga($id) {
    	$data= $this->Laporan->detail_datalembaga($id);
    	$data= array (
    		'nama_umkm' => $data[0]->nama_umkm,
    		'tanggal' => $data[0]->tanggal,
    		'legalitas_usaha' => $data[0]->legalitas_usaha,
    		'struktur_organisasi' => $data[0]->struktur_organisasi,
    	);

    	$this->load->view('user/header_beranda');
    	$this->load->view('user/detail_lembaga', $data); 
    }

    public function detail_produksi($id) {
		$data = $this->Laporan->detail_produksi($id);
		$data = array (
			'nama_umkm' => $data[0]->nama_umkm,
			'tanggal' => $data[0]->tanggal,
			'k_produksi' => $data[0]->produksi_nama,
			'bahan_baku' => $data[0]->bahan_baku,
			'proses' => $data[0]->proses,
			'izin' => $data[0]->izin,
			'kurasi' => $data[0]->kurasi,
		);

		$this->load->view('user/header_beranda');
    	$this->load->view('user/detail_produksi', $data); 
	}

	public function detail_pemasaran($id) {
		$data = $this->Laporan->detail_pemasaran($id);
		$data = array (
			'nama_umkm' => $data[0]->nama_umkm,
			'tanggal' => $data[0]->tanggal,
			'omzet' => $data[0]->omzet,
			'pasar' => $data[0]->pasar,
			'internet' => $data[0]->internet,
			'penjualan' => $data[0]->penjualan,
			'nominal' => $data[0]->nominal,
			'kontrak' => $data[0]->kontrak,
		);

		$this->load->view('user/header_beranda');
    	$this->load->view('user/detail_pemasaran', $data); 
	}

	public function edit_lembaga ($id) {

		$data= $this->Laporan->detail_datalembaga($id);
    	$data= array (
    		'id_datalembaga' => $data[0]->id_datalembaga,
    		'ID' => $data[0]->ID,
    		'id_strukturorganisasi' => $data[0]->id_strukturorganisasi,
    		'id_legalitasusaha' => $data[0]->id_legalitasusaha,
    		'nama_umkm' => $data[0]->nama_umkm,
    		'tanggal' => $data[0]->tanggal,
    		'legalitas_usaha' => $data[0]->legalitas_usaha,
    		'struktur_organisasi' => $data[0]->struktur_organisasi,
    	);

    	$data['data1'] = $this->Laporan->get_legalitasusaha();
		$data['data2'] = $this->Laporan->get_strukturorganisasi();
	    $this->load->view('user/header_beranda');
	    $this->load->view('user/edit_kelembagaan', $data); 
	}

	public function update_lembaga () {
		$id_datalembaga = $_POST['id'];
        $id_umkm = $_POST['id_umkm'];
        $tanggal = $_POST['tanggal'];
        $id_legalitas_usaha = $_POST['id_legalitas_usaha'];
        $id_struktur_organisasi = $_POST['id_struktur_organisasi'];
        $data = array(
            'id' => $id_datalembaga,
            'id_umkm' => $id_umkm,
            'tanggal' => $tanggal,
            'id_legalitas_usaha' => $id_legalitas_usaha,
            'id_struktur_organisasi' => $id_struktur_organisasi,
        );

        $where = array (
            'id' => $id_datalembaga,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('data_kelembagaan', $data, $where);
        if ($res>0) {
        redirect('user/LaporanKeuangan/lihat_laporan','refresh');
    	}
	}

	public function edit_produksi ($id) {

		$data= $this->Laporan->detail_produksi($id);
    	$data= array (
    		'id_dataproduksi' => $data[0]->id_dataproduksi,
    		'ID' => $data[0]->ID,
    		'nama_umkm' => $data[0]->nama_umkm,
			'tanggal' => $data[0]->tanggal,
			'id_kproduksi' => $data[0]->id_kproduksi,
			'k_produksi' => $data[0]->produksi_nama,
			'bahan_baku' => $data[0]->bahan_baku,
			'id_pemasok' => $data[0]->id_pemasok,
			'proses' => $data[0]->proses,
			'id_proses' => $data[0]->id_proses,
			'izin' => $data[0]->izin,
			'id_izin' => $data[0]->id_izin,
			'kurasi' => $data[0]->kurasi,
			'id_kurasi' => $data[0]->id_kurasi,
    	);

    	$data['data5'] = $this->Laporan->get_kproduksi();
		$data['data6'] = $this->Laporan->get_bahanbaku();
		$data['data7'] = $this->Laporan->get_pramahlingkungan();
		$data['data8'] = $this->Laporan->get_izin();
		$data['data9'] = $this->Laporan->get_kurasiproduk();
	    $this->load->view('user/header_beranda');
	    $this->load->view('user/edit_produksi', $data); 
	}

	public function update_produksi () {
		$id_dataproduksi = $_POST['id'];
        $id_umkm = $_POST['id_umkm'];
        $tanggal = $_POST['tanggal'];
        $id_kproduksi = $_POST['id_kproduksi'];
        $id_pemasok = $_POST['id_pemasok'];
        $id_proses = $_POST['id_proses'];
        $id_izin = $_POST['id_izin'];
        $id_kurasi = $_POST['id_kurasi'];

        $data = array(
            'id' => $id_dataproduksi,
            'id_umkm' => $id_umkm,
            'tanggal' => $tanggal,
            'id_kproduksi' => $id_kproduksi,
            'id_pemasok' => $id_pemasok,
            'id_proses' => $id_proses,
            'id_izin' => $id_izin,
            'id_kurasi' => $id_kurasi,
        );

        $where = array (
            'id' => $id_dataproduksi,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('data_produksi', $data, $where);
        if ($res>0) {
        redirect('user/LaporanKeuangan/lihat_laporan','refresh');
    	}
	}

	public function edit_pemasaran ($id) {

		$data= $this->Laporan->detail_pemasaran($id);
    	$data= array (
    		'id_datapemasaran' => $data[0]->id_datapemasaran,
    		'ID' => $data[0]->ID,
    		'nama_umkm' => $data[0]->nama_umkm,
    		'tanggal' => $data[0]->tanggal,
    		'id_omzet' => $data[0]->id_omzet,
    		'omzet' => $data[0]->omzet,
    		'id_pasar' => $data[0]->id_pasar,
    		'pasar' => $data[0]->pasar,
    		'internet' => $data[0]->internet,
    		'id_penjualan' => $data[0]->id_penjualan,
    		'penjualan' => $data[0]->penjualan,
    		'nominal' => $data[0]->nominal,
    		'kontrak' => $data[0]->kontrak,
    	);

    	$data['data10'] = $this->Laporan->get_omzet();
		$data['data11'] = $this->Laporan->get_jpasar();
		$data['data12'] = $this->Laporan->get_penjualan();
	    $this->load->view('user/header_beranda');
	    $this->load->view('user/edit_pemasaran', $data); 
	}

	public function update_pemasaran () {
		$id_datapemasaran = $_POST['id'];
        $id_umkm = $_POST['id_umkm'];
        $tanggal = $_POST['tanggal'];
        $id_omzet = $_POST['id_omzet'];
        $id_pasar = $_POST['id_pasar'];
        $internet = $_POST['internet'];
        $id_penjualan = $_POST['id_penjualan'];
        $nominal = $_POST['nominal'];
        $kontrak = $_POST['kontrak'];

        $data = array(
            'id' => $id_datapemasaran,
            'id_umkm' => $id_umkm,
            'tanggal' => $tanggal,
            'id_omzet' => $id_omzet,
            'id_pasar' => $id_pasar,
            'internet' => $internet,
            'id_penjualan' => $id_penjualan,
            'nominal' => $nominal,
            'kontrak' => $kontrak,
        );

        $where = array (
            'id' => $id_datapemasaran,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('data_pemasaran', $data, $where);
        if ($res>0) {
        redirect('user/LaporanKeuangan/lihat_laporan','refresh');
    	}
	}

	public function detail_keuangan($id) {
		$data = $this->Laporan->detail_keuangan($id);
		$data = array (
			'nama_umkm' => $data[0]->nama_umkm,
			'tanggal' => $data[0]->periode,
			'l_keuangan' => $data[0]->l_keuangan,
			'rekening' => $data[0]->rekening_id,
			'transaksi' => $data[0]->transaksi,
			'transaksi_sub' => $data[0]->transaksi_sub,
			'transaksi_sub_sub' => $data[0]->transaksi_sub_sub,
			'transaksi_sub_sub_sub' => $data[0]->transaksi_sub_sub_sub,
			'transaksi_sub_sub_sub_sub' => $data[0]->transaksi_sub_sub_sub_sub,
			'pnontradisional' => $data[0]->pnontradisional,
			'pnontradisional_sub' => $data[0]->pnontradisional_sub,
			'ptradisional' => $data[0]->ptradisional,
			'ptradisional_sub' => $data[0]->ptradisional_sub,
			'ptradisional_nama' => $data[0]->ptradisional_nama,
			'pnontradisional_nominal' => $data[0]->pnontradisional_nominal,
			'id_transaksi_sub_sub_sub' => $data[0]->id_transaksi_sub_sub_sub,
			'id_transaksi_sub_sub_sub_sub' => $data[0]->id_transaksi_sub_sub_sub_sub,
			'ptradisional_nama' => $data[0]->ptradisional_nama,
			'id_pnontradisional_sub' => $data[0]->id_pnontradisional_sub,
			'pnontradisional_nominal' => $data[0]->pnontradisional_nominal,
			
		);

		$this->load->view('user/header_beranda');
    	$this->load->view('user/detail_keuangan', $data); 
	}

	public function edit_keuangan ($id) {

		$data= $this->Laporan->detail_keuangan($id);
    	$data= array (
    		'id_datakeuangan' => $data[0]->id_datakeuangan,
    		'nama_umkm' => $data[0]->nama_umkm,
    		'lembaga_id' => $data[0]->lembaga_id,
			'tanggal' => $data[0]->periode,
			'l_keuangan' => $data[0]->l_keuangan,
			'rekening' => $data[0]->rekening,
			'transaksi' => $data[0]->transaksi,
			'transaksi_sub' => $data[0]->transaksi_sub,
			'transaksi_sub_sub' => $data[0]->transaksi_sub_sub,
			'transaksi_sub_sub_sub' => $data[0]->transaksi_sub_sub_sub,
			'transaksi_sub_sub_sub_sub' => $data[0]->transaksi_sub_sub_sub_sub,
			'pnontradisional' => $data[0]->pnontradisional,
			'pnontradisional_sub' => $data[0]->pnontradisional_sub,
			'ptradisional' => $data[0]->ptradisional,
			'ptradisional_sub' => $data[0]->ptradisional_sub,
			'ptradisional_nama' => $data[0]->ptradisional_nama,
			'pnontradisional_nominal' => $data[0]->pnontradisional_nominal,
			'id_transaksi_sub_sub_sub' => $data[0]->id_transaksi_sub_sub_sub,
			'id_transaksi_sub_sub_sub_sub' => $data[0]->id_transaksi_sub_sub_sub_sub,
			'ptradisional_nama' => $data[0]->ptradisional_nama,
			'id_pnontradisional_sub' => $data[0]->id_pnontradisional_sub,
			'pnontradisional_nominal' => $data[0]->pnontradisional_nominal,
			'id_lkeuangan' => $data[0]->id_lkeuangan,
			'id_rekening' => $data[0]->id_rekening,
    	);

    	$data['data13'] = $this->Laporan->get_Lkeuangan();
		$data['data14'] = $this->Laporan->get_rekening();
		$data['data4'] = $this->Laporan->get_jenis();
		
		$data['data15'] = $this->Laporan->get_pnontradisional();
		$data['data16'] = $this->Laporan->get_ptradisional();
	    $this->load->view('user/header_beranda');
	    $this->load->view('user/edit_keuangan', $data); 
	}

	public function update_keuangan () {
		$transaksi_sub = !empty($this->input->post("transaksi_sub")) ? $this->input->post("transaksi_sub") : 0;
		$transaksi_sub_sub = !empty($this->input->post("transaksi_sub_sub")) ? $this->input->post("transaksi_sub_sub") : 0;
		$transaksi_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub") : 0;
		$transaksi_sub_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub_sub") : 0;
		$pnontradisional_sub = !empty($this->input->post("pnontradisional_sub")) ? $this->input->post("pnontradisional_sub") : 0;
		$ptradisional_sub = !empty($this->input->post("ptradisional_sub")) ? $this->input->post("ptradisional_sub") : 0;

		$id = $_POST['id'];
        $lembaga_id = $_POST['lembaga_id'];
        $periode = $_POST['periode'];
        $laporan_id = $_POST['laporan_id'];
        $rekening_id = $_POST['rekening_id'];
        $transaksi = $_POST['transaksi'];

        $data = array(
            'id' => $id,
            'lembaga_id' => $lembaga_id,
            'periode' => $periode,
            'laporan_id' => $laporan_id,
            'rekening_id' => $rekening_id,
            'id_transaksi' => $transaksi,
            'id_transaksi_sub' => $transaksi_sub,
            'id_transaksi_sub_sub' => $transaksi_sub_sub,
            'id_transaksi_sub_sub_sub' => $transaksi_sub_sub_sub,
            'id_transaksi_sub_sub_sub_sub' => $transaksi_sub_sub_sub_sub,
            "id_pnontradisional" => $this->input->post("pnontradisional"),
			"id_pnontradisional_sub" => $pnontradisional_sub,
			"id_ptradisional" => $this->input->post("ptradisional"),
			"id_ptradisional_sub" => $ptradisional_sub,
			'pnontradisional_nominal' => $this->input->post('nominal_pnontradisional'),
			'ptradisional_nama' => $this->input->post('nama_lembaga'),
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('data_keuangan', $data, $where);
        if ($res>0) {
        redirect('user/LaporanKeuangan/lihat_laporan','refresh');
    	}
    }

    

}