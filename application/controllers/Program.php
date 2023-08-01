<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('program_model');
  }

  public function program($nama_program)
  {
    $program = $this->program_model->read($nama_program);
    $profil = $this->nav_model->nav_program();

    if (count(array($program)) < 1) {
      redirect(base_url('oops'), 'refresh');
    }

    // Update hit
    if ($program) {
      $newhits = $program->hits + 1;
      $hit = array(
        'id_program' => $program->id_program,
        'hits' => $newhits
      );
      $this->program_model->update_hit($hit);
    }
    //  End update hit

    $data = array(
      'title' => 'Halaman Program',
      'program' => $program,
      // 'site' => $site,
      'listing' => $profil,
      'isi' => 'program/program'
    );
    $this->load->view('layout/wrapper', $data);
  }

  public function reguler()
  {
    $data = [
      'title' => 'Program Reguler',
      'isi' => 'program/reguler'
    ];
    $this->load->view('layout/wrapper', $data);
  }

}