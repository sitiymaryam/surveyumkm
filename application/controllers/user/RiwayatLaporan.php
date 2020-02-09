<?php 
class RiwayatLaporan extends CI_Controller {
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
		$data = $this->Laporan->periodelaporan();
		$data = array(
			'periode_awal' => $data[0]->periode_awal,
			'periode_akhir' => $data[0]->periode_akhir,
		);

		$data ['data1'] = $this->Laporan->get_datalembaga();
        $data ['data2'] = $this->Laporan->get_dataproduksi();
        $data ['data3'] = $this->Laporan->get_datapemasaran();
        $data ['data4'] = $this->Laporan->get_datakeuangan();

        $this->load->view('user/riwayat_laporan', $data);
	}
}