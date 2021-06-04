<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konfirmasi extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('pembayaran2');
		$query = $this->db->get();

		return $query->result();
	}

	function tampilpostingan()
	{
		$this->db->select('*');
		$this->db->from('galang_dana2');
		$query = $this->db->get();

		return $query->result();
	}
	

	function hapus($id)
	{
		$this->db->where('id_galang_dana2', $id)->delete('galang_dana');
	}

	function hapus2()
	{
		$id 		= $this->input->post('id');

		$this->db->where('id_pembayaran', $id)->delete('pembayaran2');
	}


	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}