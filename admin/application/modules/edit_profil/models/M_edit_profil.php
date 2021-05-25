<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_profil extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('edit_profil');
		$query = $this->db->get();


		return $query->result();
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('edit_profil');
		$this->db->where('id_edit_profil',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}



	function tambah()
	{

			$foto_profil		= $this->input->post('foto_profil');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username		= $this->input->post('username');
			$email     = $this->input->post('email');
			$alamat     = $this->input->post('alamat');
			$kode_pos		= $this->input->post('kode_pos');
			$no_wa	    = $this->input->post('no_wa');
			$no_telepon   = $this->input->post('no_telepon');
			$instagram 		= $this->input->post('instagram');
			$facebook   = $this->input->post('facebook');
			$twitter 		= $this->input->post('twitter');
		
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/fotoprofil/';
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
					'foto_profil'		=> $foto_profil,
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
					'alamat'		=> $alamat,
					'kode_pos'		=> $kode_pos,
					'no_wa'		=> $no_wa,
					'no_telepon'		=> $no_telepon,
					'instagram'		=> $instagram,
					'facebook'		=> $facebook,
					'twitter'		=> $twitter,
					
					
				);
				$this->db->update('edit_profil', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'foto_profil'		=> $foto_profil,
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
					'alamat'		=> $alamat,
					'kode_pos'		=> $kode_pos,
					'no_wa'		=> $no_wa,
					'no_telepon'		=> $no_telepon,
					'instagram'		=> $instagram,
					'facebook'		=> $facebook,
					'twitter'		=> $twitter,
					
				);
				$this->db->update('edit_profil', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}


	function edit()
	{
		$id = $this->input->post('id');

		$foto_profil		= $this->input->post('foto_profil');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username		= $this->input->post('username');
			$email     = $this->input->post('email');
			$alamat     = $this->input->post('alamat');
			$kode_pos		= $this->input->post('kode_pos');
			$no_wa	    = $this->input->post('no_wa');
			$no_telepon   = $this->input->post('no_telepon');
			$instagram 		= $this->input->post('instagram');
			$facebook   = $this->input->post('facebook');
			$twitter 		= $this->input->post('twitter');

		$insert_oleh = date( 'Y-m-d', strtotime($tgl_oleh));
		$insert_buku = date( 'Y-m-d', strtotime($tgl_buku));



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
					'foto_profil'		=> $foto_profil,
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
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
		}
		else{
				$data = array(
					'foto_profil'		=> $foto_profil,
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
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
	}

	

	function hapus($id)
	{
		$id = $this->input->post('id');
		$this->db->where('id_edit_profil', $id)->delete('edit_profil');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}
}