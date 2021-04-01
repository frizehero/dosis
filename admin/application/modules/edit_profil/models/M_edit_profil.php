<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_edit_profil extends CI_Model {

	function tampil()
	{
		return $this->db->get('sekolah')->result();
	}

	function tambah()
	{
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
				$this->db->insert('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
					'logo' 				=> 'kosong1.png',
				);
				$this->db->insert('sekolah', $data);
			}
	}

	function tampiledit($id)
	{
		$idnya=decrypt_url($id);
		$this->db->where('id_edit_profil',$idnya);
    	return $this->db->get('edit_profil')->row_array();
	}



	function edit()
	{
		$id 		= $this->input->post('id');
		$nama 		= $this->input->post('nama');
		$username 	= $this->input->post('username');
		$email		= $this->input->post('email');
		$jenis		= $this->input->post('jenis');
		$provinsi	= $this->input->post('provinsi');
		$kota		= $this->input->post('kota');
		$kecamatan	= $this->input->post('kecamatan');
		$desa		= $this->input->post('desa');
		$alamat		= $this->input->post('alamat');
		$kode		= $this->input->post('kode');
		$no_wa		= $this->input->post('no_wa');
		$no_telepon	= $this->input->post('no_telepon');
		$instagram	= $this->input->post('instagram');
		$facebook	= $this->input->post('facebook');
		$twitter	= $this->input->post('twitter');


				$data = array(
					''		=> $kode,
					'nama_room'		=> $nama,
					'pj_room'		=> $pj,
					'ket_room'		=> $keterangan,
				);
				$this->db->where('id_edit_profil',$id)->update('edit_profil', $data);
				$this->session->set_flashdata('msg', 'suksesedit');

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