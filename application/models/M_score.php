<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_score extends CI_Model {

	public function getScoreTester($id){
		$data = $this->db->query('select * from score where id_tester = "'.$id.'"');
		return $data->result_array();
	}

	public function countCriteria(){
		$data = $this->db->query('select count(*) from criteria');
		return $data->result_array();
    }
    
    public function getCriteriaById($id){
		$data = $this->db->query('select * from criteria where id_criteria = "'.$id.'"');
		return $data->result_array();
	}

}
