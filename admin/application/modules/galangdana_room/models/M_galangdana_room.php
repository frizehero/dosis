<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galangdana_room extends CI_Model {

	function tampil()
	{
		return $this->db->get('galangdana_room')->result();
	}

	function tambah()
	{
		$nama 				= $this->input->post('nama');
		$galangdana 		= $this->input->post('galangdana');
		$jumlah				= $this->input->post('jumlah');
		$deskripsi			= $this->input->post('deskripsi');

				$data = array(
					'nama_room'				=> $nama,
					'galangdana'			=> $galangdana,
					'jumlah_room'			=> $jumlah,
					'deskripsi_room'		=> $deskripsi,
				);
				$this->db->insert('galangdana_room', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_gld_room',$idnya);
    	return $this->db->get('galangdana_room')->row_array();
	}



	function edit()
	{
		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$galangdana 	= $this->input->post('galangdana');
		$jumlah			= $this->input->post('jumlah');
		$deskripsi		= $this->input->post('deskripsi');

				$data = array(
					'nama_room'			=> $nama,
					'galangdana'		=> $galangdana,
					'jumlah_room'		=> $jumlah,
					'deskripsi_room'	=> $deskripsi,
				);
				$this->db->where('id_gld_room',$id)->update('galangdana_room', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_gld_room', $id)->delete('galangdana_room');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}