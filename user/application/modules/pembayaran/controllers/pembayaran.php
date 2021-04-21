<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_pembayaran');
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
			'namamodule' 	=> "pembayaran",
			'namafileview' 	=> "V_pembayaran",
		);
		echo Modules::run('template/tampilBeranda', $data);
		}


	}

	function tambah()
	{
		$this->M_pembayaran->tambah();
		redirect('pembayaran');
	}

	function edit()
	{
		$this->M_pembayaran->edit();
		redirect('pembayaran');
	}

	function hapus($id)
	{
		$this->M_pembayaran->hapus($id);
		redirect('pembayaran');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "pembayaran",
			'namafileview' 	=> "V_pembayaran",
			'tampil'		=> $this->M_pembayaran->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 