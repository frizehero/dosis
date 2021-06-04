<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_profil2 extends CI_Model {

	function tampil()
	{
		return $this->db->get('edit_profil')->result();
	}

	function tambah()
	{
			$foto_profil		= $this->input->post('foto_profil');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username		= $this->input->post('username');
			$email     = $this->input->post('email');
			$jenis_kelamin     = $this->input->post('jenis_kelamin');
			$provinsi     = $this->input->post('provinsi');
			$kota     = $this->input->post('kota');
			$kecamatan     = $this->input->post('kecamatan');
			$desa     = $this->input->post('desa');
			$alamat     = $this->input->post('alamat');
			$kode_pos     = $this->input->post('kode_pos');
			$no_wa	    = $this->input->post('no_wa');
			$no_telepon   = $this->input->post('no_telepon');
			$instagram 		= $this->input->post('instagram');
			$facebook   = $this->input->post('facebook');
			$twitter 		= $this->input->post('twitter');

				$data = array(
					'foto_profil'		=> $gbr['file_name'],
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
					'jenis_kelamin'		=> $jenis_kelamin,
					'provinsi'		=> $provinsi,
					'kota'		=> $kota,
					'kecamatan'		=> $kecamatan,
					'desa'		=> $desa,
					'alamat'		=> $alamat,
					'kode_pos'		=> $kode_pos,
					'no_wa'		=> $no_wa,
					'no_telepon'		=> $no_telepon,
					'instagram'		=> $instagram,
					'facebook'		=> $facebook,
					'twitter'		=> $twitter,
				);
				$this->db->insert('edit_profil', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_edit_profil',$idnya);
    	return $this->db->get('edit_profil')->row_array();
	}



	function edit()
	{
			$foto_profil		= $this->input->post('foto_profil');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username		= $this->input->post('username');
			$email     = $this->input->post('email');
			$jenis_kelamin     = $this->input->post('jenis_kelamin');
			$provinsi     = $this->input->post('provinsi');
			$kota     = $this->input->post('kota');
			$kecamatan     = $this->input->post('kecamatan');
			$desa     = $this->input->post('desa');
			$alamat     = $this->input->post('alamat');
			$kode_pos     = $this->input->post('kode_pos');
			$no_wa	    = $this->input->post('no_wa');
			$no_telepon   = $this->input->post('no_telepon');
			$instagram 		= $this->input->post('instagram');
			$facebook   = $this->input->post('facebook');
			$twitter 		= $this->input->post('twitter');

				$data = array(
					'foto_profil'		=> $gbr['file_name'],
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
					'jenis_kelamin'		=> $jenis_kelamin,
					'provinsi'		=> $provinsi,
					'kota'		=> $kota,
					'kecamatan'		=> $kecamatan,
					'desa'		=> $desa,
					'alamat'		=> $alamat,
					'kode_pos'		=> $kode_pos,
					'no_wa'		=> $no_wa,
					'no_telepon'		=> $no_telepon,
					'instagram'		=> $instagram,
					'facebook'		=> $facebook,
					'twitter'		=> $twitter,
				);
				$this->db->where('id_edit_profil',$id)->update('edit_profil', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_edit_profil', $id)->delete('edit_profil2');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}