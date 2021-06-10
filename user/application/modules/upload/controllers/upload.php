<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MX_Controller {

	function __construct()
	{
		parent::__construct();
		// model
		 $this->load->model('M_upload');
		 $this->load->model('login/m_session');
	}

	public function tambah_proses()
	{
		$this->load->library('upload');
		$dataInfo = array();
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{
			$_FILES['userfile']['name']= $files['userfile']['name'][$i];
			$_FILES['userfile']['type']= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $files['userfile']['size'][$i];

			$this->upload->initialize($this->set_upload_options());
			$this->upload->do_upload();
			$dataInfo[] = $this->upload->data();
		}

		$data = array(
			'judul_produk' => $this->input->post('judul_produk'),
			'userfile' => $dataInfo[0]['file_name'],
			'userfile2' => $dataInfo[1]['file_name'],
			'userfile3' => $dataInfo[2]['file_name'],
		);

		$this->Produk_model->insert($data);
	}

	private function set_upload_options()
	{
		$config = array();
		$config['upload_path'] = 'images/';
		$config['allowed_types']    = 'jpg|jpeg|png|gif';
		$config['max_size']         = '2048'; // 2 MB

		return $config;
	}
	
}
 