<?php
class Contact{
	public $db;
	public $user;
	public $email;
	public $phone;
	public $address;
	public $content;
	public function  __construct($db){
		$this->db=$db;
		$this->getForm();
	}
	public function getForm(){
		 $this->user=$_POST['user'];
		 $this->email=$_POST['email'];
		 $this->phone=$_POST['phone'];
		 $this->address=$_POST['address'];
		 $this->content=$_POST['content'];
		
	}
	public function addcontactMessage(){
		 $sql="insert into contact_message(user,email,phone,address,content) values('{$this->user}','{$this->email}','{$this->phone}','{$this->address}','{$this->content}')";
		return $this->db->otherData($sql);
	}
}
