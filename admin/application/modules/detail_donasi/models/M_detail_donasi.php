<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_donasi extends CI_Model {

	function tampil()
	{

		$this->db->select('*');
		$this->db->from('detail_donasi');
		$query = $this->db->get();




		return $query->result();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('detail_donasi');
		$this->db->where('id_detail_donasi',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function tambah()
	{
		$deskripsi_peristiwa 		= $this->input->post('deskripsi_peristiwa');
		$dokumentasi_peristiwa2 	= $this->input->post('dokumentasi_peristiwa2');
		$dokumentasi_peristiwa3 	= $this->input->post('dokumentasi_peristiwa3');
		$tgl_dibuat					= $this->input->post('tgl_dibuat');

		$insert_awal = date( 'Y-m-d', strtotime($tgl_awal));
		$insert_akhir = date( 'Y-m-d', strtotime($tgl_akhir));



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/galang_dana/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'deskripsi_peristiwa'		=> $deskripsi_peristiwa,
					'dokumentasi_peristiwa2'	=> $gbr['file_name'],
					'dokumentasi_peristiwa3'	=> $dokumentasi_peristiwa3,
					
					
					
				);
				$this->db->insert('detail_donasi', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'deskripsi_peristiwa'		=> $deskripsi_peristiwa,
					'dokumentasi_peristiwa2'	=> 'kosong1.png',
					'dokumentasi_peristiwa3'	=> $dokumentasi_peristiwa3,
					
				);
				$this->db->insert('detail_donasi', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function edit()
	{
		$id_sekolah = $this->input->post('id_sekolah');
		$nama 		= $this->input->post('nama_sekolah');
		$keterangan	= $this->input->post('keterangan');


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/img/';
		$config['allowed_types']	= 'gif|jpg|png|jpeg';
		$config['max_size']			= 5120;
		$config['max_width']		= 4300;
		$config['max_height']		= 4300;
		$config['file_name'] 		= $nmfile;
		
		$this->upload->initialize($config);
		
		if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
				$gbr = $this->upload->data();
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> $gbr['file_name'],
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			}
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