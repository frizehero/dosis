<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donasi_saya extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('galang_dana2');
		$query = $this->db->get();

		return $query->result();
	}

	function hapus($id)
	{
		$this->db->where('id_sekolah', $id)->delete('sekolah');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}