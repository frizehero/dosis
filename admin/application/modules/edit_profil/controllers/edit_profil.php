<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_edit_profil');
		 $this->load->model('admin_login/m_session');
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
	function tambah()
	{
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function editview($id)
	{
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil",
			'tampil'     	=> $this->M_edit_profil->tampiedit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function hapus()
	{
		$this->M_edit_profil->hapus();
		redirect('edit_profil');
	}
	
}
 