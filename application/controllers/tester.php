<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tester extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('M_main');
		$this->load->model('M_tester');
		$this->load->model('M_score');
		
	}

	public function index()
	{
		$this->load->view('p_home');
	}

	public function result($id)
	{
		$score = $this->M_score->getScoreTester($id);
		$get_criteria_num = $this->M_score->countCriteria(); 
		$criteria_num = $get_criteria_num[0]["count(*)"];
		$total_score = 0;
		foreach($score as $s){
			$converted = $this->convert($s["ID_CRITERIA"],$s["VALUE"]);
			$criteria = $this->M_score->getCriteriaById($s["ID_CRITERIA"]);
			$weight = $this->get_weight($criteria[0]['RANK'],$criteria_num);
			$total_score += $converted * $weight;
		}
		$data['total'] = $total_score;
		$this->load->view('p_result',$data);
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
	
	public function do_insert(){
		$name = $_POST['nama'];
		$score[1] = $_POST['bug'];
		$score[2] = $_POST['waktu'];
		$score[3] = $_POST['pengalaman'];
		$score[4] = $_POST['training'];
		$score[5] = $_POST['pendidikan'];
		$score[6] = 20-(int)$score[1];
   
		if(!empty($name)){
			$data_insert = array(
				'name' => $name
			);
			$res = $this->M_main->insertData('tester',$data_insert);
			$get = $this->M_tester->getTesterByName($name);
			if($res>0){
				$this->session->set_userdata($data_insert);
				$data_insert = array(
					'ID_CRITERIA' => 1,
					'ID_TESTER' => $get[0]['ID_TESTER'],
					'VALUE' => (string)$score[1]
				);
				$res = $this->M_main->insertData('score',$data_insert);
				for($i=2;$i<=6;$i++){
					$data_insert['ID_CRITERIA'] = $i;
					$data_insert['VALUE'] = (string)$score[$i];
					$res = $this->M_main->insertData('score',$data_insert);
				}
				$this->session->set_flashdata('pesan','Berhasil disimpan');
				$this->result($get[0]['ID_TESTER']);
			}else{
				$this->session->set_flashdata('pesan','Gagal disimpan');
				redirect('tester');
			}
		}else{
			$this->session->set_flashdata('pesan','Input tidak valid');
			redirect('tester');
		}
	}
}
