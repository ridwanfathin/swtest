<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_main extends CI_Model {

	public function insertData($table,$data){
		$res = $this->db->insert($table,$data);
		return $res;
	}

	public function updateData($table,$data,$where){
		$res = $this->db->update($table,$data,$where);
		return $res;
	}

	public function deleteData($table,$where){
		$res = $this->db->delete($table,$where);
		return $res;
	}

	public function getAllData($table){
		$data = $this->db->get($table);
		return $data->result_array();
	}


}
