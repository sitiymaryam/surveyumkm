<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('Laporan');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
           $data = array(
                'buku' => $this->Laporan->get_namaumkm());
 
           $this->load->view('user/vw_excel',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array(
                'buku' => $this->Laporan->get_namaumkm());
 
           $this->load->view('user/vw_laporanexcel',$data);
      }
 
 }