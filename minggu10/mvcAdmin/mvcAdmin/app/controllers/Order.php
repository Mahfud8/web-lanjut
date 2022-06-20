<?php

/* class Member extends Controller { 

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
} */

class Order extends Controller {
  
    public function index(){	 
        session_start();
        if (isset($_SESSION["iduser"])){
            $data['title'] = 'Data Order';
            $data['order'] = $this->model('Order_model')->getAllOrder();
            $this->view('templates/header');
            $this->view('order/index', $data);
            $this->view('templates/footer');
        }else{
            $this->view('templates/header2');
            $this->view('user/login');
            $this->view('templates/footer');
        }
    }

    public function delOrder($id){       
        $data['order'] = $this->model('Order_model')->deleteOrder($id);	
        header("location:".BASEURL."/order");
    }
}