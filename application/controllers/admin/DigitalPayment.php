<?php 
class DigitalPayment extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

        if($this->session->userdata('NIP') == null) {
            redirect('admin/Login/index');
        }
    }

    public function cetak () {
        $this->load->model('Laporan');

        $data = $this->Laporan->get_digitalpayment();
        $data = array('data' => $data);

        $this->load->view('admin/beranda');
        $this->load->view('admin/digitalpayment', $data);
    }

    public function v_tambah () {
        $this->load->view('admin/beranda');
        $this->load->view('admin/add_payment');
    }

    public function tambah () {
        $this->load->model('global_model');
        $data = array (
            'id_transaksi_sub_sub' => $this->input->post('id_transaksi_sub_sub'),
            'name' => $this->input->post('name'),
        );

        $data = $this->global_model->Insert('transaksi_sub_sub_sub', $data);
        redirect('http://localhost/surveyumkm/index.php/admin/DigitalPayment/cetak');

    }

    public function delete ($id) {
        $id = array('id' => $id);
        $this->load->model('global_model');
        $this->global_model->Delete('transaksi_sub_sub_sub', $id);
        redirect(base_url('index.php/admin/DigitalPayment/cetak'),'refresh');
    }

    public function v_edit ($id) {
        $this->load->model('global_model');
        $key = $this->global_model->GetWhere('transaksi_sub_sub_sub', array('id' => $id));
        $data = array(
            'id' => $key[0]['id'],
            'name' => $key[0]['name'],
        );
        $this->load->view('admin/beranda');
        $this->load->view('admin/edit_payment', $data); 
    }

    public function update () {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $data = array(
            'id' => $id,
            'name' => $name,
        );

        $where = array (
            'id' => $id,
        );
        $this->load->model('global_model');
        $res = $this->global_model->Update('transaksi_sub_sub_sub', $data, $where);
        if ($res>0) {
        redirect('admin/DigitalPayment/cetak','refresh');
    }
    }
}