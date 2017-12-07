<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function login($username,$password){
                $data = $this->db->get_where('user',array('username' => $username, 'password'=> $password));
                return $data->result_array();
	}

}
