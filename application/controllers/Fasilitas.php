<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('fasilitas_model');
  }

  public function index()
  {
    $fasilitas = $this->fasilitas_model->listing();
    $data = [
      'title' => 'Fasilitas',
      'fasilitas' => $fasilitas,
      'isi' => 'fasilitas/fasilitas'
    ];
    $this->load->view('layout/wrapper', $data);
  }
}