<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_pembayaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_history_pembayaran');
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
			'namamodule' 	=> "history_pembayaran",
			'namafileview' 	=> "V_history_pembayaran",
			'tampil'		=> $this->M_history_pembayaran->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
		}


	}

	function tambah()
	{
		$this->m_data_sekolah->tambah();
		redirect('data_sekolah');
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
			'tampil'		=> $this->M_history_pembayaran->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 