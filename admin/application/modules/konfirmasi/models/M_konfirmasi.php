<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konfirmasi extends CI_Model {

	function tampil_data(){
		return $this->db->get('galang_dana2');
	}

	function hapus($id)
	{
		$this->db->where('id_galang_dana2', $id)->delete('galang_dana');
	}

	function cari()
	{
		$cari 		= $this->input->post('cari');
		return $this->db->like('nama_sekolah',$cari)->get('sekolah')->result();
	}
}