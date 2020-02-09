<?php
/**
 * 
 */
class IsiLaporan extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Laporan');
		$this->load->model('global_model');

		if($this->session->userdata('username') == null) {
            redirect('http://localhost/surveyumkm/');
        }
	}
	
	function index() {
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

		$this->load->view('user/isi_laporan', $data);
	}

	function tambah_data () {
		//$step1 = $this->input->post("step1");
		$step2 = $this->input->post("step2");
		//$step3 = $this->input->post("step3");
		//$step4 = $this->input->post("step4");
		print_r($step2);
		exit;
		//$this->global_model->Insert('data_kelembagaan', $step1);
		$this->global_model->Insert('data_keuangan', $step2);
		//$this->global_model->Insert('data_produksi', $step3);
		//$this->global_model->Insert('data_pemasaran', $step4);
		
		//redirect(base_url("user/RiwayatLaporan/index"));
		/*$data = array(
			'id_umkm' => $this->input->post('nama_umkm'),
			'tanggal' => $this->input->post('tanggal'),
			'id_legalitas_usaha' => $this->input->post('legalitas_usaha'),
			'id_struktur_organisasi' => $this->input->post('struktur_organisasi'),
		);
		$data = $this->global_model->Insert('data_kelembagaan', $data);

		$data1 = array(
			'id_kproduksi' => $this->input->post('k_produksi'),
			'id_pemasok' => $this->input->post('pemasok'),
			'id_proses' => $this->input->post('proses'),
			'id_izin' => $this->input->post('izin'),
			'id_kurasi' => $this->input->post('kurasi'),
		);

		$data = $this->global_model->Insert('data_produksi', $data1);*/

	}
}