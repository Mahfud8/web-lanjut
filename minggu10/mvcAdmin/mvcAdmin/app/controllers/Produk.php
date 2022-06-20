<?php

class Produk extends Controller {
  
    public function index(){	 
     session_start();
     if (isset($_SESSION["iduser"])){
        $data['title'] = 'Data Produk';
        $data['produk'] = $this->model('Produk_model')->getAllProduct();
        $this->view('templates/header');
        $this->view('produk/index', $data);
        $this->view('templates/footer');
     }else{
        $this->view('templates/header2');
        $this->view('user/login');
        $this->view('templates/footer');
     }
    }
 
   public function detail($id){
    $data['title'] = 'Detail Produk';
    $data['produk'] = $this->model('Produk_model')->getProductById($id);
    $this->view('templates/header', $data);
    $this->view('produk/detail', $data);
    $this->view('templates/footer');
   }
   public function edit($id){

    $data['title'] = 'Detail Produk';
    $data['produk'] = $this->model('Produk_model')->getProductById($id);
    $this->view('templates/header');
    $this->view('produk/edit', $data);
    $this->view('templates/footer');
   }
   public function tambah(){
    $data['title'] = 'Tambah Produk';  
    $this->view('templates/header', $data);
    $this->view('produk/tambah');
    $this->view('templates/footer');
   }
  
   public function insProduk(){    
	$hasil=$this->model('Produk_model')->add($_POST,$_FILES['foto']);		
	header("location:".BASEURL."/produk");
   }
  
   public function updProduk(){  
	$this->model('Produk_model')->edit($_POST,$_FILES['foto']);
	header("location:".BASEURL."/produk");
   }
  
   public function delProduk($id){       
	$this->model('Produk_model')->del($id);	
	header("location:".BASEURL."/produk");
   }
          
}

