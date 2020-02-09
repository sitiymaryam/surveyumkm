<?php

class Register extends CI_Controller {
	public function index () {
		$data['judul'] ="register";
   		$this->load->view('user/header_register', $data);

		$this->load->model('global_model');
        $data['data1'] = $this->global_model->get_sektor();
        $data['data2'] = $this->global_model->get_produk();
        $data['data3'] = $this->global_model->get_kategori();

        $this->load->view('user/register', $data);
	}

	public function sucses_login() {
		$this->load->view('user/success_regis');

	}

	public function insert()
	{
		$this->load->model('global_model');
		$email = $_POST['email'];
		$cek = $this->db->query("select * from registrasi where email='$email'");	
		$jatah = $cek->num_rows();	

		if ($jatah > 0) {
			echo("Hiii gabole email nya samaaaa");

		} else {

		$data = array(
			'email' => $email,
			'nama_umkm' => $this->input->post('nama_umkm'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'kategori_umkm' => $this->input->post('kategori_umkm'),
			'tahun_mulai' => $this->input->post('tahun_mulai'),
			'bulan_mulai' => $this->input->post('bulan_mulai'),
			'tahun_fasilitas' => $this->input->post('tahun_fasilitas'),
			'triwulan_fasilitas' => $this->input->post('triwulan_fasilitas'),
			'nomor_ktp' => $this->input->post('nomor_ktp'),
			'no_npwp'=> $this->input->post('no_npwp'),
			'no_hp' => $this->input->post('no_hp'),
			'alamat' => $this->input->post('alamat'),
			'kabupaten' => $this->input->post('kabupaten'),
			'provinsi' => $this->input->post('provinsi'),
			'jumlah_sdm' => $this->input->post('jumlah_sdm'),
			'sektor_ekonomi' => $this->input->post('sektor_ekonomi'),
			'produk_utama' => $this->input->post('produk_utama'),
			'produk_lainnya' => $this->input->post('produk_lainnya'),
			'total_aset' => $this->input->post('total_aset'),

			);

			$data = $this->global_model->Insert('registrasi', $data);
			redirect('user/Register/sucses_login');
		}
	}
}