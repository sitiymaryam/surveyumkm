<?php
class LaporanKeuangan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');

		if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
	}
	public function cetak(){
	    ob_start();
	    $data= $this->Laporan->detail_datalembaga($id);
    	$data= array (
    		'nama_umkm' => $data[0]->nama_umkm,
    		'tanggal' => $data[0]->tanggal,
    		'legalitas_usaha' => $data[0]->legalitas_usaha,
    		'struktur_organisasi' => $data[0]->struktur_organisasi,
    	);
	    $this->load->view('admin/print', $data);
	    $html = ob_get_contents();
	        ob_end_clean();
	        
	    require_once('./asset1/html2pdf/html2pdf.class.php');
	    $pdf = new HTML2PDF('P','A4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Cetak Lembaga.pdf', 'D');
	  }
	public function cetak2 () {
		$this->load->model('Laporan');

		$data = $this->Laporan->get_Lkeuangan();
		$data = array('data' => $data);

		$this->load->view('admin/beranda');
        $this->load->view('admin/laporan_keuangan', $data);
	}

	public function v_tambah () {
		$this->load->view('admin/beranda');
		$this->load->view('admin/add_Lkeuangan');
	}

	public function tambah () {
		$this->load->model('global_model');
		$data = array (
			'nama' => $this->input->post('nama'),
		);

		$data = $this->global_model->Insert('l_keuangan', $data);
		redirect('http://localhost/surveyumkm/index.php/admin/LaporanKeuangan/cetak');

	}

	public function delete ($id) {
		$id = array('id' => $id);
   		$this->load->model('global_model');
	    $this->global_model->Delete('l_keuangan', $id);
	    redirect(base_url('index.php/admin/LaporanKeuangan/cetak'),'refresh');
	}

	public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('l_keuangan', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'nama' => $key[0]['nama'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_Lkeuangan', $data); 
    }

    public function update () {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $data = array(
            'id' => $id,
            'nama' => $nama,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('l_keuangan', $data, $where);
        if ($res>0) {
        redirect('admin/LaporanKeuangan/cetak','refresh');
    }
    }
}