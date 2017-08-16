<?php
header("content-type:text/html;charset=utf-8");
include("../Model/Db.class.php");
class Jobdetail{
	public $db;
	public function __construct($db){
		$this->db=$db;
	}
	public function getDetail(){
		 $sql="select * from job";
		return $this->db->selectRows($sql);
	}
}
$db=new Db();
$j=new Jobdetail($db);
$res=$j->getDetail();
print_r($res);
