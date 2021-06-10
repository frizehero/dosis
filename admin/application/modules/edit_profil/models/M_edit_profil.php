<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_profil extends CI_Model {

	function tampil()
	{
		$this->db->select('*');
		$this->db->from('edit_profil');
		$query = $this->db->get();
		$this->db->join('wilayah_provinsi', 'edit_profil.wilayah_provinsi = wilayah_provinsi.id');
		$this->db->join('wilayah_kabupaten', 'edit_profil.wilayah_kabupaten = wilayah_kabupaten.id');
		$this->db->join('wilayah_kecamatan', 'edit_profil.wilayah_kecamatan = wilayah_kecamatan.id');
		$this->db->join('wilayah_desa', 'edit_profil.wilayah_desa = wilayah_desa.id');


		return $query->result();
	}

	function tampiledit()
	{
		$idnya=decrypt_url();

		$this->db->select('*');
		$this->db->from('edit_profil');
		$this->db->where('id_edit_profil',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function provinsi()
	{	
		
		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();
		return $get_prov->result();
	}

	function tambah()
	{

			$foto_profil		= $this->input->post('foto_profil');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username		= $this->input->post('username');
			$email     = $this->input->post('email');
			$jenis_kelamin     = $this->input->post('jenis_kelamin');
			$wilayah_provinsi     = $this->input->post('wilayah_provinsi');
			$wilayah_kabupaten     = $this->input->post('wilayah_kabupaten');
			$wilayah_kecamatan     = $this->input->post('wilayah_kecamatan');
			$wilayah_desa     = $this->input->post('wilayah_desa');
			$alamat     = $this->input->post('alamat');
			$kode_pos     = $this->input->post('kode_pos');
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
					'foto_profil'		=> $gbr['file_name'],
					'nama_lengkap'		=> $nama_lengkap,
					'username'		=> $username,
					'email'		=> $email,
					'jenis_kelamin'		=> $jenis_kelamin,
					'wilayah_provinsi'		=> $wilayah_provinsi,
					'wilayah_kabupaten'		=> $wilayah_kabupaten,
					'wilayah_kecamatan'		=> $wilayah_kecamatan,
					'wilayah_desa'		=> $wilayah_desa,
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
					'jenis_kelamin'		=> $jenis_kelamin,
					'wilayah_provinsi'		=> $wilayah_provinsi,
					'wilayah_kabupaten'		=> $wilayah_kabupaten,
					'wilayah_kecamatan'		=> $wilayah_kecamatan,
					'wilayah_desa'		=> $wilayah_desa,
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



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/fotoprofil/';
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
		}
		else{
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
				$this->db->where('id_inv_peralatan',$id)->update('inv_peralatan', $data);
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