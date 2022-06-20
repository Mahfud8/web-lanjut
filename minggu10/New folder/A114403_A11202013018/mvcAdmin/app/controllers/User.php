<?php

class User extends Controller {
	
 public function index(){ 
   session_start();
   if (isset($_SESSION["iduser"])){
      $data['title'] = 'Data User';
      $data['usr'] = $this->model('User_model')->getAllUser();
      $this->view('templates/header', $data);
      $this->view('User/index');
      $this->view('templates/footer');
   }else{
      $this->view('templates/header2');
      $this->view('user/login');
      $this->view('templates/footer');
   }
 }
 public function detail($id){
    $data['title'] = 'Detail User';
    $data['usr'] = $this->model('User_model')->getAllUserById($id);
    $this->view('templates/header', $data);
    $this->view('User/detail', $data);
    $this->view('templates/footer');
   }
   public function edit($id){

    $data['title'] = 'Detail User';
    $data['usr'] = $this->model('User_model')->getAllUserById($id);
    $this->view('templates/header', $data);
    $this->view('User/edit', $data);
    $this->view('templates/footer');
   }
   public function tambah(){
    $data['title'] = 'Tambah User';  
    $this->view('templates/header', $data);
    $this->view('User/tambah');
    $this->view('templates/footer');
   }
  
   public function simpanUser(){    
    $password    = $_POST['password'];
    $username = $_POST['username'];
	$iduser = $_POST['iduser'];

	$data['usr'] = $this->model('User_model')->tambahUser($username, $password,$idUser);
	header('location:../User');
   }
  
   public function updateUser(){  
    $iduser    = $_POST['iduser']; 
    $password    = $_POST['password'];
    $username = $_POST['username'];

    $data['usr'] = $this->model('User_model')->updateUser($username, $password,$iduser);
	header('location:../User');
   }
  
   public function hapus($id){
    $data['usr'] = $this->model('User_model')->deleteUser($id); 
    header('location:../../User');
   }
	
	public function prosesLogin(){
		session_start();
		if (isset($_POST["tuser"])){		
			$user=$_POST["tuser"];
			$pass=$_POST["tpass"];
			$data['user']=$this->model('User_model')->cekUser($user,$pass);			
			if (!$data['user']){ 
			   //echo "User Tdk Valid";
            header("location:".BASEURL."\home");
         }
			else
			{  //echo "UserValid";           
			   $_SESSION["iduser"]=$data['user']['iduser'];						   
			   header("location:".BASEURL."\home");
			}
		}  
	} 
	public function logout(){
		session_start();
		session_destroy();
		header("location:".BASEURL."\home");
	}  

}

