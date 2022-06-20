<?php

class User_model{
  
 private $table = 'user';
 private $db;

 public function __construct()
 {
  $this->db = new Database;
 }
 public function cekUser($user,$pass){
  $sql="SELECT * FROM " . $this->table . " WHERE username='$user' and password='$pass'";	 
  $this->db->query($sql);
  return $this->db->single();
 }
 public function getAllUser()
 {
  $this->db->query('SELECT * FROM ' . $this->table);
  return $this->db->resultSet();
 }

 public function getAllUserById($id)
 {
  $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idUser=:id');
  $this->db->bind('id',$id);
  return $this->db->single();
 }

 public function tambahUser($username, $password,$iduser)
 {
  $this->db->query('SELECT (max(idUser)+1) as maks_id  FROM ' . $this->table);
  $data=$this->db->resultSet();
  foreach ($data as $rec){
	  $id=$rec["maks_id"];}
	  
  $this->db->query('INSERT INTO ' . $this->table . '(idUser,username, password) VALUES(:idUser,:username, :password)');
	$this->db->bind('idUser',$id);
	$this->db->bind('username',$username);
	$this->db->bind('password',$password);
    $this->db->execute();
 }

public function updateUser($username,$password,$iduser)
{
	$this->db->query('UPDATE ' . $this->table . ' SET username=:username,password=:password WHERE iduser=:iduser');
	$this->db->bind('iduser',$iduser);
	$this->db->bind('username',$username);
	$this->db->bind('password',$password);
	$this->db->execute();
}

 public function deleteUser($id)
 {
  $this->db->query('DELETE FROM ' . $this->table . ' WHERE idUser=:idUser');
  $this->db->bind('idUser',$id);
  $this->db->execute();
 }


}

