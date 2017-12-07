<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tester extends CI_Model {

	public function getTesterByName($name){
		$data = $this->db->query('select * from tester where name = "'.$name.'"');
		return $data->result_array();
	}

}
