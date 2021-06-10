<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

	function insert($data)
	{
	$this->db->insert('namatabel', $data);
	}
}