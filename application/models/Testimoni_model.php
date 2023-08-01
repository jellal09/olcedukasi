<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->order_by('id_alumni', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Download_model.php */
/* Location: ./application/models/Download_model.php */