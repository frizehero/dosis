<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang_kami extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_tentang_kami');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			$data = array(
			'namamodule' 	=> "tentang_kami",
			'namafileview' 	=> "V_tentang_kami",
		);
		echo Modules::run('template/tampilBeranda', $data);
		}


	}

	function tambah()
	{
		$this->m_tentang_kami->tambah();
		redirect('tentang_kami');
	}

	function edit()
	{
		$this->m_tentang_kami->edit();
		redirect('tentang_kami');
	}

	function hapus($id)
	{
		$this->m_tentang_kami->hapus($id);
		redirect('tentang_kami');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "tentang_kami",
			'namafileview' 	=> "V_tentang_kami",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 