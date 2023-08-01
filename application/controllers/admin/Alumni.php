<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('alumni_model');
    $this->load->model('konfigurasi_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
  }

  public function index()
  {
    $alumni = $this->alumni_model->listing();
    $data = array(
      'title' => 'Alumni',
      'alumni' => $alumni,
      'isi' => 'admin/alumni/list'
    );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function edit($id)
  {
    $alumni = $this->alumni_model->detail($id)->row();
    $data = array(
      'title' => 'Edit Data',
      'alumni' => $alumni,
      'isi' => 'admin/alumni/edit'
    );
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function editAksi($id)
  {
    $nama_alumni = $this->input->post('nama_alumni');
    $lulusan = $this->input->post('lulusan');
    $pesan = $this->input->post('pesan');
    $gambar = $_FILES['gambar']['name'];

    $config['upload_path'] = './assets/upload/image';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 10000;

    $this->load->library('upload', $config);

    if ($gambar) {
      if ($this->upload->do_upload('gambar')) {
        $data = [
          'nama_alumni' => $nama_alumni,
          'lulusan' => $lulusan,
          'pesan' => $pesan,
          'gambar' => preg_replace("/\s+/", "_", $gambar),
        ];

        $update = $this->alumni_model->edit($data, $id);

        if ($update) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
          redirect('admin/alumni', $data);
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data Gagal Diubah</div>');
          redirect('admin/alumni', $data);
        }
      } else {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Upload Gagal, Gambar Tidak Sesuai Format</div>');
        redirect('admin/alumni', $error);
      }
    } else {
      $data = [
        'nama_alumni' => $nama_alumni,
        'lulusan' => $lulusan,
        'pesan' => $pesan,
      ];

      $update = $this->alumni_model->edit($data, $id);

      if ($update) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
        redirect('admin/alumni', $data);
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data Gagal Diubah</div>');
        redirect('admin/alumni', $data);
      }
    }
  }

  public function tambah()
  {
    $data = array(
      'title' => 'Tambah Alumni',
      'isi' => 'admin/alumni/tambah',
    );
    $this->load->view('admin/layout/wrapper', $data);
  }

  public function tambahAksi()
  {
    $nama_alumni = $this->input->post('nama_alumni'); //kolom tambah hama dan penyakit
    $lulusan = $this->input->post('lulusan');
    $pesan = $this->input->post('pesan');
    $gambar = $_FILES['gambar']['name']; //upload gambar

    $config['upload_path'] = './assets/upload/image'; //penyimpanan ga,bar
    $config['allowed_types'] = 'jpg|jpeg|png'; //format gambar
    $config['max_size'] = 10000; //max. ukuran gambar

    $this->load->library('upload', $config); //memanggil library upload

    if ($gambar) {
      if ($this->upload->do_upload('gambar')) {
        $data = [
          'nama_alumni' => $nama_alumni,
          'lulusan' => $lulusan,
          'pesan' => $pesan,
          'gambar' => preg_replace("/\s+/", "_", $gambar),
        ];

        $tambah_data = $this->alumni_model->tambah($data); //memasukkan data ke database

        if ($tambah_data) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>'); //menambahkan flashdata berhasil
          redirect('admin/Alumni', $data);
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>'); //menambahkan flashdata gagal
          redirect('admin/Alumni', $data);
        }
      } else {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Gagal Upload, Gambar tidak sesuai format</div>');
        redirect('admin/Alumni', $error);
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
      redirect('admin/Alumni');
    }
  }

  public function hapus($id)
  {
    $delete = $this->alumni_model->hapus($id);
    if ($delete) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/Alumni');
  }
}