<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_edit_profile extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_user_edit_profile');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "user_edit_profile",
			'namafileview' 	=> "V_user_edit_profile",
			'tampil'		=> $this->M_user_edit_profile->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "user_edit_profile",
			'namafileview' 	=> "V_user_edit_profile_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// Halaman Edit
	function editview()
	{

		$data = array(
			'namamodule' 	=> "user_edit_profile",
			'namafileview' 	=> "V_user_edit_profile_edit",
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_user_edit_profile->tambah();
		redirect('user_edit_profile');
		
		//redirect('user_edit_profile');
	}

	function edit()
	{
		$this->M_user_edit_profile->edit();
		redirect('user_edit_profile');
	}

	function hapus()
	{
		$this->M_user_edit_profile->hapus();
		redirect('user_edit_profile');
	}
	
}
 