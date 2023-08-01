<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('alumni_model');
  }

  public function index()
  {
    $alumni = $this->alumni_model->listing();
    $data = [
      'title' => 'Alumni',
      'alumni' => $alumni,
      'isi' => 'alumni/alum'
    ];
    $this->load->view('layout/wrapper', $data);
  }
}