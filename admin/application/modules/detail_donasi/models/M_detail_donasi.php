<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail_donasi extends CI_Model {

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
		$this->db->where('id_galangdana2',$idnya);
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
		$telepon_pembuka			= $this->input->post('telepon_pembuka');
		$wa_pembuka 				= $this->input->post('wa_pembuka');
		$identitas_pembuka 			= $this->input->post('identitas_pembuka');
		$provinsi		 			= $this->input->post('provinsi');
		$kota 						= $this->input->post('kota');
		$kecamatan 					= $this->input->post('kecamatan');
		$kelurahan	 				= $this->input->post('kelurahan');
		$desa	 					= $this->input->post('desa');
		$kode_pos 					= $this->input->post('kode_pos');
		$alamat_pembuka 			= $this->input->post('alamat_pembuka ');
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
		$dokumentasi_perisiwa		= $this->input->post('dokumentasi_peristiwa');
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
		$config['upload_path']		= 'assets/identitas_pembuka/pembuka/';
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
					'dokumentasi_peristiwa' 	=> $dokumentasi_peristiwa,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jumlah_donasi'				=> $jumlah_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kabupaten_penerima'		=> $kabupaten_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'kelurahan_penerima'		=> $kelurahan_penerima,
					
					
					
				);
				$this->db->insert('detail_donasi', $data);
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
					'identitas_pembuka' 		=> 'kosong1.png',
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
					'dokumentasi_peristiwa' 	=> $dokumentasi_peristiwa,
					'tgl_awal'					=> $tgl_awal,
					'tgl_akhir'					=> $tgl_akhir,
					'jumlah_donasi'				=> $jumlah_donasi,
					'provinsi_penerima'			=> $provinsi_penerima,
					'kota_penerima'				=> $kota_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					
				);
				$this->db->insert('detail_donasi', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function edit()
	{
		$id_sekolah = $this->input->post('id_sekolah');
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
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			
			}	 
		}
		else{
				$data = array(
					'nama_sekolah'		=> $nama,
					'keterangan'		=> $keterangan,
				);
				$this->db->where('id_sekolah',$id_sekolah)->update('sekolah', $data);
			}
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