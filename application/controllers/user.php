<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
  public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('M_user');
		$this->load->model('M_main');
		$this->load->model('M_score');
  }

	public function index()  
	{
		$cek = $this->session->userdata('username');
		if(!empty($cek)){ //jika pernah login
			$tester = $this->M_main->getAllData('tester');
			if(!empty($tester)){
				foreach($tester as $t){
					$id = $t["ID_TESTER"];
					$scores = $this->M_score->getScoreTester($id);
					$all_scores[$id] = $scores;
					$get_criteria_num = $this->M_score->countCriteria(); 
					$criteria_num = $get_criteria_num[0]["count(*)"];
					$score[$id]=0;
					foreach($scores as $s){
						$converted = $this->convert($s["ID_CRITERIA"],$s["VALUE"]);
						$criteria = $this->M_score->getCriteriaById($s["ID_CRITERIA"]);
						$weight = $this->get_weight($criteria[0]['RANK'],$criteria_num);
						$score[$id] += $converted * $weight;
					}
				}
				$data['tester'] = $tester;
				$data['scores'] = $all_scores;
				$data['score'] = $score;
			}else{
				$data = 0;
			}
			$this->load->view('p_header');
			$this->load->view('p_sidebar');
			$this->load->view('p_admin',$data);
			$this->load->view('p_footer');
		}else{
			$this->load->view('p_login');
		}
	}

	public function convert($id_criteria, $value)
	{	
		$score = 0;
		switch ($id_criteria) {
			case 1:
				//Jumlah Bug
				if($value<6) $score = 0.06;
				else if($value<11) $score = 0.15;
				else if($value<16) $score = 0.27;
				else $score = 0.52;
				break;
			case 2:
				//Lama Pengerjaan
				if($value>120) $score = 0.06;
				else if($value>60) $score = 0.15;
				else if($value>30) $score = 0.27;
				else $score = 0.52;
				break;
			case 3:
				//Pengalaman Pekerjaan
				if($value>3) $score = 0.61;
				else if($value>1) $score = 0.28;
				else $score = 0.11;
				break;
			case 4:
				//Training
				if($value=1) $score = 0.75;
				else $score = 0.25;
				break;
			case 5:
				//Jenjang Pendidikan
				if($value=="D3") $score = 0.11;
				else if($value=="D4" || $value=="S1") $score = 0.28;
				else $score = 0.61;
				break;
			case 6:
				//Jumlah Kesalahan
				if($value<6) $score = 0.52;
				else if($value<11) $score = 0.27;
				else if($value<16) $score = 0.15;
				else $score = 0.06;
				break;
		}
		return $score;
	}

	public function get_weight($rank, $maxRank)
	{
		$weight=0.0;
		for($i=$rank;$i<=$maxRank;$i++){
			$weight+=(float)1/$i;
		} 
		$weight/=$maxRank;
		return $weight;
	}

  public function login(){
	$u = $this->input->post('username');
	$p = md5($this->input->post('password'));

		$res = $this->M_user->login($u,$p);
    if(!empty($res)){
			$sess = array(
				'username' => $res[0]['USERNAME']
			);
			$this->session->set_userdata($sess);
			redirect("user");
			
    }else{
      $this->session->set_flashdata('pesan','Incorrect Username/password');
      $this->load->view('p_login');
    }
  }

  public function logout(){
		$cek= $this->session->userdata('username');
		if(empty($cek))
			header("location:".base_url()); //redirect
		else{
			$this->session->sess_destroy();
			header("location:".base_url());
		}
	}
	
	public function main()  
	{
		$cek = $this->session->userdata('username');
		if(!empty($cek)){ //jika pernah login
			$res = $this->M_main->getAllData('criteria');
			$data['criteria'] = $res; 
			$this->load->view('p_header');
			$this->load->view('p_sidebar');
			$this->load->view('p_admin_main',$data);
			$this->load->view('p_footer');
		}else{
			$this->load->view('p_login');
		}
	}

	public function measured()  
	{
		$cek = $this->session->userdata('username');
		if(!empty($cek)){ //jika pernah login
			$this->load->view('p_header');
			$this->load->view('p_sidebar');
			$this->load->view('p_admin_measured');
			$this->load->view('p_footer');
		}else{
			$this->load->view('p_login');
		}
	}

	public function do_delete($id){
			$where = array('id' => $id);
				$res= $this->db_model->DeleteData('appointment',$where);
			if($res>=1){
				$this->session->set_flashdata('info','Delete data success');
				redirect('doctor');
			}
		}
  
}
