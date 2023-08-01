<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('program_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  }

  public function index()
  {
    $alumni = $this->program_model->listing();
    $data = [
      'title' => 'Data Program',
      'program' => $alumni,
      'isi' => 'admin/program/list'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function tambah()
  {
    $data = array(
      'title' => 'Tambah Program',
      'isi' => 'admin/program/tambah'
    );
    $this->load->view('admin/layout/wrapper', $data);
  }

  public function tambahAksi()
  {
    // $nama_tipe = $this->input->post('id_tipe');
    $nama_program = $this->input->post('nama_program');
    $keterangan = $this->input->post('keterangan');
    $jenis = $this->input->post('jenis');
    $data = array(
      // 'id_tipe' => $nama_tipe,
      'nama_program' => $nama_program,
      'keterangan' => $keterangan,
      'jenis' => $jenis,
    );

    $this->program_model->tambah($data);
    redirect('admin/program', $data);
  }

  public function edit($id)
  {
    $program = $this->program_model->detail($id)->row();
    $data = [
      'title' => 'Edit Data Program',
      'program' => $program,
      'isi' => 'admin/program/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function editAksi($id)
  {
    // $nama_tipe = $this->input->post('id_tipe');
    $nama_program = $this->input->post('nama_program');
    $keterangan = $this->input->post('keterangan');
    $jenis = $this->input->post('jenis');
    $data = [
      // 'id_tipe' => $nama_tipe,
      'nama_program' => $nama_program,
      'keterangan' => $keterangan,
      'jenis' => $jenis,
    ];

    $this->program_model->edit($data, $id);
    redirect('admin/program');
  }

  public function hapus($id)
  {
    $this->program_model->hapus($id);
    redirect('admin/program');
  }
}