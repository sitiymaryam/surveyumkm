<?php

class Verifikasi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

	public function cetak_verif() {
		$this->load->model('global_model');
        $data = $this->global_model->GetData('registrasi');
        $data = array('data' => $data);
        $data['page'] = 'admin/verifikasi';
		$this->load->view('admin/beranda');
		$this->load->view('admin/verifikasi', $data);
	}

	public function detail_verif($id) {
    $this->load->model('global_model');
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

    $data['page'] = 'admin/detail_verif';
    $this->load->view('admin/beranda');
    $this->load->view('admin/detail_verif', $data); 
    }

    public function detail_email($id) {
    $this->load->model('global_model');
    $key = $this->global_model->GetWhere('registrasi', array('ID' => $id));
    $data = array(
        'ID' => $key[0]['ID'],
        'email' => $key[0]['email'],
        );
    $data['page'] = 'admin/detail_email';
    $this->load->view('admin/beranda');
    $this->load->view('admin/verif_email', $data); 
    }

    public function update_email () {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = array(
            'id' => $id,
            'email' => $email,
            'username' => $username,
            'password' => $password,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('registrasi', $data, $where);
        $this->email($email, $username, $password);
        if ($res>0) {
        redirect('admin/Verifikasi/cetak_verif','refresh');
    }
    }

    public function delete_data($id)
    {
    $id = array('ID' => $id);
    $this->load->model('global_model');
    $this->global_model->Delete('registrasi', $id);
    redirect(base_url('index.php/admin/Verifikasi/cetak_verif'),'refresh');
    }



    public function email($email_tujuan, $user, $pass)
    {
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'sitimaryam.razaq@gmail.com',  // Email gmail
            'smtp_pass'   => 'ragilbaik',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('sitimaryam.razaq@gmail.com', 'Siti Maryam');

        // Email penerima
        $this->email->to($email_tujuan); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('');

        // Subject email
        $this->email->subject('Kirim Email dengan SMTP Gmail CodeIgniter | MasRud.com');

        // Isi email
        $this->email->message("Ini adalah contoh email yang dikirim menggunakan SMTP Gmail pada CodeIgniter.<br><br> Username =".$user."<br>Password = ".$pass." Klik <strong><a href='https://masrud.com/post/kirim-email-dengan-smtp-gmail' target='_blank' rel='noopener'>disini</a></strong> untuk melihat tutorialnya.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}