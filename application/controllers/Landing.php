<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('konfigurasi_model');
    $this->load->model('program_model');
    $this->load->model('fasilitas_model');
    $this->load->model('alumni_model');
  }

  public function index()
  {
    $konfigurasi = $this->konfigurasi_model->listing();
    $program = $this->program_model->listing();
    $fasilitas = $this->fasilitas_model->listing();
    $alumni = $this->alumni_model->listing();
    $data = [
      'title' => 'OLC Edukasi',
      'konfigurasi' => $konfigurasi,
      'program' => $program,
      'fasilitas' => $fasilitas,
      'alumni' => $alumni,
      // 'isi' => 'landing/landing'
    ];
    $this->load->view('landing/landing', $data);
  }
}