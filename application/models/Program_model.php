<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Program_model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicated - symbols
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }

  public function listing()
  {
    $this->db->select('*');
    $this->db->from('program');
    $this->db->order_by('id_program', 'ASC');
    $query = $this->db->get();
    return $query->result();
  }

  public function tambah($data)
  {
    $data['slug_program'] = $this->slugify(strtolower($data['nama_program']));
    return $this->db->insert('program', $data);
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from('program');
    $this->db->where('id_program', $id);
    $query = $this->db->get();
    return $query;
  }

  public function edit($data, $id)
  {
    return $this->db->where('id_program', $id)->update('program', $data);
  }

  public function hapus($id)
  {
    $this->db->where('id_program', $id);
    $this->db->delete('program');
  }

  public function tampil($id_program)
  {
    $this->db->select('*');
    $this->db->from('program');
    $this->db->where('id_program', $id_program);
    $query = $this->db->get();
    return $query->row();
  }

  public function update_hit($hit)
  {
    $this->db->where('id_program', $hit['id_program']);
    $this->db->update('program', $hit);
  }

  public function hits()
  {
    $this->db->select('*');
    $this->db->from('program');
    $this->db->order_by('id_program', 'ASC');
    $this->db->limit(100);
    $query = $this->db->get();
    return $query->result();
  }

  public function read($slug_program)
  {
    $this->db->select('*');
    $this->db->from('program');
    $this->db->where('slug_program', $slug_program);
    $this->db->order_by('id_program', 'ASC');
    $query = $this->db->get();
    return $query->row();
  }

  // TIPE PROGRAM

  public function listTipe()
  {
    $this->db->select('*');
    $this->db->from('tipe');
    $this->db->order_by('id_tipe', 'ASC');
    $query = $this->db->get();
    return $query->result();
  }

  public function tipeTambah($data)
  {
    return $this->db->insert('tipe', $data);
  }

  public function detailEdit($id)
  {
    $this->db->select('*');
    $this->db->from('tipe');
    $this->db->where('id_tipe', $id);
    $query = $this->db->get();
    return $query;
  }

  public function editTipe($data, $id)
  {
    return $this->db->where('id_tipe', $id)->update('tipe', $data);
  }

  public function tipeHapus($id)
  {
    $this->db->where('id_tipe', $id);
    $this->db->delete('tipe');
  }
}