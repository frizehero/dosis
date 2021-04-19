<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galang_dana extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	
	

	function tampil()
	{

		$this->db->select('*');
		$this->db->from('galang_dana_new');
		$this->db->join('wilayah_provinsi', 'galang_dana_new.wilayah_provinsi = wilayah_provinsi.id');
		$this->db->join('wilayah_kabupaten', 'galang_dana_new.wilayah_kabupaten = wilayah_kabupaten.id');
		$this->db->join('wilayah_kecamatan', 'galang_dana_new.wilayah_kecamatan = wilayah_kecamatan.id');
		$this->db->join('wilayah_desa', 'galang_dana_new.wilayah_desa = wilayah_desa.id_');
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

		function get_all_provinsi() {
			$this->db->select('*');
			$this->db->from('wilayah_provinsi');
			$query = $this->db->get();
			
			return $query->result();
		}
		
    	return $query->row_array();
	}

	function getwilayah_provinsi()
	{
		return $this->db->get('wilayah_provinsi')->result();
	}

	function getwilayah_kabupaten()
	{
		return $this->db->get('wilayah_kabupaten')->result();
	}

	function getwilayah_kecamatan()
	{
		return $this->db->get('wilayah_kecamatan')->result();
	}

	function getwilayah_desa()
	{
		return $this->db->get('wilayah_desa')->result();
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
		$wilayah_provinsi		 			= $this->input->post('wilayah_provinsi');
		$wilayah_kabupaten 					= $this->input->post('wilayah_kabupaten');
		$wilayah_kecamatan 					= $this->input->post('wilayah_kecamatan');
		$wilayah_desa	 				= $this->input->post('wilayah_desa');
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
					'wilayah_provinsi'					=> $wilayah_provinsi,
					'wilayah_kabupaten'					=> $wilayah_kabupaten,
					'wilayah_kecamatan'					=> $wilayah_kecamatan,
					'wilayah_desa'					=> $wilayah_desa,
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
					'wilayah_provinsi'					=> $wilayah_provinsi,
					'wilayah_kabupaten'					=> $wilayah_kabupaten,
					'wilayah_kecamatan'					=> $wilayah_kecamatan,
					'wilayah_desa'					=> $wilayah_desa,
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


}