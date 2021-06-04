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
			'tampilpostingan'		=> $this->M_konfirmasi->tampilpostingan(),
			
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function hapus($id)
	{
		$this->M_konfirmasi->hapus($id);
		redirect('galang_dana2');

	}

    function hapus2()
	{
		$this->M_konfirmasi->hapus2();
		redirect('konfirmasi');

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
 