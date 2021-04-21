<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {

	function tampil()
	{
		return $this->db->get('pembayaran')->result();
	}

	function tambah()
	{
		$id_pembayaran 		= $this->input->post('id_pembayaran');
		$nominal_donasi		= $this->input->post('nominal_donasi');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$tgl_pembayaran	    = $this->input->post('tgl_pembayaran');
		$nama_rekening		= $this->input->post('nama_rekening');
		$bukti_pembayaran   = $this->input->post('bukti_pembayaran ');
		$pesan_kesan 		= $this->input->post('pesan_kesan');

				$data = array(
					'id_pembayaran'		=> $id_pembayaran,
					'nominal_donasi'	=> $nominal_donasi,
					'nama_lengkap'      => $nama_lengkap,
					'tgl_pembayaran'    => $tgl_pembayaran,
					'nama_rekening'     => $nama_rekening,
					'no_rekening'       => $no_rekening,
					'bukti_pembayaran' 	=> $gbr['bukti_pembayaran'],
					'pesan_kesan'       => $pesan_kesan,
				);
				$this->db->insert('pembayaran', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_inv_room',$idnya);
    	return $this->db->get('inventory_room')->row_array();
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
				$this->db->where('id_inv_room',$id)->update('inventory_room', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_inv_room', $id)->delete('inventory_room');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}