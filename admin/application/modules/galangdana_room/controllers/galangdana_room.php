<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galangdana_room extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_igalangdana_room');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "galangdana_room",
			'namafileview' 	=> "V_galangdana_room",
			'tampil'		=> $this->M_galangdana_room->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "galangdana_room",
			'namafileview' 	=> "V_dana_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "galangdana_room",
			'namafileview' 	=> "V_dana_edit",
			'tampil'		=> $this->M_galangdana_room->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_galangdana_room->tambah();
		redirect('galangdana_room');
		
		//redirect('galangdana_room');
	}

	function edit()
	{
		$this->M_galangdana_room->edit();
		redirect('galangdana_room');
	}

	function hapus()
	{
		$this->M_galangdana_room->hapus();
		redirect('galangdana_room');
	}
	
}
 