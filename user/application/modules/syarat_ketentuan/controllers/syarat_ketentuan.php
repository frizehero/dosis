<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Syarat_ketentuan extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_syarat_ketentuan');
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
			'namamodule' 	=> "syarat_ketentuan",
			'namafileview' 	=> "V_syarat_ketentuan",
		);
		echo Modules::run('template/tampilBeranda', $data);
		}


	}

	function tambah()
	{
		$this->m_syarat_ketentuan->tambah();
		redirect('syarat_ketentuan');
	}

	function edit()
	{
		$this->m_syarat_ketentuan->edit();
		redirect('syarat_ketentuan');
	}

	function hapus($id)
	{
		$this->m_syarat_ketentuan->hapus($id);
		redirect('syarat_ketentuan');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "syarat_ketentuan",
			'namafileview' 	=> "V_syarat_ketentuan",
			'tampil'		=> $this->m_data_sekolah->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 