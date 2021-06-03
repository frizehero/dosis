<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends MX_Controller {
	
	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_konfirmasi');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "konfirmasi",
			'namafileview' 	=> "V_konfirmasi",
			'tampil'		=> $this->M_konfirmasi->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function hapus($id)
	{
		$this->M_konfirmasi->hapus($id);
		redirect('galang_dana2');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "konfirmasi",
			'namafileview' 	=> "V_konfirmasi",
			'tampil'		=> $this->M_konfirmasi->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 