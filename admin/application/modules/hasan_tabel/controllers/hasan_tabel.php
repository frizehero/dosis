<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasan_tabel extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_hasan_tabel');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "hasan_tabel",
			'namafileview' 	=> "V_hasan_tabel",
			'tampil'		=> $this->M_hasan_tabel->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "hasan_tabel",
			'namafileview' 	=> "V_hasan_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "hasan_tabel",
			'namafileview' 	=> "V_hasan_edit",
			'tampil'		=> $this->M_hasan_tabel->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_hasan_tabel->tambah();
		redirect('hasan_tabel');
		
		//redirect('hasan_tabel');
	}

	function edit()
	{
		$this->M_hasan_tabel->edit();
		redirect('hasan_tabel');
	}

	function hapus()
	{
		$this->M_hasan_tabel->hapus();
		redirect('hasan_tabel');
	}
	
}
 