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

	function detailview($id)
	{
		$data = array(
			'namamodule' 	=> "galang_dana2",
			'namafileview' 	=> "V_galang_dana2_detail",
			'tampil'		=> $this->M_galang_dana2->tampildetail($id),
			'getpesan_kesan'		=> $this->M_galang_dana2->getpesan_kesan(),
		);
		echo Modules::run('template/tampilBeranda', $data);
	}

	function bayarview($id)
	{
		$data = array(
			'namamodule' 	=> "galang_dana2",
			'namafileview' 	=> "V_galang_dana2_bayar",
			'tampil'		=> $this->M_galang_dana2->tampilbayar($id),
		);
		echo Modules::run('template/tampilBeranda', $data);
	}

		// halaman tambah
	function tambahview()
	{
		$data['path'] = base_url('assets');
		$this->load->view('V_galang_dana2_tambah', $data);
		$data = array(
			'namamodule' 	=> "galang_dana2",
			'namafileview' 	=> "V_galang_dana2_tambah",
			'provinsi'			=> $this->M_galang_dana2->provinsi(),
		);
		
		echo Modules::run('template/tampilBeranda', $data);
	}

	function add_ajax_kab($id_prov)
	{
    	$query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
    	$data = "<option value=''>- Pilih Kabupaten -</option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}

	
	function add_ajax_kec($id_kab)
	{
    	$query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
    	$data = "<option value=''> - Pilih Kecamatan - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}
  
	function add_ajax_des($id_kec)
	{
    	$query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
    	$data = "<option value=''> - Pilih Desa - </option>";
    	foreach ($query->result() as $value) {
        	$data .= "<option value='".$value->id."'>".$value->nama."</option>";
    	}
    	echo $data;
	}
	
		// Halaman Edit
	function editview($id)
	{

		$data = array(
			'namamodule' 	=> "galang_dana2",
			'namafileview' 	=> "V_galang_dana2_edit",
			'tampil'		=> $this->M_galang_dana2->tampiledit($id),
		);
		echo Modules::run('template/tampilBeranda', $data);
	}


	function tambah()
	{
		$this->M_galang_dana2->tambah();
		redirect('galang_dana2');
		
		//redirect('galang_dana2');
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
 