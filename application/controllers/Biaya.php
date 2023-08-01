<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biaya extends CI_Controller {

    // Load database
    public function __construct()
    {
        parent::__construct();
       $this->load->model('biaya_model');
      // $this->load->model('kategori_download_model');
   }

    // Main page
    public function index() {
        $site   = $this->konfigurasi_model->listing();
    //    $testimoni   = $this->testimoni_model->testimoni() ;
        // End paginasi

        $data = array(  'title'     => 'Biaya - '.$site->namaweb,
                        'deskripsi' => 'Biaya - '.$site->namaweb,
                        'keywords'  => 'Biaya - '.$site->namaweb,
                    //    'testimoni'  => $testimoni,
                        'site'      => $site,
                        'isi'       => 'biaya/biaya');
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    // Kategori
    public function kategori($slug_kategori_download)   {
        $site                   = $this->konfigurasi_model->listing();
   //     $kategori_download      = $this->kategori_download_model->read($slug_kategori_download);

        // if(count(array($kategori_download) < 1)) {
        //  redirect(base_url('oops'),'refresh');
        // }

        $id_kategori_download   = $kategori_download->id_kategori_download;

        

        $download               = $this->download_model->kategori($id_kategori_download);

        $data = array(  'title'             => 'Kategori download: '.
                                                $kategori_download->nama_kategori_download,
                        'deskripsi'         => 'Kategori download: '.
                                                $kategori_download->nama_kategori_download,
                        'keywords'          => 'Kategori download: '.
                                                $kategori_download->nama_kategori_download,
                        'download'          => $download,
                        'site'              => $site,
                        'kategori_download' => $kategori_download,
                        'isi'       => 'download/list');
        $this->load->view('layout/wrapper', $data, FALSE);
    }

 

 
}

/* End of file Download.php */
/* Location: ./application/controllers/Download.php */