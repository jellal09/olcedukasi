<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->order_by('id_alumni', 'ASC');
    $query = $this->db->get();
    return $query->result();
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from('alumni');
    $this->db->where('id_alumni', $id);
    $query = $this->db->get();
    return $query;
  }

  public function edit($data, $id)
  {
    return $this->db->where('id_alumni', $id)->update('alumni', $data);
  }

  public function tambah($data)
  {
    return $this->db->insert('alumni', $data);
  }

  public function hapus($id)
  {
    $this->db->where('id_alumni', $id);
    $this->db->delete('alumni');
  }
}