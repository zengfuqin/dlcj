<?php
class Job{
	public $db;
	public function __construct($db){
		$this->db=$db;
	}
	//从数据库获取职位
	public function  getJob(){
		$sql="select * from job";
		return $this->db->selectRows($sql);
	}
}