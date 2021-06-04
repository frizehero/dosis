<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran2 extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_pembayaran2');
		 $this->load->model('login/m_session');
	}

	
	// index
	function index()
	{
		$data = array(
			'namamodule' 	=> "pembayaran2",
			'namafileview' 	=> "V_pembayaran2",
			'tampil'		=> $this->M_pembayaran2->tampil(),
		);
		echo Modules::run('template/tampilCore', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data = array(
			'namamodule' 	=> "pembayaran2",
			'namafileview' 	=> "V_pembayaran2_tambah",
			'tampilinformasi'		=> $this->M_pembayaran2->tampilinformasi(),
		);
		echo Modules::run('template/tampilBeranda', $data);
	}

		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "inventory_room",
			'namafileview' 	=> "V_room_edit",
			'tampil'		=> $this->M_inventory_room->tampiledit($id),
		);
		echo Modules::run('template/tampilCore', $data);
	}


	function tambah()
	{

		$this->M_pembayaran2->tambah();
		redirect('pembayaran2');
		
		//redirect('inventory_room');
	}

	function edit()
	{
		$this->M_inventory_room->edit();
		redirect('inventory_room');
	}

	function hapus()
	{
		$this->M_pembayaran2->hapus();
		redirect('pembayaran2');
	}
	
}
 