<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi_saya extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_donasi_saya');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "donasi_saya",
			'namafileview' 	=> "V_donasi_saya",
			'tampil'		=> $this->M_donasi_saya->tampil(),
			
		);
		echo Modules::run('template/tampilCore', $data);
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
 