<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hasan_tabel extends CI_Model {

	function tampil()
	{
		return $this->db->get('hasan_tabel')->result();
	}

	function tambah()
	{
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');
		$pj			= $this->input->post('pj');
		$keterangan	= $this->input->post('ket');

				$data = array(
					'kode_tabel'		=> $kode,
					'nama_tabel'		=> $nama,
					'pj_tabel'		=> $pj,
					'ket_tabel'		=> $keterangan,
				);
				$this->db->insert('hasan_tabel', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_hsn_tabel',$idnya);
    	return $this->db->get('hasan_tabel')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');
		$pj			= $this->input->post('pj');
		$keterangan	= $this->input->post('ket');

				$data = array(
					'kode_tabel'		=> $kode,
					'nama_tabel'		=> $nama,
					'pj_tabel'		=> $pj,
					'ket_tabel'		=> $keterangan,
				);
				$this->db->where('id_hsn_tabel',$id)->update('hasan_tabel', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_hsn_tabel', $id)->delete('hasan_tabel');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}