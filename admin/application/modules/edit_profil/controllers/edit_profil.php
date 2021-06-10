<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profil extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_edit_profil');
		 $this->load->model('login/m_session');
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
	function tambahview()
	{
		$data['path'] = base_url('assets');
		$this->load->view('V_edit_profil_tambah', $data);
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil_tambah",
			'provinsi'			=> $this->M_edit_profil->provinsi(),
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
		// halaman edit
	function editview()
	{
		$data = array(
			'namamodule' 	=> "edit_profil",
			'namafileview' 	=> "V_edit_profil_edit",
			);
		echo Modules::run('template/tampilCore', $data);
	}

	function tambah()
	{
		$this->M_edit_profil->tambah();
		redirect('edit_profil');

		//redirect('edit_profil');
	}

	function edit()
	{
		$this->M_edit_profil->edit();
		redirect('edit_profil');

	}

	function hapus()
	{
		$this->M_edit_profil->hapus();
		redirect('edit_profil');
	}
	
}
 