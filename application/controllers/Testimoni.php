<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('testimoni_model');
        $this->load->model('konfigurasi_model');
        // $this->load->model('kategori_download_model');
    }
    // Main page
    public function index()
    {
        $alumni = $this->testimoni_model->tampil();
        $data = array(
            'title' => 'Halaman Testimoni',
            'alumni' => $alumni,
            'isi' => 'testimoni/testimoni'
        );
        $this->load->view('layout/wrapper', $data);
    }
}