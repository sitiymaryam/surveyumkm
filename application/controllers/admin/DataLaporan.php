<?php 
class DataLaporan extends Ci_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Laporan');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

    public function index() {
		$data['data1'] = $this->Laporan->get_namaumkm();

		$this->load->view('admin/beranda');
		$this->load->view('admin/data_laporan', $data);
	}

    public function notif() {
        $this->load->view('admin/beranda');
        $this->load->view('admin/notif');
    }

    public function lihat_laporan ($ID) {
        $data ['ID'] = $ID;
        $data ['data1'] = $this->Laporan->admin_lihatlembaga($ID);
        $data ['data2'] = $this->Laporan->admin_lihatkeuangan($ID);
        $data ['data3'] = $this->Laporan->admin_lihatproduksi($ID);
        $data ['data4'] = $this->Laporan->admin_lihatpemasaran($ID);

        $this->load->view('admin/beranda');
        $this->load->view('admin/lihat_laporan', $data);
    }

    public function detail_lembaga($id) {
        $data= $this->Laporan->detail_datalembaga($id);
        $data= array (
            'nama_umkm' => $data[0]->nama_umkm,
            'tanggal' => $data[0]->tanggal,
            'legalitas_usaha' => $data[0]->legalitas_usaha,
            'struktur_organisasi' => $data[0]->struktur_organisasi,
        );

        $this->load->view('admin/beranda');
        $this->load->view('admin/d_lembaga', $data); 
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

        $this->load->view('admin/beranda');
        $this->load->view('admin/d_keuangan', $data); 
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

        $this->load->view('admin/beranda');
        $this->load->view('admin/d_produksi', $data); 
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

        $this->load->view('admin/beranda');
        $this->load->view('admin/d_pemasaran', $data); 
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
        $this->load->view('admin/beranda');
        $this->load->view('admin/e_lembaga', $data); 
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
        redirect('admin/DataLaporan/notif','refresh');
        }
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
        $this->load->view('admin/beranda');
        $this->load->view('admin/e_keuangan', $data); 
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
        redirect('admin/DataLaporan/notif','refresh');
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
        $this->load->view('admin/beranda');
        $this->load->view('admin/e_produksi', $data); 
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
        redirect('admin/DataLaporan/notif','refresh');
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
        $this->load->view('admin/beranda');
        $this->load->view('admin/e_pemasaran', $data); 
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
        redirect('admin/DataLaporan/notif','refresh');
        }
    }

    public function delete_lembaga ($id) {

        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('data_kelembagaan', $id);
        redirect('admin/DataLaporan/notif','refresh');
    }

    public function delete_keuangan ($id) {

        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('data_keuangan', $id);
        redirect('admin/DataLaporan/notif','refresh');
    }
    public function delete_produksi ($id) {

        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('data_produksi', $id);
        redirect('admin/DataLaporan/notif','refresh');
    }

    public function delete_pemasaran ($id) {

        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('data_pemasaran', $id);
        redirect('admin/DataLaporan/notif','refresh');
    }

    public function cetak_profil ($id) {
        ob_start();
        $key = $this->global_model->GetWhere('registrasi', array('ID' => $id));
        $data = array(
        'ID' => $key[0]['ID'],
        'email' => $key[0]['email'],
        'nama_umkm' => $key[0]['nama_umkm'],
        'nama_pemilik' => $key[0]['nama_pemilik'],
        'kategori_umkm' => $key[0]['kategori_umkm'],
        'tahun_mulai' => $key[0]['tahun_mulai'],
        'bulan_mulai' => $key[0]['bulan_mulai'],
        'tahun_fasilitas' => $key[0]['tahun_fasilitas'],
        'triwulan_fasilitas' => $key[0]['triwulan_fasilitas'],
        'nomor_ktp' => $key[0]['nomor_ktp'],
        'no_npwp' => $key[0]['no_npwp'],
        'no_hp' => $key[0]['no_hp'],
        'alamat' => $key[0]['alamat'],
        'kabupaten' => $key[0]['kabupaten'],
        'provinsi' => $key[0]['provinsi'],
        'jumlah_sdm' => $key[0]['jumlah_sdm'],
        'sektor_ekonomi' => $key[0]['sektor_ekonomi'],
        'produk_utama' => $key[0]['produk_utama'],
        'produk_lainnya' => $key[0]['produk_lainnya'],
        'total_aset' => $key[0]['total_aset'],
        );

        $this->load->view('admin/print_profil', $data);
        $html = ob_get_contents();
            ob_end_clean();
            
        require_once('./asset1/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Cetak Laporan Profil.pdf', 'D');
    }

    public function cetak(){
        ob_start();
        $data_kelembagaan = $this->Laporan->data_kelembagaan_print();
        $data_keuangan = $this->Laporan->data_keuangan_print();
        $data_produksi = $this->Laporan->data_produksi_print();
        $data_pemasaran = $this->Laporan->data_pemasaran_print();
        $data['data_kelembagaan_hasil'] = array (
            'nama_umkm' => $data_kelembagaan[0]->nama_umkm,
            'tanggal' => $data_kelembagaan[0]->tanggal,
            'legalitas_usaha' => $data_kelembagaan[0]->legalitas_usaha,
            'struktur_organisasi' => $data_kelembagaan[0]->struktur_organisasi,
        );
        $data['data_keuangan_hasil'] = array(
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
        $data['data_produksi_hasil'] = array(
            'k_produksi' => $data_produksi[0]->produksi_nama,
            'bahan_baku' => $data_produksi[0]->bahan_baku,
            'proses' => $data_produksi[0]->proses,
            'izin' => $data_produksi[0]->izin,
            'kurasi' => $data_produksi[0]->kurasi,
        );
        $data['data_pemasaran_hasil'] = array(
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

      public function cetak_triwulan(){
        ob_start();
        $data_kelembagaan = $this->Laporan->data_kelembagaan_print_triwulan();
        $data_keuangan = $this->Laporan->data_keuangan_print();
        $data_produksi = $this->Laporan->data_produksi_print();
        $data_pemasaran = $this->Laporan->data_pemasaran_print();
        $data['data_kelembagaan_hasil'] = array (
            'nama_umkm' => $data_kelembagaan[0]->nama_umkm,
            'tanggal' => $data_kelembagaan[0]->tanggal,
            'legalitas_usaha' => $data_kelembagaan[0]->legalitas_usaha,
            'struktur_organisasi' => $data_kelembagaan[0]->struktur_organisasi,
        );
        $data['data_keuangan_hasil'] = array(
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
        $data['data_produksi_hasil'] = array(
            'k_produksi' => $data_produksi[0]->produksi_nama,
            'bahan_baku' => $data_produksi[0]->bahan_baku,
            'proses' => $data_produksi[0]->proses,
            'izin' => $data_produksi[0]->izin,
            'kurasi' => $data_produksi[0]->kurasi,
        );
        $data['data_pemasaran_hasil'] = array(
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

      public function cetak_excel(){
        ob_start();
        $data_kelembagaan = $this->Laporan->data_kelembagaan_print();
        $data_keuangan = $this->Laporan->data_keuangan_print();
        $data_produksi = $this->Laporan->data_produksi_print();
        $data_pemasaran = $this->Laporan->data_pemasaran_print();
        $data['data_kelembagaan_hasil'] = array (
            'nama_umkm' => $data_kelembagaan[0]->nama_umkm,
            'tanggal' => $data_kelembagaan[0]->tanggal,
            'legalitas_usaha' => $data_kelembagaan[0]->legalitas_usaha,
            'struktur_organisasi' => $data_kelembagaan[0]->struktur_organisasi,
        );
        $data['data_keuangan_hasil'] = array(
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
        $data['data_produksi_hasil'] = array(
            'k_produksi' => $data_produksi[0]->produksi_nama,
            'bahan_baku' => $data_produksi[0]->bahan_baku,
            'proses' => $data_produksi[0]->proses,
            'izin' => $data_produksi[0]->izin,
            'kurasi' => $data_produksi[0]->kurasi,
        );
        $data['data_pemasaran_hasil'] = array(
            'omzet' => $data_pemasaran[0]->omzet,
            'pasar' => $data_pemasaran[0]->pasar,
            'internet' => $data_pemasaran[0]->internet,
            'penjualan' => $data_pemasaran[0]->penjualan,
            'nominal' => $data_pemasaran[0]->nominal_penjualan,
            'kontrak' => $data_pemasaran[0]->kontrak,
        );

        $this->load->view('admin/print_excel', $data);
      }

      
       public function cetak_full(){
        ob_start();
        $data['data_kelembagaan'] = $this->Laporan->data_kelembagaan_print_full();
        $data['data_keuangan'] = $this->Laporan->data_keuangan_print_full();
        $data['data_produksi'] = $this->Laporan->data_produksi_print_full();
        $data['data_pemasaran'] = $this->Laporan->data_pemasaran_print_full();
        $data['umkm'] = $this->Laporan->get_namaumkm();
        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');
        $this->load->view('admin/print_full', $data);
        $html = ob_get_contents();
            ob_end_clean();
            
        require_once('./asset1/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Cetak Laporan.pdf', 'D');
      }

      public function v_cetaklaporan ($ID)
      {
        $data['ID'] = $ID;

        $this->load->view('admin/beranda');
        $this->load->view('admin/view_cetaklaporan', $data);
      }

      public function v_cetakexcel ($ID)
      {
        $data['ID'] = $ID;

        $this->load->view('admin/beranda');
        $this->load->view('admin/view_cetakexcel', $data);
      }

      public function cetaklaporanfull ()
      {

        $this->load->view('admin/beranda');
        $this->load->view('admin/v_printfull');
      }

	
}