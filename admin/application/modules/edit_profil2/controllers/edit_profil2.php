<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_profil2 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_edit_profil2');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "edit_profil2",
			'namafileview' 	=> "V_edit_profil2",
			'tampil'		=> $this->M_edit_profil2->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "edit_profil2",
			'namafileview' 	=> "V_editprofil2_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "edit_profil2",
			'namafileview' 	=> "V_editprofil2_edit",
			'tampil'		=> $this->M_edit_profil2->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_edit_profil2->tambah();
		redirect('edit_profil2');
		
		//redirect('inventory_room');
	}

	function edit()
	{
		$this->M_edit_profil2->edit();
		redirect('edit_profil2');
	}

	function hapus()
	{
		$this->M_edit_profil2->hapus();
		redirect('edit_profil2');
	}
	
}
 