<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galang_dana extends CI_Model {

	function tampil()
	{

		$this->db->select('*');
		$this->db->from('galang_dana');
		$this->db->join('provinces', 'galang_dana.provinces = provinces.id_provinsi');
		$this->db->join('regencies', 'galang_dana.regencies = regencies.id_kabupaten');
		$this->db->join('districts', 'galang_dana.districts = districts.id_kecamatan');
		$this->db->join('villages', 'galang_dana.villages = villages.id_desa');
		$query = $this->db->get();




		return $query->result();
	}


		function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('galang_dana');
		$this->db->where('id_galangdana',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	function getprovinces()
	{
		return $this->db->get('provinces')->result();
	}

	function getregencies()
	{
		return $this->db->get('regencies')->result();
	}

	function getdistricts()
	{
		return $this->db->get('districts')->result();
	}

	function getvillages()
	{
		return $this->db->get('villages')->result();
	}


	function tambah()
	{


		$nama_pembuka 				= $this->input->post('nama_pembuka');
		$status_pembuka 			= $this->input->post('status_pembuka');
		$jenjang_pembuka 			= $this->input->post('jenjang_pembuka');
		$sekolah_pembuka 			= $this->input->post('sekolah_pembuka');
		$kelas_pembuka				= $this->input->post('kelas_pembuka');
		$telepon_pembuka			= $this->input->post('telepon_pembuka');
		$wa_pembuka 				= $this->input->post('wa_pembuka');
		$email_pembuka 				= $this->input->post('email_pembuka');
		$identitas_pembuka 			= $this->input->post('identitas_pembuka');
		$provinces		 			= $this->input->post('provinces');
		$regencies 					= $this->input->post('regencies');
		$districts 					= $this->input->post('districts');
		$villages	 				= $this->input->post('villages');
		$kode_pos_pembuka 			= $this->input->post('kode_pos_pembuka');
		$alamat_lengkap_pembuka 	= $this->input->post('alamat_lengkap_pembuka ');
		$nama_penerima 				= $this->input->post('nama_penerima');
		$status_penerima 			= $this->input->post('status_penerima');
		$jenjang_penerima 			= $this->input->post('jenjang_penerima');
		$sekolah_penerima 			= $this->input->post('sekolah_penerima');
		$kelas_penerima 			= $this->input->post('kelas_penerima');
		$telepon_penerima 			= $this->input->post('telepon_penerima');
		$wa_penerima 				= $this->input->post('wa_penerima');
		$email_penerima 			= $this->input->post('email_penerima');
		$identitas_penerima 		= $this->input->post('identitas_penerima');
		$deskripsi_penerima			= $this->input->post('deskripsi_penerima');
		$dokumentasi_penerima		= $this->input->post('dokumentasi_penerima');
		$tgl_awal 					= $this->input->post('tgl_awal');
		$tgl_akhir 					= $this->input->post('tgl_akhir');
		$jml_donasi 				= $this->input->post('jml_donasi');
		$provinsi_penerima 			= $this->input->post('provinsi_penerima');
		$kabupaten_penerima 		= $this->input->post('kabupaten_penerima');
		$kecamatan_penerima 		= $this->input->post('kecamatan_penerima');
		$desa_penerima 				= $this->input->post('desa_penerima');
		$kode_pos_penerima 			= $this->input->post('kode_pos_penerima');
		$alamat_lengkap_penerima 	= $this->input->post('alamat_lengkap_penerima');
		$tgl_dibuat					= $this->input->post('tgl_dibuat');

		$insert_awal = date( 'Y-m-d', strtotime($tgl_awal));
		$insert_akhir = date( 'Y-m-d', strtotime($tgl_akhir));



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/dokumen/peralatan/';
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
					'nama_pembuka'				=> $nama_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'kelas_pembuka'				=> $kelas_pembuka,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'email_pembuka'				=> $email_pembuka,
					'identitas_pembuka' 		=> $gbr['file_name'],
					'provinces'					=> $provinces,
					'regencies'					=> $regencies,
					'districts'					=> $districts,
					'villages'					=> $villages,
					'alamat_lengkap_pembuka'	=> $alamat_lengkap_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'identitas_penerima' 		=> $gbr['file_name'],
					'deskripsi_penerima'		=> $deskripsi_penerima,
					'dokumentasi_penerima' 		=> $gbr['file_name'],
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jml_donasi'				=> $jml_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'desa_penerima'				=> $desa_penerima,
					'alamat_lengkap_penerima'	=> $alamat_lengkap_penerima,
					
					
					
				);
				$this->db->insert('galang_dana', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'nama_pembuka'				=> $nama_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'kelas_pembuka'				=> $kelas_pembuka,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'email_pembuka'				=> $email_pembuka,
					'identitas_pembuka' 		=> 'kosong1.png',
					'provinces'					=> $provinces,
					'regencies'					=> $regencies,
					'districts'					=> $districts,
					'villages'					=> $villages,
					'alamat_lengkap_pembuka'	=> $alamat_lengkap_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'identitas_penerima' 		=> 'kosong1.png',
					'deskripsi_penerima'		=> $deskripsi_penerima,
					'dokumentasi_penerima' 		=> 'kosong1.png',
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jml_donasi'				=> $jml_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'desa_penerima'				=> $desa_penerima,
					'alamat_lengkap_penerima'	=> $alamat_lengkap_penerima,

				);
				$this->db->insert('galang_dana', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function edit()
	{
		$id = $this->input->post('id');

		$nama_pembuka 				= $this->input->post('nama_pembuka');
		$status_pembuka 			= $this->input->post('status_pembuka');
		$jenjang_pembuka 			= $this->input->post('jenjang_pembuka');
		$sekolah_pembuka 			= $this->input->post('sekolah_pembuka');
		$kelas_pembuka				= $this->input->post('kelas_pembuka');
		$telepon_pembuka			= $this->input->post('telepon_pembuka');
		$wa_pembuka 				= $this->input->post('wa_pembuka');
		$email_pembuka 				= $this->input->post('email_pembuka');
		$identitas_pembuka 			= $this->input->post('identitas_pembuka');
		$provinces 					= $this->input->post('provinces');
		$regencies		 			= $this->input->post('regencies');
		$districts		 			= $this->input->post('districts');
		$villages	 				= $this->input->post('villages');
		$kode_pos_pembuka 			= $this->input->post('kode_pos_pembuka');
		$alamat_lengkap_pembuka 	= $this->input->post('alamat_lengkap_pembuka');
		$nama_penerima 				= $this->input->post('nama_penerima');
		$status_penerima 			= $this->input->post('status_penerima');
		$jenjang_penerima 			= $this->input->post('jenjang_penerima');
		$sekolah_penerima 			= $this->input->post('sekolah_penerima');
		$kelas_penerima 			= $this->input->post('kelas_penerima');
		$telepon_penerima 			= $this->input->post('telepon_penerima');
		$wa_penerima 				= $this->input->post('wa_penerima ');
		$email_penerima 			= $this->input->post('email_penerima');
		$identitas_penerima 		= $this->input->post('identitas_penerima');
		$deskripsi_penerima			= $this->input->post('deskripsi_penerima');
		$dokumentasi_penerima		= $this->input->post('dokumentasi_penerima');
		$tgl_awal 					= $this->input->post('tgl_awal');
		$tgl_akhir 					= $this->input->post('tgl_akhir');
		$jml_donasi 				= $this->input->post('jml_donasi');
		$provinsi_penerima 			= $this->input->post('provinsi_penerima');
		$kabupaten_penerima 		= $this->input->post('kabupaten_penerima');
		$kecamatan_penerima 		= $this->input->post('kecamatan_penerima');
		$desa_penerima 				= $this->input->post('desa_penerima');
		$kode_pos_penerima 			= $this->input->post('kode_pos_penerima');
		$alamat_lengkap_penerima 	= $this->input->post('alamat_lengkap_penerima ');
		$tgl_dibuat					= $this->input->post('tgl_dibuat');

		$insert_awal = date( 'Y-m-d', strtotime($tgl_awal));
		$insert_akhir = date( 'Y-m-d', strtotime($tgl_akhir));



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
					'nama_pembuka'				=> $nama_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'kelas_pembuka'				=> $kelas_pembuka,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'email_pembuka'				=> $email_pembuka,
					'identitas_pembuka' 		=> $gbr['file_name'],
					'provinces'					=> $provinces,
					'regencies'					=> $regencies,
					'districts'					=> $districts,
					'villages'					=> $villages,
					'alamat_lengkap_pembuka'	=> $alamat_lengkap_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'identitas_penerima' 		=> $gbr['file_name'],
					'deskripsi_penerima'		=> $deskripsi_penerima,
					'dokumentasi_penerima' 		=> $gbr['file_name'],
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jml_donasi'				=> $jml_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'desa_penerima'				=> $desa_penerima,
					'alamat_lengkap_penerima'	=> $alamat_lengkap_penerima,
				);
				$this->db->where('id_galangdana',$id)->update('galang_dana', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		else{
				$data = array(
					'nama_pembuka'				=> $nama_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'kelas_pembuka'				=> $kelas_pembuka,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'email_pembuka'				=> $email_pembuka,
					'provinces'					=> $provinces,
					'regencies'					=> $regencies,
					'districts'					=> $districts,
					'villages'					=> $villages,
					'alamat_lengkap_pembuka'	=> $alamat_lengkap_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'deskripsi_penerima'		=> $deskripsi_penerima,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jml_donasi'				=> $jml_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'desa_penerima'				=> $desa_penerima,
					'alamat_lengkap_penerima'	=> $alamat_lengkap_penerima,
				);
				$this->db->where('id_galangdana',$id)->update('galang_dana', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_galangdana', $id)->delete('galang_dana');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}