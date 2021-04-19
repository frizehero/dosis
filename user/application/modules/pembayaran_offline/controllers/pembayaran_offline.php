<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_offline extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_pembayaran_offline');
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
			'namamodule' 	=> "pembayaran_offline",
			'namafileview' 	=> "V_pembayaran_offline",
		);
		echo Modules::run('template/tampilBeranda', $data);
		}


	}

	function tambah()
	{
		$this->m_pembayaran_offline->tambah();
		redirect('pembayaran_offline');
	}

	function edit()
	{
		$this->m_pembayaran_offline->edit();
		redirect('pembayaran_offline');
	}

	function hapus($id)
	{
		$this->m_pembayaran_offline->hapus($id);
		redirect('pembayaran_offline');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pembayaran_offline",
			'namafileview' 	=> "V_pembayaran_offline",
			'tampil'		=> $this->m_pembayaran_offline->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 