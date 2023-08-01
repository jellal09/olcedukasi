<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

    // Load database
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Daftar_model');
        // $this->load->model('kategori_download_model');
    }

    // Main page
    public function index()
    {
        $site = $this->konfigurasi_model->listing();
        //    $testimoni   = $this->testimoni_model->testimoni() ;
        // End paginasi

        $data = array(
            'title' => 'Daftar - ' . $site->namaweb,
            'deskripsi' => 'Daftar - ' . $site->namaweb,
            'keywords' => 'Daftar - ' . $site->namaweb,
            //    'testimoni'  => $testimoni,
            'site' => $site,
            'isi' => 'daftar/daftar'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}

/* End of file Download.php */
/* Location: ./application/controllers/Download.php */