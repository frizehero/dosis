<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('m_inbox');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		if ( empty( $this->session->userdata('session_id') ) )
		{
			redirect('login');

		} else {

			$data = array(
			'namamodule' 	=> "inbox",
			'namafileview' 	=> "V_inbox",
		);
		echo Modules::run('template/tampilCore', $data);
		}


	}

	function tambah()
	{
		$this->m_inbox->tambah();
		redirect('inbox');
	}

	function edit()
	{
		$this->m_inbox->edit();
		redirect('inbox');
	}

	function hapus($id)
	{
		$this->m_inbox->hapus($id);
		redirect('inbox');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "inbox",
			'namafileview' 	=> "V_inbox",
			'tampil'		=> $this->m_inbox->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 