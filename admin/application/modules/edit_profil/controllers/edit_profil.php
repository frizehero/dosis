<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_edit_profil');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
			$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
			'tampil'     	=> $this->M_edit_profil->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman edit
	function editview()
	{
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil_edit",
			);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_edit_profil->tambah();
		redirect('edit_profil');

		//redirect('edit_profil');
	}

	function edit()
	{
		$this->M_edit_profil->edit();
		redirect('edit_profil');

	}

	function hapus()
	{
		$this->M_edit_profil->hapus();
		redirect('edit_profil');
	}
	
}
 