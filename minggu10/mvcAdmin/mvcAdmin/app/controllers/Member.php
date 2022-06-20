<?php

class Member extends Controller { 

	public function index(){  
		 session_start();
		 if (isset($_SESSION["iduser"])){
	        $data['title'] = 'Data Member';
			$data['member'] = $this->model('Member_model')->getAllMember(); 
			$this->view('templates/header', $data);
			$this->view('member/index', $data);
			$this->view('templates/footer');
	     }else{
	        $this->view('templates/header2');
	        $this->view('user/login');
	        $this->view('templates/footer');
	     }
	}
}