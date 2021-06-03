<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user_edit_profile extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('user_edit_profile');
		$query = $this->db->get();


		return $query->result();
	}

	function tambah()
	{
		$foto_profilenya   	= $this->input->post('foto_profilenya');
		$nama_lengkap 		= $this->input->post('nama_lengkap');
		$emailnya 			= $this->input->post('emailnya');
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
		
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/edit_profil_user/';
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
					
					'foto_profilenya'=> $gbr['file_name'],
					'nama_lengkap'	=> $nama_lengkap,
					'emailnya'		=> $emailnya,
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
		}
		else{
				$data = array(
					'foto_profilenya'=> 'kosong.jpeg',
					'nama_lengkap'	=> $nama_lengkap,
					'emailnya'		=> $emailnya,
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
	}
	
	
	function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('user_edit_profile');
		$this->db->where('id_user_edit_profile',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function edit()
	{
		$foto_profilenya   	= $this->input->post('foto_profilenya');
		$nama_lengkap 		= $this->input->post('nama_lengkap');
		$emailnya 			= $this->input->post('emailnya');
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
		
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/edit_profil_user/';
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
					
					'foto_profilenya'=> $gbr['file_name'],
					'nama_lengkap'	=> $nama_lengkap,
					'emailnya'		=> $emailnya,
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
				$this->session->set_flashdata('msg', 'suksesedit');
			}
		}
		else{
				$data = array(
					'foto_profilenya'=> 'kosong.jpeg',
					'nama_lengkap'	=> $nama_lengkap,
					'emailnya'		=> $emailnya,
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
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}


	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_user_edit_profile', $id)->delete('user_edit_profile');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}