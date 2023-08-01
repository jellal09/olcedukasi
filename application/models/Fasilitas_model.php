<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('fasilitas');
    $this->db->order_by('id_fasilitas', 'ASC');
    $query = $this->db->get();
    return $query->result();
  }

  public function tambah($data)
  {
    return $this->db->insert('fasilitas', $data);
  }

  public function edit($data, $id)
  {
    return $this->db->where('id_fasilitas', $id)->update('fasilitas', $data);
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from('fasilitas');
    $this->db->where('id_fasilitas', $id);
    $query = $this->db->get();
    return $query;
  }

  public function hapus($id)
  {
    $this->db->where('id_fasilitas', $id);
    $this->db->delete('fasilitas');
  }
}