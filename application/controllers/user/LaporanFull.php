<?php
class LaporanFull extends Ci_controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Laporan');

		if($this->session->userdata('username') == null) {
            redirect('http://localhost/surveyumkm/');
        }
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

 
		$this->load->view('user/laporan_full', $data);

	}

	public function insert()
	{
		$transaksi_sub = !empty($this->input->post("transaksi_sub")) ? $this->input->post("transaksi_sub") : 0;
		$transaksi_sub_sub = !empty($this->input->post("transaksi_sub_sub")) ? $this->input->post("transaksi_sub_sub") : 0;
		$transaksi_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub") : 0;
		$transaksi_sub_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub_sub") : 0;
		$pnontradisional_sub = !empty($this->input->post("pnontradisional_sub")) ? $this->input->post("pnontradisional_sub") : 0;
		$ptradisional_sub = !empty($this->input->post("ptradisional_sub")) ? $this->input->post("ptradisional_sub") : 0;

       
        $laporan_id = $_POST['laporan_id'];
        $rekening_id = $_POST['rekening_id'];
        $transaksi = $_POST['transaksi'];

        $data = array(

            'lembaga_id' =>$this->input->post('lembaga_id'),
            'periode' => $this->input->post('periode'),
            'id_legalitas_usaha' => $this->input->post('legalitas_usaha'),
		 	'id_struktur_organisasi' => $this->input->post('struktur_organisasi'),
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
			'id_kproduksi' => $this->input->post('k_produksi'),
			'id_pemasok' => $this->input->post('pemasok'),
			'id_proses' => $this->input->post('proses'),
			'id_izin' => $this->input->post('izin'),
			'id_kurasi' => $this->input->post('kurasi'),
			'id_omzet' => $this->input->post('omzet'),
			'id_pasar' => $this->input->post('pasar'),
			'internet' => $this->input->post('internet'),
			'id_penjualan' => $this->input->post('penjualan'),
			'nominal_penjualan' => $this->input->post('nominal'),
			'kontrak' => $this->input->post('kontrak'),	
        );

        $data = $this->global_model->Insert('laporan_full', $data);
		redirect('user/LaporanFull/lihat_laporan');
	}

	public function lihat_laporan() {
		$this->load->view('user/header_beranda');

		$data = $this->Laporan->periodelaporan();
		$data = array(
			'periode_awal' => $data[0]->periode_awal,
			'periode_akhir' => $data[0]->periode_akhir,
		);

		$data['data1'] = $this->Laporan->lihat_laporanfull();
		$this->load->view('user/lihat_laporanfull', $data);
	}

	public function detail ($id) {
		$data = $this->Laporan->detail_laporanfull($id);
		$data = array (
			'id' => $data[0]->id_laporan,
			'nama_umkm' => $data[0]->nama_umkm,
    		'periode' => $data[0]->periode,
			'legalitas_usaha' => $data[0]->legalitas_usaha,
    		'struktur_organisasi' => $data[0]->struktur_organisasi,
			'l_keuangan' => $data[0]->l_keuangan,
			'rekening_id' => $data[0]->rekening_id,
			'transaksi' => $data[0]->transaksi,
			'transaksi_sub' => $data[0]->transaksi_sub,
			'transaksi_sub_sub' => $data[0]->transaksi_sub_sub,
			'transaksi_sub_sub_sub' => $data[0]->transaksi_sub_sub_sub,
			'transaksi_sub_sub_sub_sub' => $data[0]->transaksi_sub_sub_sub_sub,
			'pnontradisional' => $data[0]->pnontradisional,
			'pnontradisional_sub' => $data[0]->pnontradisional_sub,
			'ptradisional' => $data[0]->ptradisional,
			'ptradisional_sub' => $data[0]->ptradisional_sub,
			'id_transaksi_sub' => $data[0]->id_transaksi_sub,
			'id_transaksi_sub_sub' => $data[0]->id_transaksi_sub_sub,
			'id_transaksi_sub_sub_sub' => $data[0]->id_transaksi_sub_sub_sub,
			'id_transaksi_sub_sub_sub_sub' => $data[0]->id_transaksi_sub_sub_sub_sub,
			'id_pnontradisional_sub' => $data[0]->id_pnontradisional_sub,
			'ptradisional_nama' => $data[0]->ptradisional_nama,
			'pnontradisional_nominal' => $data[0]->pnontradisional_nominal,
			'k_produksi' => $data[0]->produksi_nama,
			'bahan_baku' => $data[0]->bahan_baku,
			'proses' => $data[0]->proses,
			'izin' => $data[0]->izin,
			'kurasi' => $data[0]->kurasi,
			'omzet' => $data[0]->omzet,
			'pasar' => $data[0]->pasar,
			'internet' => $data[0]->internet,
			'penjualan' => $data[0]->penjualan,
			'nominal' => $data[0]->nominal_penjualan,
			'kontrak' => $data[0]->kontrak,
			
		);

		$this->load->view('user/header_beranda');
    	$this->load->view('user/detail_laporanfull', $data); 
	}

	public function edit ($id) {
		$data= $this->Laporan->detail_laporanfull($id);
    	$data= array (
    		'id' => $data[0]->id_laporan,
    		'nama_umkm' => $data[0]->nama_umkm,
    		'lembaga_id' => $data[0]->lembaga_id,
			'tanggal' => $data[0]->periode,
			'l_keuangan' => $data[0]->l_keuangan,
			'rekening_id' => $data[0]->rekening_id,
			'id_strukturorganisasi' => $data[0]->id_strukturorganisasi,
    		'id_legalitasusaha' => $data[0]->id_legalitasusaha,
    		'legalitas_usaha' => $data[0]->legalitas_usaha,
    		'struktur_organisasi' => $data[0]->struktur_organisasi,
			'id_lkeuangan' => $data[0]->id_lkeuangan,
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
			'id_omzet' => $data[0]->id_omzet,
    		'omzet' => $data[0]->omzet,
    		'id_pasar' => $data[0]->id_pasar,
    		'pasar' => $data[0]->pasar,
    		'internet' => $data[0]->internet,
    		'id_penjualan' => $data[0]->id_penjualan,
    		'penjualan' => $data[0]->penjualan,
    		'nominal_penjualan' => $data[0]->nominal_penjualan,
    		'kontrak' => $data[0]->kontrak,
    	);

    	$data['data1'] = $this->Laporan->get_legalitasusaha();
		$data['data2'] = $this->Laporan->get_strukturorganisasi();
    	$data['data3'] = $this->Laporan->get_nama();

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
		$data['data4'] = $this->Laporan->get_jenis();
		
		$data['data15'] = $this->Laporan->get_pnontradisional();
		$data['data16'] = $this->Laporan->get_ptradisional();
	    $this->load->view('user/header_beranda');
	    $this->load->view('user/edit_laporanfull', $data);
	}

	public function update () {
		$transaksi_sub = !empty($this->input->post("transaksi_sub")) ? $this->input->post("transaksi_sub") : 0;
		$transaksi_sub_sub = !empty($this->input->post("transaksi_sub_sub")) ? $this->input->post("transaksi_sub_sub") : 0;
		$transaksi_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub") : 0;
		$transaksi_sub_sub_sub_sub = !empty($this->input->post("transaksi_sub_sub_sub_sub")) ? $this->input->post("transaksi_sub_sub_sub_sub") : 0;
		$pnontradisional_sub = !empty($this->input->post("pnontradisional_sub")) ? $this->input->post("pnontradisional_sub") : 0;
		$ptradisional_sub = !empty($this->input->post("ptradisional_sub")) ? $this->input->post("ptradisional_sub") : 0;

       
        $laporan_id = $_POST['laporan_id'];
        $rekening_id = $_POST['rekening_id'];
        $transaksi = $_POST['transaksi'];
        $id = $_POST['id'];

        $data = array(
        	'id' => $id,
            'lembaga_id' =>$this->input->post('lembaga_id'),
            'periode' => $this->input->post('periode'),
            'id_legalitas_usaha' => $this->input->post('legalitas_usaha'),
		 	'id_struktur_organisasi' => $this->input->post('struktur_organisasi'),
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
			'id_kproduksi' => $this->input->post('k_produksi'),
			'id_pemasok' => $this->input->post('pemasok'),
			'id_proses' => $this->input->post('proses'),
			'id_izin' => $this->input->post('izin'),
			'id_kurasi' => $this->input->post('kurasi'),
			'id_omzet' => $this->input->post('omzet'),
			'id_pasar' => $this->input->post('pasar'),
			'internet' => $this->input->post('internet'),
			'id_penjualan' => $this->input->post('penjualan'),
			'nominal_penjualan' => $this->input->post('nominal'),
			'kontrak' => $this->input->post('kontrak'),	
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('laporan_full', $data, $where);
        if ($res>0) {
        redirect('user/LaporanFull/lihat_laporan','refresh');
    	}
	}

	public function cetak(){
	    ob_start();
	    $data_kelembagaan = $this->Laporan->data_kelembagaan_print();
	    $data_keuangan = $this->Laporan->data_keuangan_print();
	    $data_produksi = $this->Laporan->data_produksi_print();
	    $data_pemasaran = $this->Laporan->data_pemasaran_print();
		$data_kelembagaan_hasil = array (
			'nama_umkm' => $data_kelembagaan[0]->nama_umkm,
    		'tanggal' => $data_kelembagaan[0]->tanggal,
			'legalitas_usaha' => $data_kelembagaan[0]->legalitas_usaha,
    		'struktur_organisasi' => $data_kelembagaan[0]->struktur_organisasi,
    	);
    	$data_keuangan_hasil = array(
			'l_keuangan' => $data_keuangan[0]->l_keuangan,
			'rekening_id' => $data_keuangan[0]->rekening_id,
			'transaksi' => $data_keuangan[0]->transaksi,
			'transaksi_sub' => $data_keuangan[0]->transaksi_sub,
			'transaksi_sub_sub' => $data_keuangan[0]->transaksi_sub_sub,
			'transaksi_sub_sub_sub' => $data_keuangan[0]->transaksi_sub_sub_sub,
			'transaksi_sub_sub_sub_sub' => $data_keuangan[0]->transaksi_sub_sub_sub_sub,
			'pnontradisional' => $data_keuangan[0]->pnontradisional,
			'pnontradisional_sub' => $data_keuangan[0]->pnontradisional_sub,
			'ptradisional' => $data_keuangan[0]->ptradisional,
			'ptradisional_sub' => $data_keuangan[0]->ptradisional_sub,
			'id_transaksi_sub' => $data_keuangan[0]->id_transaksi_sub,
			'id_transaksi_sub_sub' => $data_keuangan[0]->id_transaksi_sub_sub,
			'id_transaksi_sub_sub_sub' => $data_keuangan[0]->id_transaksi_sub_sub_sub,
			'id_transaksi_sub_sub_sub_sub' => $data_keuangan[0]->id_transaksi_sub_sub_sub_sub,
			'id_pnontradisional_sub' => $data_keuangan[0]->id_pnontradisional_sub,
			'ptradisional_nama' => $data_keuangan[0]->ptradisional_nama,
			'pnontradisional_nominal' => $data_keuangan[0]->pnontradisional_nominal,
		);
		$data_produksi_hasil = array(
			'k_produksi' => $data_produksi[0]->produksi_nama,
			'bahan_baku' => $data_produksi[0]->bahan_baku,
			'proses' => $data_produksi[0]->proses,
			'izin' => $data_produksi[0]->izin,
			'kurasi' => $data_produksi[0]->kurasi,
		);
		$data_pemasaran_hasil = array(
			'omzet' => $data_pemasaran[0]->omzet,
			'pasar' => $data_pemasaran[0]->pasar,
			'internet' => $data_pemasaran[0]->internet,
			'penjualan' => $data_pemasaran[0]->penjualan,
			'nominal' => $data_pemasaran[0]->nominal_penjualan,
			'kontrak' => $data_pemasaran[0]->kontrak,
		);

	    $this->load->view('user/print', $data);
	    $html = ob_get_contents();
	        ob_end_clean();
	        
	    require_once('./asset1/html2pdf/html2pdf.class.php');
	    $pdf = new HTML2PDF('P','A4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Cetak Laporan.pdf', 'D');
	  }


}