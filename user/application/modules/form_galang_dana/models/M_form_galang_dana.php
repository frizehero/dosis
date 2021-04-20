<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_form_galang_dana extends CI_Model {

	function tampil()
	{
		return $this->db->get('form_galang_dana')->result();
	}

	function tambah()
	{
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');
		$pj			= $this->input->post('pj');
		$keterangan	= $this->input->post('ket');

				$data = array(
					'kode_room'		=> $kode,
					'nama_room'		=> $nama,
					'pj_room'		=> $pj,
					'ket_room'		=> $keterangan,
				);
				$this->db->insert('form_galang_dana', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_inv_room',$idnya);
    	return $this->db->get('form_galang_dana')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$kode 		= $this->input->post('kode');
		$nama 		= $this->input->post('nama');
		$pj			= $this->input->post('pj');
		$keterangan	= $this->input->post('ket');

				$data = array(
					'kode_room'		=> $kode,
					'nama_room'		=> $nama,
					'pj_room'		=> $pj,
					'ket_room'		=> $keterangan,
				);
				$this->db->where('id_inv_room',$id)->update('form_galang_dana', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_inv_room', $id)->delete('form_galang_dana');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}