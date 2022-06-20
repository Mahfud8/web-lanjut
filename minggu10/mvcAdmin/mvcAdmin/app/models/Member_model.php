<?php

class Member_model{
  
	private $table = 'member';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}
	public function getAllMember(){
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	} 
}

