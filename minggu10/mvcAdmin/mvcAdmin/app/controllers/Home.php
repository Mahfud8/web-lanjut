<?php

class Home extends Controller {
 public function index(){
	session_start();
    if (isset($_SESSION["iduser"])){
		$this->view('templates/header');
		$this->view('home/index');
		$this->view('templates/footer');
	}else{
		$this->view('templates/header2');
		$this->view('user/login');
		$this->view('templates/footer');
	}	  
 }

}

