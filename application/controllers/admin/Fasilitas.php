<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('fasilitas_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  }

  public function index()
  {
    $fasilitas = $this->fasilitas_model->listing();
    $data = [
      'title' => 'Data Fasilitas',
      'fasilitas' => $fasilitas,
      'isi' => 'admin/fasilitas/list'
    ];
    $this->load->view('admin/layout/wrapper', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'Tambah Fasilitas',
      'isi' => 'admin/fasilitas/tambah'
    ];
    $this->load->view('admin/layout/wrapper', $data);
  }

  public function tambahAksi()
  {
    $nama_fasilitas = $this->input->post('nama_fasilitas');
    $gambar = $_FILES['gambar']['name'];

    $config['upload_path'] = './assets/upload/image';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 10000;

    $this->load->library('upload', $config);

    if ($gambar) {
      if ($this->upload->do_upload('gambar')) {
        $data = [
          'nama_fasilitas' => $nama_fasilitas,
          'gambar' => preg_replace("/\s+/", "_", $gambar),
        ];

        $this->fasilitas_model->tambah($data);
        redirect('admin/fasilitas', $data);
      }
    }
  }

  public function edit($id)
  {
    $fasilitas = $this->fasilitas_model->detail($id)->row();
    $data = [
      'title' => 'Edit Fasilitas',
      'fasilitas' => $fasilitas,
      'isi' => 'admin/fasilitas/edit'
    ];
    $this->load->view('admin/layout/wrapper', $data);
  }

  public function editAksi($id)
  {
    $nama_fasilitas = $this->input->post('nama_fasilitas');
    $gambar = $_FILES['gambar']['name'];

    $config['upload_path'] = './assets/upload/image';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 10000;

    $this->load->library('upload', $config);

    if ($gambar) {
      if ($this->upload->do_upload('gambar')) {
        $data = [
          'nama_fasilitas' => $nama_fasilitas,
          'gambar' => preg_replace("/\s+/", "_", $gambar)
        ];

        $this->fasilitas_model->edit($data, $id);
        redirect('admin/fasilitas', $data);
      }
    }
  }

  public function hapus($id)
  {
    $this->fasilitas_model->hapus($id);
    redirect('admin/fasilitas');
  }
}