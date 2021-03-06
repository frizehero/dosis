<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_donasi extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_detail_donasi');
		 $this->load->model('admin_login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			$data = array(
			'namamodule' 	=> "detail_donasi",
			'namafileview' 	=> "V_detail_donasi",
		);
		echo Modules::run('template/tampilCore', $data);
		}


	}

	function tambah()
	{
		$this->M_detail_donasi->tambah();
		redirect('detail_donasi');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('data_sekolah');
	}

	function hapus($id)
	{
		$this->m_data_sekolah->hapus($id);
		redirect('data_sekolah');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "data_sekolah",
			'namafileview' 	=> "V_data_sekolah",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 