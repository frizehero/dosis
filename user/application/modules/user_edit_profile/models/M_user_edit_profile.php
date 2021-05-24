<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_edit_profile extends CI_Model {

	function tampil()
	{
		return $this->db->get('user_edit_profile')->result();
	}

	function tambah()
	{
		$nama 				= $this->input->post('nama');
		$email				= $this->input->post('email');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$no_telepon			= $this->input->post('no_telepon');
		$no_whatsapp		= $this->input->post('no_whatsapp');
		$alamat_lengkap		= $this->input->post('alamat_lengkap');
		$provinsi			= $this->input->post('provinsi');
		$kota_kabupaten		= $this->input->post('kota_kabupaten');
		$kecamatan			= $this->input->post('kecamatan');
		$kelurahan			= $this->input->post('kelurahan');
		$kode_pos			= $this->input->post('kode_pos');
		$facebook			= $this->input->post('facebook');
		$instagram			= $this->input->post('instagram');
		$twitter			= $this->input->post('twitter');

				$data = array(
					'nama'			=> $nama,
					'email'			=> $email,
					'jenis_kelamin'	=> $jenis_kelamin,
					'no_telepon'	=> $no_whatsapp,
					'no_whatsapp'	=> $no_whatsapp,
					'alamat_lengkap'=> $alamat_lengkap,
					'provinsi'		=> $provinsi,
					'kota_kabupaten'=> $kota_kabupaten,
					'kecamatan'		=> $kecamatan,
					'kelurahan'		=> $kelurahan,
					'kode_pos'		=> $kode_pos,
					'facebook'		=> $facebook,
					'instagram'		=> $instagram,
					'twitter'		=> $twitter,

				);
				$this->db->update('user_edit_profile', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_user_edit_profile',$idnya);
    	return $this->db->get('user_edit_profile')->row_array();
	}



	function edit()
	{
		$nama 				= $this->input->post('nama');
		$email				= $this->input->post('email');
		$jenis_kelamin		= $this->input->post('jenis_kelamin');
		$no_telepon			= $this->input->post('no_telepon');
		$no_whatsapp		= $this->input->post('no_whatsapp');
		$alamat_lengkap		= $this->input->post('alamat_lengkap');
		$provinsi			= $this->input->post('provinsi');
		$kota_kabupaten		= $this->input->post('kota_kabupaten');
		$kecamatan			= $this->input->post('kecamatan');
		$kelurahan			= $this->input->post('kelurahan');
		$kode_pos			= $this->input->post('kode_pos');
		$facebook			= $this->input->post('facebook');
		$instagram			= $this->input->post('instagram');
		$twitter			= $this->input->post('twitter');

				$data = array(
					'nama'			=> $nama,
					'email'			=> $email,
					'jenis_kelamin'	=> $jenis_kelamin,
					'no_telepon'	=> $no_telepon,
					'no_whatsapp'	=> $no_whatsapp,
					'alamat_lengkap'=> $alamat_lengkap,
					'provinsi'		=> $provinsi,
					'kota_kabupaten'=> $kota_kabupaten,
					'kecamatan'		=> $kecamatan,
					'kelurahan'		=> $kelurahan,
					'kode_pos'		=> $kode,
					'facebook'		=> $facebook,
					'instagram'		=> $instagram,
					'twitter'		=> $twitter,

				);
				$this->db->where('id_user_edit_profile',$id)->update('user_edit_profile', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_user_edit_profile', $id)->delete('user_edit_profile');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}