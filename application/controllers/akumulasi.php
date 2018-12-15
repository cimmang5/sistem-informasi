<?php
	if(!defined('BASEPATH'))
		exit('manipulasi script secara langsung tak diperbolehkan');
	class Akumulasi extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			$this->load->library(array('form_validation','session'));
			$this->load->database();
			$this->load->helper('url');

		}
		public function index(){
			$this->load->view('login');
		}

		public function login_process(){
			$login_data=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password')
			);
			$selection = $this->input->post('selection');
			$login = $this->user_model->login($login_data);
			if($login){
				if($selection){
					redirect('akumulasi/input_nilai');
				}else{
					redirect('akumulasi/hasil');
				}
			}
			else{
				redirect('akumulasi');
			}
		}

		public function input_nilai(){
				$this->load->view('input_nilai');
		}

		public function input_nilai_process(){
			$rataRata=((double)$this->input->post('ip1') + (double)$this->input->post('ip2') + (double)$this->input->post('ip3') + (double)$this->input->post('ip4'))/4;
			if($rataRata>=2)
				$lulus = TRUE;
			else
				$lulus = FALSE;
			$hasil_data=array(
				'NIM'=>$this->input->post('NIM'),
				'nama'=>$this->input->post('nama'),
				'lulus'=>$lulus
			);
			$this->user_model->input_data($hasil_data);
			redirect('akumulasi/input_nilai');
		}
		public function hasil(){
			$input = array(
				'nama'=>NULL,
				'lulus'=>NULL
			);
			$this->load->view('hasil',$input);
		}
		public function hasil_process(){
			$NIM=$this->input->post('NIM');
			$hasil = $this->user_model->show_DO($NIM);
			$hasilDO=null;
			foreach ($hasil as $key) {
				$hasilDO = array(
				'nama'=>$key['nama'],
				'lulus'=>$key['LULUS']
				);
			}
			$this->load->view('hasil',$hasilDO);
		}
	}
?>