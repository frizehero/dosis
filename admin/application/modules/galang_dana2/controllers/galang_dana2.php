<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galang_dana2 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		$this->load->model('M_galang_dana2');
		$this->load->model('login/m_session');
	}

	
	// index
	function index()
	{

		$data = array(
			'namamodule' 	=> "galang_dana2",
			'namafileview' 	=> "V_galang_dana2",
			'tampil'		=> $this->M_galang_dana2->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// index

  function detailview($id)
  {
    $data = array(
      'namamodule'    => "galang_dana2",
      'namafileview'  => "V_galang_dana2_detail",
      'tampil'        => $this->M_galang_dana2->tampildetail($id),
      'tampildonatur' => $this->M_galang_dana2->tampildonatur(),
      'tampilkomentar' => $this->M_galang_dana2->tampilkomentar(),
    );
    echo Modules::run('template/tampilCore', $data);
  }

	function tambahview()
	{

		$data = array(
			'namamodule' 	         => "galang_dana2",
			'namafileview' 	       => "V_galang_dana2_tambah",
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{
		$this->M_galang_dana2->tambah();
		redirect('galang_dana2');
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "galang_dana2",
			'namafileview' 	=> "V_galang_dana2_edit",
			'tampil'		=> $this->M_galang_dana2->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function edit()
	{
		$this->M_galang_dana2->edit();
		redirect('galang_dana2');
	}

	
	function hapus()
	{
		$this->M_galang_dana2->hapus();
		redirect('galang_dana2');
    }
}