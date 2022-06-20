<?php

class Order_model{
  
	private $table = 'tborder';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}
	public function getAllOrder(){
		$this->db->query("SELECT * FROM " . $this->table);
		return $this->db->resultSet();
	} 

    public function getOrderById($id){
		$sql="SELECT * FROM " . $this->table . " WHERE id=:id";
		$this->db->query($sql);
		$this->db->bind('id',$id);
		return $this->db->single();
	}

    public function deleteOrder($id){
        $sql="DELETE FROM ". $this->table . " WHERE id=:id";
        $hasil=$this->db->query($sql);
        $this->db->bind('id',$id);
        $this->db->single();	  
  }
}