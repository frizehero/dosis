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
		$this->db->where('id_edit_profil',$idnya);
    	return $this->db->get('edit_profil')->row_array();
	}

	function tampilprovinsi($id)
	{
	
		$this->db->select('*,wilayah_provinsi.nama AS provinsi, wilayah_kabupaten.nama AS kota_kab, wilayah_kecamatan.nama AS kecamatan, wilayah_desa.nama AS kelurahan');
		$this->db->from('edit_profil');
		$this->db->join('wilayah_provinsi','edit_profil.provinsi_sekolah = wilayah_provinsi.id');
		$this->db->join('wilayah_kabupaten','edit_profil.kota_kab_sekolah = wilayah_kabupaten.id');
		$this->db->join('wilayah_kecamatan','edit_profil.kec_sekolah = wilayah_kecamatan.id');
		$this->db->join('wilayah_desa','edit_profil.kel_sekolah = wilayah_desa.id');
		$this->db->where('id_edit_profil',$id);
		$query = $this->db->get();
    	return $query->result();
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
			$provinsi     = $this->input->post('provinsi');
			$kabupaten     = $this->input->post('kabupaten');
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
					'provinsi'		=> $provinsi,
					'kabupaten'		=> $kabupaten,
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
					'provinsi'		=> $provinsi,
					'kabupaten'		=> $kabupaten,
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
			$kabupaten     = $this->input->post('kabupaten');
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
					'kabupaten'		=> $kabupaten,
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
					'kabupaten'		=> $kabupaten,
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
	

	function hapus($id)
	{
		$id = $this->input->post('id');
		$this->db->where('id_edit_profil', $id)->delete('edit_profil');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}
}