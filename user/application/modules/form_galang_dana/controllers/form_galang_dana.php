<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form_galang_dana extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_form_galang_dana');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "form_galang_dana",
			'namafileview' 	=> "V_form_galang_dana",
			'tampil'		=> $this->M_form_galang_dana->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "form_galang_dana",
			'namafileview' 	=> "V_form_galang_dana_tambah",
		);
		echo Modules::run('template/tampilBeranda', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "form_galang_dana",
			'namafileview' 	=> "V_form_galang_dana_edit",
			'tampil'		=> $this->M_form_galang_dana->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_form_galang_dana->tambah();
		redirect('galang_sdana');
		
		//redirect('galang_dana');
	}

	function edit()
	{
		$this->M_form_galang_dana->edit();
		redirect('form_galang_dana');
	}

	function hapus()
	{
		$this->M_form_galang_dana->hapus();
		redirect('form_galang_dana');
	}
	
}
 