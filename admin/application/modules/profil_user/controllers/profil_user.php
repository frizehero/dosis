<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class 	Profil_user extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_profil_user');
		 $this->load->model('admin_login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			$data = array(
			'namamodule' 	=> "profil_user",
			'namafileview' 	=> "V_profil_user",
		);
		echo Modules::run('template/tampilCore', $data);
		}


	}

	function donasiview($id)
	{
		$data = array(
			'namamodule' 	=> "profil_user",
			'namafileview' 	=> "V_profil_user_donasi",
			'tampil'		=> $this->M_profil_user->tampildonasi($id),
		);
		echo Modules::run('template/tampilBeranda', $data);
	}

	function tambah()
	{
		$this->m_data_sekolah->tambah();
		redirect('data_sekolah');
	}

	function edit()
	{
		$this->m_data_sekolah->edit();
		redirect('data_sekolah');
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
 