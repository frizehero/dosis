<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galang_dana2 extends CI_Model {

	function tampil()
	{

		$this->db->select('*');
		$this->db->from('galang_dana2');
		$query = $this->db->get();




		return $query->result();
	}


		function tampiledit($id)
	{
		$idnya=decrypt_url($id);

		$this->db->select('*');
		$this->db->from('galang_dana2');
		$this->db->where('id_galang_dana2',$idnya);
		$query = $this->db->get();


		
    	return $query->row_array();
	}

	


	function tambah()
	{


		$nama_pembuka 				= $this->input->post('nama_pembuka');
		$status_pembuka 			= $this->input->post('status_pembuka');
		$jenjang_pembuka 			= $this->input->post('jenjang_pembuka');
		$sekolah_pembuka 			= $this->input->post('sekolah_pembuka');
		$kelas_pembuka				= $this->input->post('kelas_pembuka');
		$no_rekening				= $this->input->post('no_rekening');
		$telepon_pembuka			= $this->input->post('telepon_pembuka');
		$wa_pembuka 				= $this->input->post('wa_pembuka');
		$instagram	 				= $this->input->post('instagram');
		$facebook	 				= $this->input->post('facebook');
		$twitter	 				= $this->input->post('twitter');
		$identitas_pembuka 			= $this->input->post('identitas_pembuka');
		$provinsi		 			= $this->input->post('provinsi');
		$kota 						= $this->input->post('kota');
		$kecamatan 					= $this->input->post('kecamatan');
		$kelurahan	 				= $this->input->post('kelurahan');
		$desa	 					= $this->input->post('desa');
		$kode_pos 					= $this->input->post('kode_pos');
		$alamat_pembuka 			= $this->input->post('alamat_pembuka');
		$nama_penerima 				= $this->input->post('nama_penerima');
		$alamat_penerima			= $this->input->post('alamat_penerima');
		$jenjang_penerima 			= $this->input->post('jenjang_penerima');
		$sekolah_penerima 			= $this->input->post('sekolah_penerima');
		$kelas_penerima 			= $this->input->post('kelas_penerima');
		$telepon_penerima 			= $this->input->post('telepon_penerima');
		$wa_penerima 				= $this->input->post('wa_penerima');
		$email_penerima 			= $this->input->post('email_penerima');
		$identitas_penerima 		= $this->input->post('identitas_penerima');
		$judul_donasi		 		= $this->input->post('judul_donasi');
		$deskripsi_peristiwa		= $this->input->post('deskripsi_peristiwa');
		$tujuan_galang_dana			= $this->input->post('tujuan_galang_dana');
		$dokumentasi_perisiwa1		= $this->input->post('dokumentasi_peristiwa1');
		$dokumentasi_perisiwa2		= $this->input->post('dokumentasi_peristiwa2');
		$dokumentasi_perisiwa3		= $this->input->post('dokumentasi_peristiwa3');
		$tgl_awal 					= $this->input->post('tgl_awal');
		$tgl_akhir 					= $this->input->post('tgl_akhir');
		$jumlah_donasi 				= $this->input->post('jumlah_donasi');
		$provinsi_penerima 			= $this->input->post('provinsi_penerima');
		$kota_penerima 				= $this->input->post('kota_penerima');
		$kecamatan_penerima 		= $this->input->post('kecamatan_penerima');
		$kelurahan_penerima 		= $this->input->post('kelurahan_penerima');
		$kode_pos_penerima 			= $this->input->post('kode_pos_penerima');
		$tgl_dibuat					= $this->input->post('tgl_dibuat');

		$insert_awal = date( 'Y-m-d', strtotime($tgl_awal));
		$insert_akhir = date( 'Y-m-d', strtotime($tgl_akhir));



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/galangdana/';
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
					'nama_pembuka'				=> $nama_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'kelas_pembuka'				=> $kelas_pembuka,
					'no_rekening'				=> $no_rekening,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'instagram'					=> $instagram,
					'facebook'					=> $facebook,
					'twitter'					=> $twitter,
					'identitas_pembuka' 		=> $gbr['file_name'],
					'provinsi'					=> $provinsi,
					'kota'						=> $kota,
					'kelurahan'					=> $kelurahan,
					'kecamatan'					=> $kecamatan,
					'desa'						=> $desa,
					'kode_pos'					=> $kode_pos,
					'alamat_pembuka'			=> $alamat_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'alamat_penerima'			=> $alamat_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'identitas_penerima' 		=> $identitas_penerima,
					'judul_donasi'		 		=> $judul_donasi,
					'deskripsi_peristiwa'		=> $deskripsi_peristiwa,
					'tujuan_galang_dana'		=> $tujuan_galang_dana,
					'dokumentasi_peristiwa1' 	=> $dokumentasi_peristiwa1,
					'dokumentasi_peristiwa2' 	=> $dokumentasi_peristiwa2,
					'dokumentasi_peristiwa3' 	=> $dokumentasi_peristiwa3,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jumlah_donasi'				=> $jumlah_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'kelurahan_penerima'		=> $kelurahan_penerima,
					
					
					
				);
				$this->db->insert('galang_dana2', $data);
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
					'no_rekening'				=> $no_rekening,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'instagram'					=> $instagram,
					'facebook'					=> $facebook,
					'twitter'					=> $twitter,
					'identitas_pembuka' 		=> 'kosong1.jpeg',
					'provinsi'					=> $provinsi,
					'kota'						=> $kota,
					'kelurahan'					=> $kelurahan,
					'kecamatan'					=> $kecamatan,
					'desa'						=> $desa,
					'kode_pos'					=> $kode_pos,
					'alamat_pembuka'			=> $alamat_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'alamat_penerima'			=> $alamat_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'identitas_penerima' 		=> $identitas_penerima,
					'judul_donasi' 				=> $judul_donasi,
					'deskripsi_peristiwa'		=> $deskripsi_peristiwa,
					'dokumentasi_peristiwa' 	=> $deskripsi_peristiwa,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jumlah_donasi'				=> $jumlah_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kota_penerima'				=> $kota_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					
				);
				$this->db->insert('galang_dana2', $data);
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
		$no_rekening				= $this->input->post('no_rekening');
		$telepon_pembuka			= $this->input->post('telepon_pembuka');
		$wa_pembuka 				= $this->input->post('wa_pembuka');
		$email_pembuka 				= $this->input->post('email_pembuka');
		$identitas_pembuka	        = $this->input->post('identitas_pembuka');
		$provinsi					= $this->input->post('provinsi');
		$kota		 				= $this->input->post('kota');
		$kelurahan		 			= $this->input->post('kelurahan');
		$kecamatan	 				= $this->input->post('kecamatan');
		$desa	 					= $this->input->post('desa');
		$kode_pos		 			= $this->input->post('kode_pos');
		$alamat_pembuka 			= $this->input->post('alamat_pembuka');
		$nama_penerima 				= $this->input->post('nama_penerima');
		$status_penerima 			= $this->input->post('status_penerima');
		$jenjang_penerima 			= $this->input->post('jenjang_penerima');
		$sekolah_penerima 			= $this->input->post('sekolah_penerima');
		$kelas_penerima 			= $this->input->post('kelas_penerima');
		$telepon_penerima 			= $this->input->post('telepon_penerima');
		$wa_penerima 				= $this->input->post('wa_penerima ');
		$email_penerima 			= $this->input->post('email_penerima');
		$identitas_penerima 		= $this->input->post('identitas_penerima');
		$deskripsi_peristiwa		= $this->input->post('deskripsi_peristiwa');
		$dokumentasi_peristiwa		= $this->input->post('dokumentasi_peristiwa');
		$tgl_awal 					= $this->input->post('tgl_awal');
		$tgl_akhir 					= $this->input->post('tgl_akhir');
		$jml_donasi 				= $this->input->post('jml_donasi');
		$provinsi_penerima 			= $this->input->post('provinsi_penerima');
		$kabupaten_penerima 		= $this->input->post('kabupaten_penerima');
		$kecamatan_penerima 		= $this->input->post('kecamatan_penerima');
		$desa_penerima 				= $this->input->post('desa_penerima');
		$kode_pos_penerima 			= $this->input->post('kode_pos_penerima');
		$alamat_penerima 			= $this->input->post('alamat_penerima ');
		$tgl_dibuat					= $this->input->post('tgl_dibuat');

		$insert_awal = date( 'Y-m-d', strtotime($tgl_awal));
		$insert_akhir = date( 'Y-m-d', strtotime($tgl_akhir));



		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'assets/images/galangdana';
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
					'nama_pembuka'				=> $nama_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'kelas_pembuka'				=> $kelas_pembuka,
					'no_rekening'				=> $no_rekening,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'email_pembuka'				=> $email_pembuka,
					'identitas'			 		=> $gbr['file_name'],
					'provinces'					=> $provinces,
					'regencies'					=> $regencies,
					'districts'					=> $districts,
					'villages'					=> $villages,
					'alamat_pembuka'			=> $alamat_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'identitas_penerima' 		=> $identitas_penerima,
					'deskripsi_peristiwa'		=> $deskripsi_peristiwa,
					'dokumentasi_peristiwa' 	=> $dokumentasi_peristiwa,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jml_donasi'				=> $jml_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'desa_penerima'				=> $desa_penerima,
					'alamat_penerima'			=> $alamat_penerima,
				);
				$this->db->where('id_galang_dana2',$id)->update('galang_dana2', $data);
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
					'no_rekening'				=> $no_rekening,
					'telepon_pembuka'			=> $telepon_pembuka,
					'wa_pembuka'				=> $wa_pembuka,
					'email_pembuka'				=> $email_pembuka,
					'provinces'					=> $provinces,
					'regencies'					=> $regencies,
					'districts'					=> $districts,
					'villages'					=> $villages,
					'alamat_pembuka'			=> $alamat_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'status_penerima'			=> $status_penerima,
					'jenjang_penerima'			=> $jenjang_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'kelas_penerima'			=> $kelas_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'wa_penerima'				=> $wa_penerima,
					'email_penerima'			=> $email_penerima,
					'deskripsi_peristiwa'		=> $deskripsi_peristiwa,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jml_donasi'				=> $jml_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'desa_penerima'				=> $desa_penerima,
					'alamat_penerima'			=> $alamat_penerima,
				);
				$this->db->where('id_galangdana2',$id)->update('galang_dana2', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_galang_dana2', $id)->delete('galang_dana2');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}