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


		$nama_pembuka				= $this->input->post('nama_pembuka');
		$sekolah_pembuka			= $this->input->post('sekolah_pembuka');
		$jenjang_pembuka    		= $this->input->post('jenjang_pembuka');
		$status_pembuka				= $this->input->post('status_pembuka');
		$telepon_pembuka	    	= $this->input->post('telepon_pembuka');
		$whatsapp_pembuka 			= $this->input->post('whatsapp_pembuka');
		$instagram_pembuka 			= $this->input->post('instagram_pembuka');
		$facebook_pembuka 			= $this->input->post('facebook_pembuka');
		$identitas_pembuka 			= $this->input->post('identitas_pembuka');
		$provinsi_pembuka 			= $this->input->post('provinsi_pembuka');
		$kota_pembuka 				= $this->input->post('kota_pembuka');
		$kecamatan_pembuka 			= $this->input->post('kecamatan_pembuka');
		$kelurahan_pembuka 			= $this->input->post('kelurahan_pembuka');
		$alamat_pembuka 			= $this->input->post('alamat_pembuka');
		$kode_pos_pembuka 			= $this->input->post('kode_pos_pembuka');
		$nama_penerima				= $this->input->post('nama_penerima');
		$sekolah_penerima			= $this->input->post('sekolah_penerima');
		$tentang_diri_penerima		= $this->input->post('tentang_diri_penerima');
		$identitas_penerima			= $this->input->post('identitas_penerima');
		$provinsi_penerima 			= $this->input->post('provinsi_penerima');
		$kota_penerima 				= $this->input->post('kota_penerima');
		$kecamatan_penerima 		= $this->input->post('kecamatan_penerima');
		$kelurahan_penerima 		= $this->input->post('kelurahan_penerima');
		$alamat_penerima 			= $this->input->post('alamat_penerima');
		$kode_pos_penerima 			= $this->input->post('kode_pos_penerima');
		$telepon_penerima	    	= $this->input->post('telepon_penerima');
		$whatsapp_penerima 			= $this->input->post('whatsapp_penerima');
		$instagram_penerima 		= $this->input->post('instagram_penerima');
		$facebook_penerima 			= $this->input->post('facebook_penerima');
		$judul_donasi_penerima 		= $this->input->post('judul_donasi_penerima');
		$target_donasi_penerima 	= $this->input->post('target_donasi_penerima');
		$tanggal_mulai 				= $this->input->post('tanggal_mulai');
		$tanggal_akhir 				= $this->input->post('tanggal_akhir');
		$no_rekening_penerima 		= $this->input->post('no_rekening_penerima');
		$batas_waktu_penerima 		= $this->input->post('batas_waktu_penerima');
		$kategori_penerima 			= $this->input->post('kategori_penerima');
		$deskripsi_penerima 		= $this->input->post('deskripsi_penerima');
		$tujuan_penerima 			= $this->input->post('tujuan_penerima');
		$foto1_penerima 			= $this->input->post('foto1_penerima');
		$foto2_penerima 			= $this->input->post('foto2_penerima');
		$foto3_penerima 			= $this->input->post('foto3_penerima');

		
		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'images/galangdana/';
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
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'telepon_pembuka'			=> $telepon_pembuka,
					'whatsapp_pembuka'			=> $whatsapp_pembuka,
					'instagram_pembuka'			=> $instagram_pembuka,
					'facebook_pembuka'			=> $facebook_pembuka,
					'identitas_pembuka'			=> $gbr['file_name'],
					'provinsi_pembuka'			=> $provinsi_pembuka,
					'kota_pembuka'				=> $kota_pembuka,
					'kecamatan_pembuka'			=> $kecamatan_pembuka,
					'kelurahan_pembuka'			=> $kelurahan_pembuka,
					'alamat_pembuka'			=> $alamat_pembuka,
					'kode_pos_pembuka'			=> $kode_pos_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'tentang_diri_penerima'		=> $tentang_diri_penerima,
					'identitas_penerima'		=> $gbr['file_name'],
					'provinsi_penerima'			=> $provinsi_penerima,
					'kota_penerima'				=> $kota_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'kelurahan_penerima'		=> $kelurahan_penerima,
					'alamat_penerima'			=> $alamat_penerima,
					'kode_pos_penerima'			=> $kode_pos_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'whatsapp_penerima'			=> $whatsapp_penerima,
					'instagram_penerima'		=> $instagram_penerima,
					'facebook_penerima'			=> $facebook_penerima,
					'judul_donasi_penerima'		=> $judul_donasi_penerima,
					'target_donasi_penerima'	=> $target_donasi_penerima,
					'tanggal_mulai'				=> $tanggal_mulai,
					'tanggal_akhir'				=> $tanggal_akhir,
					'no_rekening_penerima'		=> $no_rekening_penerima,
					'batas_waktu_penerima'		=> $batas_waktu_penerima,
					'kategori_penerima'			=> $kategori_penerima,
					'deskripsi_penerima'		=> $deskripsi_penerima,
					'tujuan_penerima'			=> $tujuan_penerima,
					'foto1_penerima'			=> $gbr['file_name'],
					'foto2_penerima'			=> $gbr['file_name'],
					'foto3_penerima'			=> $gbr['file_name'],
					
					
				);
				$this->db->insert('galang_dana2', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'nama_pembuka'				=> $nama_pembuka,
					'sekolah_pembuka'			=> $sekolah_pembuka,
					'jenjang_pembuka'			=> $jenjang_pembuka,
					'status_pembuka'			=> $status_pembuka,
					'telepon_pembuka'			=> $telepon_pembuka,
					'whatsapp_pembuka'			=> $whatsapp_pembuka,
					'instagram_pembuka'			=> $instagram_pembuka,
					'facebook_pembuka'			=> $facebook_pembuka,
					'identitas_pembuka'			=> 'kosong.jpeg',
					'provinsi_pembuka'			=> $provinsi_pembuka,
					'kota_pembuka'				=> $kota_pembuka,
					'kecamatan_pembuka'			=> $kecamatan_pembuka,
					'kelurahan_pembuka'			=> $kelurahan_pembuka,
					'alamat_pembuka'			=> $alamat_pembuka,
					'kode_pos_pembuka'			=> $kode_pos_pembuka,
					'nama_penerima'				=> $nama_penerima,
					'sekolah_penerima'			=> $sekolah_penerima,
					'tentang_diri_penerima'		=> $tentang_diri_penerima,
					'identitas_penerima'		=> 'kosong.jpeg',
					'provinsi_penerima'			=> $provinsi_penerima,
					'kota_penerima'				=> $kota_penerima,
					'kecamatan_penerima'		=> $kecamatan_penerima,
					'kelurahan_penerima'		=> $kelurahan_penerima,
					'alamat_penerima'			=> $alamat_penerima,
					'kode_pos_penerima'			=> $kode_pos_penerima,
					'telepon_penerima'			=> $telepon_penerima,
					'whatsapp_penerima'			=> $whatsapp_penerima,
					'instagram_penerima'		=> $instagram_penerima,
					'facebook_penerima'			=> $facebook_penerima,
					'judul_donasi_penerima'		=> $judul_donasi_penerima,
					'target_donasi_penerima'	=> $target_donasi_penerima,
					'tanggal_mulai'				=> $tanggal_mulai,
					'tanggal_akhir'				=> $tanggal_akhir,
					'no_rekening_penerima'		=> $no_rekening_penerima,
					'batas_waktu_penerima'		=> $batas_waktu_penerima,
					'kategori_penerima'			=> $kategori_penerima,
					'deskripsi_penerima'		=> $deskripsi_penerima,
					'tujuan_penerima'			=> $tujuan_penerima,
					'foto1_penerima'			=> 'kosong.jpeg',
					'foto2_penerima'			=> 'kosong.jpeg',
					'foto3_penerima'			=> 'kosong.jpeg',
					
				);
				$this->db->insert('galang_dana2', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			}
	}

	function edit()
	{
		$id = $this->input->post('id');

		$nominal_donasi		= $this->input->post('nominal_donasi');
		$nama_lengkap		= $this->input->post('nama_lengkap');
		$tgl_pembayaran     = $this->input->post('tgl_pembayaran');
		$nama_rekening		= $this->input->post('nama_rekening');
		$bukti_pembayaran   = $this->input->post('bukti_pembayaran ');
		$pesan_kesan 		= $this->input->post('pesan_kesan');
	


		$this->load->library('upload');
		$nmfile = "file_".time();
		$config['upload_path']		= 'images/galangdana/';
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
					'id_pembayaran'		=> $id_pembayaran,
					'nominal_donasi'	=> $nominal_donasi,
					'nama_lengkap'      => $nama_lengkap,
					'tgl_pembayaran'    => $tgl_pembayaran,
					'nama_rekening'     => $nama_rekening,
					'no_rekening'       => $no_rekening,
					'bukti_pembayaran' 	=> $bukti_pembayaran,
					'pesan_kesan'       => $pesan_kesan,
					'identitas_pembuka' 	=> $gbr['file_name'],
				);
				$this->db->where('id_pembayaran',$id)->update('pembayaran_user', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			
			}	 
		}
		else{
				$data = array(
					'id_pembayaran'		=> $id_pembayaran,
					'nominal_donasi'	=> $nominal_donasi,
					'nama_lengkap'      => $nama_lengkap,
					'tgl_pembayaran'    => $tgl_pembayaran,
					'nama_rekening'     => $nama_rekening,
					'no_rekening'       => $no_rekening,
					'bukti_pembayaran' 	=> $bukti_pembayaran,
					'pesan_kesan'       => $pesan_kesan,
				);
				$this->db->where('id_pembayaran',$id)->update('pembayaran_user', $data);
				$this->session->set_flashdata('msg', 'suksesedit');
			}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$this->db->where('id_galang_dana', $id)->delete('galang_dana2');
		$this->session->set_flashdata('msg', 'sukseshapus');
	}

}