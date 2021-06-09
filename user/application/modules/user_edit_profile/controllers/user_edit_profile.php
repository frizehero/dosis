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
		$data['path'] = base_url('assets');
		$this->load->view('V_user_edit_profile_tambah', $data);
		$data = array(
			'namamodule' 	=> "user_edit_profile",
			'namafileview' 	=> "V_user_edit_profile_tambah",
			'provinsi'		=> $this->M_user_edit_profile->get_all_provinsi(),
		);
		echo Modules::run('template/tampilCore', $data);
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
	function editview()
	{

		$data = array(
			'namamodule' 	=> "user_edit_profile",
			'namafileview' 	=> "V_user_edit_profile_edit",
			
		);
		echo Modules::run('template/tampilBeranda', $data);
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
 