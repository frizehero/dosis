<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi extends MX_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('M_konfirmasi');
                $this->load->helper('url');
	}
	
	function index()
	{
		$data['galang_dana2'] = $this->M_konfirmasi->tampil_data()->result();
		$this->load->view('v_konfirmasi',$data);
			$data = array(
			'namamodule' 	=> "konfirmasi",
			'namafileview' 	=> "V_konfirmasi",
		);
		echo Modules::run('template/tampilCore', $data);
	}

	function hapus($id)
	{
		$this->M_konfirmasi->hapus($id);
		redirect('galang_dana2');
	}

	function cari()
	{
		$data = array(
			'namamodule' 	=> "konfirmasi",
			'namafileview' 	=> "V_konfirmasi",
			'tampil'		=> $this->M_konfirmasi->cari(),
		);
		echo Modules::run('template/tampilCore', $data);
	}
	
}
 