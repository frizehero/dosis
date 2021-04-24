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


		$nama_pembuka		= $this->input->post('nama_pembuka');
		$no_rekening		= $this->input->post('no_rekening');
		$telepon_pembuka    = $this->input->post('telepon_pembuka');
		$wa_pembuka			= $this->input->post('wa_pembuka');
		$instagram	    	= $this->input->post('instagram');
		$alamat_pembuka 	= $this->input->post('alamat_pembuka');

		
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
					'nama_pembuka'			=> $nama_pembuka,
					'no_rekening'			=> $no_rekening,
					'telepon_pembuka'      	=> $telepon_pembuka,
					'wa_pembuka'    		=> $wa_pembuka,
					'instagram'     		=> $instagram,
					'alamat_pembuka'       	=> $alamat_pembuka,
					'identitas_pembuka' 	=> $gbr['file_name'],
					
					
				);
				$this->db->insert('galang_dana2', $data);
				$this->session->set_flashdata('msg', 'suksestambah');
			
			}	 
		}
		else{
				$data = array(
					'nama_pembuka'			=> $nama_pembuka,
					'no_rekening'			=> $no_rekening,
					'telepon_pembuka'      	=> $telepon_pembuka,
					'wa_pembuka'    		=> $wa_pembuka,
					'instagram'     		=> $instagram,
					'alamat_pembuka'       	=> $alamat_pembuka,
					'identitas_pembuka' 	=> 'kosong.jpeg',
					
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